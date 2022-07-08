<?php

namespace App\Controller;



use App\Entity\Question;
use App\Entity\Reponse;
use App\Repository\QuestionRepository;
use App\Controller\ReponseController;
use App\Repository\ReponseRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\Mapping\Driver\PHPDriver;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Service\Attribute\Required;


class QuestionController extends AbstractController
{



    /**
     * @Route("/question", name="app_question")
     */


    public function findQuestionsByCat (Request $request,ManagerRegistry $managerRegistry, QuestionRepository $questionRepository, ReponseRepository $reponseRepository): Response
    {

        $id = $request->query->get('id');
        $id_ques = $request->query->get('id');




        $res = $reponseRepository->findBy(array('id_question' => $id_ques),array('id_question' => 'ASC'));

//        $managerRegistry = $reponseRepository->find($id);

        $reponse = $reponseRepository->findBy(['id_question' => $id]);


        $currQuestion = $questionRepository->findOneBy(array('id' => $id_ques));


        return $this->render('question/index.html.twig', array(
            'controller_name' => 'QuestionController',
            'question' => $currQuestion,
            'reponse' => $reponse,

        ));
    }


}
