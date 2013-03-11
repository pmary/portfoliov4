<?php

namespace Pm\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pm\PortfolioBundle\Entity\Projects;
use Pm\PortfolioBundle\Entity\Medias;
use Symfony\Component\HttpFoundation\Request;
// Pour formulaire de contact
use Pm\PortfolioBundle\Entity\Enquiry;

class AjaxController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('PmPortfolioBundle:Ajaxpages:index.html.twig');
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

        return $this->render('PmPortfolioBundle:Ajaxpages:portfolio.html.twig',array('projects' => $projects, 'medias' => $medias, 'categories' => $categories));
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

        return $this->render('PmPortfolioBundle:Ajaxpages:projectcard.html.twig',array('project' => $project, 'cover' => $cover, 'categories' => $categories));
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

        return $this->render('PmPortfolioBundle:Ajaxpages:contact.html.twig',array(
            'form' => $form->createView()
        )); 
    }

    public function mentionsAction()
    {
        return $this->render('PmPortfolioBundle:Ajaxpages:mentions.html.twig'); 
    }

    public function aproposAction()
    {
        return $this->render('PmPortfolioBundle:Ajaxpages:apropos.html.twig'); 
    }

}