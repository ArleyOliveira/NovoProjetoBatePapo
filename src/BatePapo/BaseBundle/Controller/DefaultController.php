<?php

namespace BatePapo\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


/**
 * Class DefaultController
 * @package BatePapo\BaseBundle\Controller
 *
 * @Template()
 * @Route("/default")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="default_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return [
            'name' => 'Arley',
        ];
    }
}
