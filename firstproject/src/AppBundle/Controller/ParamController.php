<?php
// https://codereviewvideos.com/course/symfony2-tutorial-for-beginners/video/symfony-routing-and-controllers //
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParamController extends Controller
{
    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function indexAction($name)
    {
        return $this->render('hello/name.html.twig',[
            'name'=>$name,
            'other_name'=>'world',
        ]);
    }
}
