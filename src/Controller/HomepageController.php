<?php

namespace App\Controller;

use App\Entity\AskName;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{

    public $name = 'hel';

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {



        if(isset($_POST['submitName'])) {
            $getName = new AskName();
            $getName->setName($_POST['name']);
            $userName = $getName->getName();

            $session = new Session();
            $session->start();
            $session->set('name', $_POST['name']);
            $userName = $session->get('name');
            return $this->redirectToRoute('learning', ['userName'=> $userName]);

        }



        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }




}
