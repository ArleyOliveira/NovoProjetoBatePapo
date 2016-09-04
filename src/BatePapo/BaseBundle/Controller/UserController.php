<?php

namespace BatePapo\BaseBundle\Controller;

use BatePapo\BaseBundle\Entity\User;
use BatePapo\BaseBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class UserController
 * @package BatePapo\BaseBundle\Controller
 *
 * @Template()
 * @Route("/user")
 */
class UserController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            try {

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $this->addSuccessMessage('user.new.success');

            } catch (\Exception $e) {
                $this->addErrorMessage('user.new.error');

            }
            return $this->redirectToRoute('default_index');
        }

        return array(
            'user' => $user,
            'form' => $form->createView()
        );

    }

    /**
     * @param $message
     */
    private function addErrorMessage($message)
    {
        $this->get('session')->getFlashBag()->add('error', $message);
    }

    /**
     * @param $message
     */
    private function addSuccessMessage($message)
    {
        $this->get('session')->getFlashBag()->add('success', $message);
    }

    /**
     * @param $message
     */
    private function addInfoMessage($message)
    {
        $this->get('session')->getFlashBag()->add('info', $message);
    }

}
