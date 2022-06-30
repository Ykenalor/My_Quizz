<?php


namespace App\Controller;

use App\Entity\Question;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/question", name="app_question")
     */
    public function index(QuestionRepository $questionRepository): Response
    {
        $ques = $questionRepository->findBy(array(
            'id_categorie'=> ''
        ), array(
            'question'=>'Desc'
        ),1,0);
        print_r( $ques);

//
//        $question = new Question();
//        $question->setIdCategorie();
//        $question->setQuestion();
//        $question->setId();
//
//        $entityManager->persist($question);


        return $this->render('question/index.html.twig', [
            'controller_name' => 'QuestionController',
        ]);
    }
}
