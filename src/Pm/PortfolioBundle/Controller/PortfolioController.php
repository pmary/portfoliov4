<?php

namespace Pm\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pm\PortfolioBundle\Entity\Projects;
use Symfony\Component\HttpFoundation\Request;

class PortfolioController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('PmPortfolioBundle:Portfolio:index.html.twig');
    }

    public function portfolioAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $projectsRepository = $em->getRepository('PmPortfolioBundle:Projects');
        $projects = $projectsRepository->findAll();

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

    public function adminprojectseditAction($id)
    {
        // Récupération des infos du projet contenu dans la table projects
        $em = $this->getDoctrine()->getEntityManager();

        $projectsRepository = $em->getRepository('PmPortfolioBundle:Projects');
        $project = $projectsRepository->findOneById($id);

        // Création du formulaire
        $projectForm = new Projects();

        $form = $this->createFormBuilder($projectForm)
            ->add('title', 'text', array(
                    'label' => 'Titre',
                    'data'  => $project->getTitle(),
                ))
            ->add('date', 'date', array(
                    'widget' => 'single_text',
                    'label'  => 'Date',
                    'data'  => $project->getDate(),
                ))
            ->add('software', 'text', array(
                    'label'  => 'Logiciel(s) utilisé(s)',
                    'data'  => $project->getSoftware(),
                ))
            ->add('software', 'text', array(
                    'label'  => 'Logiciel(s) utilisé(s)',
                    'data'  => $project->getSoftware(),
                ))
            ->add('description', 'text', array(
                    'label'  => 'Description',
                    'data'  => $project->getDescription(),
                ))
            ->getForm();

        return $this->render('PmPortfolioBundle:Admin:adminprojectsedit.html.twig', array('form' => $form->createView(), 'project' => $project));
    }
}
