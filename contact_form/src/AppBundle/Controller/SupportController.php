<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\ContactFormType;

class SupportController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(ContactFormType::class, null, [
            'action' => $this ->generateUrl('handle_form_submission'),
        ]);

        return $this->render('support/index.html.twig', [
            'our_form' => $form ->createView()
        ]);
    }
    
    /**
     * @param Request $request
     * @Route("/form-submission" , name="handle_form_submission")
     * @Method("POST")
     */
    public function handleFormSubmissionAction(Request $request)
    {
        $form = $this->createForm(ContactFormType::class);

        $form -> handleRequest($request);

        if ( ! $form->isSubmitted() || ! $form->isValid())
        {
            return $this ->redirectToRoute('homepage');
        }

        $data = $form->getData();

        dump($data);

        $message = \Swift_Message::newInstance()
            ->setSubject('Support Form Submission')
            ->setFrom($data['from'])
            ->setTo(['mail@mail.com'])
            ->setBody(
                $form->getData()['message'],
                    'text/plain');
        
        $this -> get('mailer')->send($message);
        
        $this -> addFlash('success', 'twoja wiadomosc zostala wyslana!');
        
        return $this ->redirectToRoute('homepage');
    }
}
    