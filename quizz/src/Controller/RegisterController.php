<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\Repository\RepositoryFactory;
use PhpParser\Node\Expr\Print_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use function PHPSTORM_META\type;

class RegisterController extends AbstractController
{



    public function index(UserRepository  $userRepository): Response
    {






//flush and send


return $this->render('register/index.html.twig', [
            'controller_name' => 'RegisterController',
        ]);
    }



public function create(  Request $req ,UserRepository  $userRepository, PasswordAuthenticatedUserInterface $password )

{


    $password;

    $user = new User();
    $pseudo= $req->request->get('pseudo');

    $password= $req->request->get('password');




    $user->setPassword(md5($password));
    
    $user->setPseudo($pseudo);
    $user->setRoles(["user"]);
    $userRepository->add($user, true);



    return $this->render('register/index.html.twig', [
        'controller_name' => 'RegisterController',
    ]);
}
}
 


