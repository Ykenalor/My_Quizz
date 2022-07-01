<?php


namespace App\Controller;

use App\Entity\Question;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class QuestionController extends AbstractController
{
    /**
     * @Route("/question",
     *     name="app_question",
     *     )
     */

    public function findQuestionsByCat(Request $request, QuestionRepository $questionRepository): Response
    {
        $id = $request->query->get('id');

        $ques = $questionRepository->findBy(array('id_categorie' => $id),array('id' => 'ASC'));
        print_r($ques);


        return $this->render('question/index.html.twig', [
            'controller_name' => 'QuestionController',
        ]);
    }
}
