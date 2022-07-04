<?php

namespace App\Controller;

use App\Repository\ReponseRepository;
use App\Entity\Reponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReponseController extends AbstractController
{
    /**
     * @Route("/reponse", name="app_reponse")
     */

    public function index(Request $request, ReponseRepository $reponseRepository): Response
    {
        $id_ques = $request->query->get('id');
        print_r($id_ques);

        $res = $reponseRepository->findBy(array('id_question' => $id_ques),array('id_question' => 'ASC'));

        return $this->render('reponse/index.html.twig', [
            'controller_name' => 'ReponseController',
            'reponse' => $res
        ]);
    }
}
