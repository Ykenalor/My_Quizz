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
//        print_r($id_ques);

        $res = $reponseRepository->findBy(array('id_question' => $id_ques),array('id_question' => 'ASC'));

        $managerRegistry = $reponseRepository->find($id);
//        var_dump($managerRegistry);
        $product = $reponseRepository->findOneBy(['id_question' => $id]);
        var_dump($product);

        $toto = $questionRepository->findOneBy(array('id' => $id_ques));
        var_dump($toto);

//        $quesObj = (object) array(
//            'question' => '',
//            'reponse' => [1,2,3],
//            'result' => 1
//        );

        return $this->render('question/index.html.twig', array(
            'controller_name' => 'QuestionController',
            'question' => $toto,
//            'reponse' => $res,
//            'resultat' => $quesObj

        ));
    }

}
