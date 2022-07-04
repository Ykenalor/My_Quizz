<?php

namespace App\Controller;



use App\Entity\Question;
use App\Repository\QuestionRepository;
use App\Controller\ReponseController;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Service\Attribute\Required;


class QuestionController extends AbstractController
{


    /**
     * @Route("/question",
     *     name="app_question",
     *     )
     */

    public function findQuestionsByCat(Request $request, QuestionRepository $questionRepository, ReponseRepository $reponseRepository): Response
    {
        $id = $request->query->get('id');

        $ques = $questionRepository->findBy(array('id_categorie' => $id),array('id' => 'ASC'));

        $id_ques = $request->query->get('id');
        print_r($id_ques);

        $res = $reponseRepository->findBy(array('id_question' => $id_ques),array('id_question' => 'ASC'));


        return $this->render('question/index.html.twig', [
            'controller_name' => 'QuestionController','ReponseController',
            'question' => $ques,
            'reponse' => $res
            
        ]);
    }
}
