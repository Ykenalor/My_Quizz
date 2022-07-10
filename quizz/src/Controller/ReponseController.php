<?php

namespace App\Controller;

use App\Repository\ReponseRepository;
use App\Entity\Reponse;
use Doctrine\Persistence\ManagerRegistry;
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

        var_dump($res);
        
        return $this->render('reponse/index.html.twig', [
            'controller_name' => 'ReponseController',
            'reponse' => $res
        ]);
    }

    public function showResponses(ManagerRegistry $managerRegistry, int $id){

        $req = $managerRegistry->getRepository(Reponse::class)->find($id);

        return new Response('Check out this great product: '.$managerRegistry->getName());
    }
}
