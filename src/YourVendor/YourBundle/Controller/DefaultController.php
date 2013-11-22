<?php

namespace YourVendor\YourBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YourVendorYourBundle:Default:index.html.twig', array('name' => $name));
    }
}
