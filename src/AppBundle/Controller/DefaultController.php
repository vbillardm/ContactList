<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
          $em = $this->getDoctrine()->getManager();
          $user = $this->getUser();
          $contacts = $em->getRepository('AppBundle:Contact')->findBy(array('user'=>$user));

          if (null === $user) {
            throw new NotFoundHttpException("Rien à voir ici.");
          }
          return $this->render('contact/index.html.twig', array(
              'contacts' => $contacts,
          ));
    }
}
