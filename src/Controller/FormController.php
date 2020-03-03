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
     * @Route("/form", name="form")
     */
    public function index()
    {


        $session = new Session();
        $getName = new AskName();
        $getName->setName('unknown');
        if(isset($_POST['submitName'])) {

            $getName->setName($_POST['name']);
            $userName = $getName->getName();

            $session->set('name', $_POST['name']);
            $userName = $session->get('name');
            return $this->redirectToRoute('homepage', ['userName'=> $userName]);

        }



        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }




}
