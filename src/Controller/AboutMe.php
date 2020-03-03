<?php

namespace App\Controller;

use App\Entity\AskName;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/", name="learning")
     */
    public function index()
    {
        $user = new AskName();
        $user->setName('unknown');
        $userName = $user->getName();


        if(isset($_POST['change'])){
            return $this->redirectToRoute('homepage');

        }

        $session = new Session();
        $session->set('name', $userName);
        $userName = $session->get('name');
var_dump($_SESSION);
        return $this->render('learning/index.html.twig', [
            'userName'=> $userName
        ]);
    }

}
