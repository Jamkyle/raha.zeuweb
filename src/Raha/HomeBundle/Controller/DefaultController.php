<?php

namespace Raha\HomeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Import new namespaces
use Raha\HomeBundle\Entity\Enquiry;
use Raha\HomeBundle\Form\EnquiryType;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('RahaHomeBundle:Article');
        $entities = $repository->createQueryBuilder('p')
        ->orderBy('p.date', 'DESC')
        ->getQuery()
        ->getResult();

        return $this->render('RahaHomeBundle:Default:index.html.twig', array(
            'entities' => $entities));
    }

    public function aboutAction()
    {
        return $this->render('RahaHomeBundle:Default:about.html.twig');
    }

	public function contactAction()
	{
	   $enquiry = new Enquiry();

    $form = $this->createForm(new EnquiryType(), $enquiry);

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);

        if ($form->isValid()) {
            // Perform some action, such as sending an email

            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page
            return $this->redirect($this->generateUrl('raha_contact'));
        }
    }

    return $this->render('RahaHomeBundle:Default:contact.html.twig', array(
        'form' => $form->createView()
    ));
	}
}