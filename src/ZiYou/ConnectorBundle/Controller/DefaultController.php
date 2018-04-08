<?php

namespace ZiYou\ConnectorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZiYouConnectorBundle:Default:index.html.twig');
    }
}
