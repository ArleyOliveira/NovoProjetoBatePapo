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
 * @Route("/")
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

    /**
     * @Route("/about", name="default_about")
     * @Method("GET")
     */
    public function aboutAction()
    {
        return [
            ""
        ];
    }

    /**
     * @Route("/organization", name="default_organization")
     * @Method("GET")
     */
    public function organizationAction()
    {
        return [
            ""
        ];
    }

    /**
     * @Route("/join-us", name="default_join_us")
     * @Method("GET")
     */
    public function joinUsAction()
    {
        return [
            ""
        ];
    }


}
