<?php

namespace Vivait\InstallSuccessfulBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VivaitInstallSuccessfulBundle:Default:index.html.twig', []);
    }
}
