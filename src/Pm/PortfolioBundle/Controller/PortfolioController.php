<?php

namespace Pm\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pm\PortfolioBundle\Entity\Projects;
use Pm\PortfolioBundle\Entity\Medias;
use Symfony\Component\HttpFoundation\Request;
// Pour formulaire de contact
use Pm\PortfolioBundle\Entity\Enquiry;

class PortfolioController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('PmPortfolioBundle:Portfolio:index.html.twig');
    }

    public function portfolioAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $projectsRepository = $em->createQuery(
            'SELECT p FROM PmPortfolioBundle:Projects p ORDER BY p.date DESC'
        );
        $projects = $projectsRepository->getResult();

        $mediasRepository = $em->getRepository('PmPortfolioBundle:Medias');
        $medias = $mediasRepository->findAll();

        $categoriesQuery = $em->createQuery(
            'SELECT p FROM PmPortfolioBundle:Category p ORDER BY p.name'
        );
        $categories = $categoriesQuery->getResult();

        return $this->render('PmPortfolioBundle:Portfolio:portfolio.html.twig',array('projects' => $projects, 'medias' => $medias, 'categories' => $categories));
    }

    public function projectcardAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $projectsRepository = $em->getRepository('PmPortfolioBundle:Projects');
        $project = $projectsRepository->findOneById($id);

        // Récupération de la cover
        $mediasQuery = $em->createQuery(
            'SELECT p FROM PmPortfolioBundle:Medias p WHERE p.id = :coverid ORDER BY p.id ASC'
        )->setParameter('coverid', $project->getCover());
        $cover = $mediasQuery->getResult();

        $categoriesQuery = $em->createQuery(
            'SELECT p FROM PmPortfolioBundle:Category p WHERE p.id = :category1 OR p.id = :category2'
        )->setParameters(array(
            'category1' => $project->getCategory1(),
            'category2' => $project->getCategory2(),
            ));
        $categories = $categoriesQuery->getResult();

        return $this->render('PmPortfolioBundle:Portfolio:projectcard.html.twig',array('project' => $project, 'cover' => $cover, 'categories' => $categories));
    }

    public function contactAction()
    {
        // Création du formulaire de contact
        $contactForm = new Enquiry();

        $form = $this->createFormBuilder($contactForm)
            ->add('name', 'text', array(
                    'label' => 'Nom',
                ))
            ->add('email', 'email', array(
                    'label' => 'Email',
                ))
            ->add('subject', 'text', array(
                    'label' => 'Sujet',
                ))
            ->add('body', 'textarea', array(
                    'label' => 'Message',
                ))
            ->getForm();

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                
                $content = setTitle($form["subject"]->getData());
                $name = setTitle($form["name"]->getData());

                // Envois du message                    
                $message = \Swift_Message::newInstance()
                    ->setSubject(setTitle($form["subject"]->getData()))
                    ->setFrom(setTitle($form["email"]->getData()))
                    ->setTo('contact@pierre-mary.fr')
                    ->setBody(
                        $this->renderView(
                            'PmPortfolioBundle:Portfolio:contactemail.txt.twig',
                            array('name' => $name, 'content' => $content)
                        )
                    )
                ;
                $this->get('mailer')->send($message);

                return $this->redirect($this->generateUrl('pm_portfolio_contact'));
            }
        }

        return $this->render('PmPortfolioBundle:Portfolio:contact.html.twig',array(
            'form' => $form->createView()
        )); 
    }

    public function mentionsAction()
    {
        return $this->render('PmPortfolioBundle:Portfolio:mentions.html.twig'); 
    }

    public function aproposAction()
    {
        return $this->render('PmPortfolioBundle:Portfolio:apropos.html.twig'); 
    }

    public function adminhomeAction()
    {
        return $this->render('PmPortfolioBundle:Admin:adminhome.html.twig'); 
    }

    public function adminprojectsAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $projectsRepository = $em->getRepository('PmPortfolioBundle:Projects');
        $projects = $projectsRepository->findAll();

        return $this->render('PmPortfolioBundle:Admin:adminprojects.html.twig', array('projects' => $projects)); 
    }

    public function adminprojectseditAction($id, Request $request)
    {

        // Récupération des infos du projet contenu dans la table projects
        $em = $this->getDoctrine()->getEntityManager();

        $projectsRepository = $em->getRepository('PmPortfolioBundle:Projects');
        $project = $projectsRepository->findOneById($id);

        // Création du formulaire pour la partie projet
        $projectForm = new Projects();

        $form = $this->createFormBuilder($projectForm)
            ->add('id', 'hidden', array(
                    'data'  => $project->getId(),
                ))
            ->add('title', 'text', array(
                    'label' => 'Titre',
                    'data'  => $project->getTitle(),
                ))
            ->add('excerpt', 'text', array(
                    'label' => 'Excerpt',
                    'data'  => $project->getExcerpt(),
                ))
            /*
            ->add('date', 'date', array(
                    'widget' => 'single_text',
                    'label'  => 'Date',
                    'data'  => $project->getDate(),
                ))
                */
            ->add('software', 'text', array(
                    'label'  => 'Logiciel(s) utilisé(s)',
                    'data'  => $project->getSoftware(),
                ))
            ->add('description', 'textarea', array(
                    'label'  => 'Description',
                    'data'  => $project->getDescription(),
                    'attr' => array(
                        'class' => 'tinymce',
                        'data-theme' => 'medium' // simple, advanced, bbcode
                    )
                ))
            ->getForm();

        // Récupération de la cover
       $mediasQuery = $em->createQuery(
            'SELECT p FROM PmPortfolioBundle:Medias p WHERE p.id = :coverid'
        )->setParameter('coverid', $project->getCover());
        $cover = $mediasQuery->getResult();

        // Récupération de la thumb
       $mediasQuery = $em->createQuery(
            'SELECT p FROM PmPortfolioBundle:Medias p WHERE p.id = :thumbid ORDER BY p.id ASC'
        )->setParameter('thumbid', $project->getThumb());
        $thumb = $mediasQuery->getResult();

        // Récupération de toutes les catégories
        $categoriesRepository = $em->getRepository('PmPortfolioBundle:Category');
        $categories = $categoriesRepository->findAll();

        // Si un formulaire vient d'être soumis, enregistrer les données
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // Récupération et enregistrement des informations du formulaire

                //$title = $form["title"]->getData();
                $project->setTitle($form["title"]->getData());
                $project->setExcerpt($form["excerpt"]->getData());
                $project->setSoftware($form["software"]->getData());
                $project->setDescription($form["description"]->getData());
                $project->setCategory1($form["category1"]->getData());
                $project->setCategory2($form["category2"]->getData());

                $em->persist($project);
                $em->flush();
            }
        }

        return $this->render('PmPortfolioBundle:Admin:adminprojectsedit.html.twig', array(
            'form' => $form->createView(),
            'project' => $project,
            'cover'  => $cover,
            'thumb'  => $thumb,
            'categories'    => $categories,

        ));
    }
}
