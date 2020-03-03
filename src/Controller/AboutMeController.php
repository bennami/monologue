<?php

namespace App\Controller;

use App\Entity\AskName;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class AboutMeController extends AbstractController
{
    /**
     * @Route("/", name="AboutMeController")
     */
    public function index()
    {
        //class object where name is stored
        $user = new AskName();

        //create new session
        $session = new Session();

        //when entering page, set name to unknown
        $user->setName('unknown');

        //get the  session if its there and store in variable, if that exists, the name will change to whatever the user inputs
        $userName = $session->get('username');
        if(isset($userName)){
            $user->setName($userName);
        }

        //otherwise, the username will be unknown
        $userName = $user->getName();

        //should the user want to change the name, this will be executed, and he will be redirected to the form controller
        if(isset($_POST['change'])){
            return $this->redirectToRoute('form');

        }

        //otherwise, the user enters the homepage when he accesses the site for the first time
        return $this->render('aboutMe/index.html.twig', ['userName'=> $userName]);
    }

}
