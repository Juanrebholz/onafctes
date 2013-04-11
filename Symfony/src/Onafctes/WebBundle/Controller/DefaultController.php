<?php

namespace Onafctes\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OnafctesWebBundle:Default:index.html.twig', array('name' => $name));
    }
}
