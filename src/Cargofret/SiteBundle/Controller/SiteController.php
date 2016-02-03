<?php

namespace Cargofret\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Cargofret\SiteBundle\Entity\Client;
use Cargofret\SiteBundle\Form\ClientType;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBundle:Site:index.html.twig');
    }
	
	public function clientAction(Request $request)
  {
    $client = new Client();
    $form = $this->get('form.factory')->create(new ClientType(), $client);

    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($client);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $client->getId())));
    }

    return $this->render('SiteBundle:Site:client.html.twig', array(
      'form' => $form->createView(),
    ));
  }
}
