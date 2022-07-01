<?php

namespace App\Controller;

use App\Repository\ReponseRepository;
use App\Entity\Reponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReponseController extends AbstractController
{
    /**
     * @Route("/reponse", name="app_reponse")
     */
    public function findAnswerByQuestion(ReponseRepository $reponseRepository): Response
    {
        $res = $reponseRepository->findBy(array('id_question' => "1"));
        var_dump($res);
        return $this->render('reponse/index.html.twig', [
            'controller_name' => 'ReponseController',
        ]);
    }
}
