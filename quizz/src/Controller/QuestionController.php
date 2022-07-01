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

    public function findQuestionsByCat(QuestionRepository $questionRepository): Response
    {

        $ques = $questionRepository->findBy(array('id_categorie' => '5'),array('id' => 'ASC'));
        print_r($ques);

        return $this->render('question/index.html.twig', [
            'controller_name' => 'QuestionController',
        ]);
    }
}
