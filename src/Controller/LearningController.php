<?php

namespace App\Controller;

use App\Entity\AskName;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/learning", name="learning")
     */
    public function index()
    {
        if(isset($_POST['change'])){
            return $this->redirectToRoute('homepage');

        }

        $session = new Session();
        $userName = $session->get('name');

        return $this->render('learning/index.html.twig', [
            'userName'=> $userName
        ]);
    }

}
