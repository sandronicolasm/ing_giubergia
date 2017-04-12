<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:index.html.twig');
    }

    /**
     * @Route("/accesorios", name="accesorios")
     */
    public function accesoriosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:accesorios.html.twig');
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:contacto.html.twig');
    }


    /**
     * @Route("/localizadores", name="localizadores")
     */
    public function localizadoresAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:localizadores.html.twig');
    }

    /**
     * @Route("/radios", name="radios")
     */
    public function radiosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:radios.html.twig');
    }

    /**
     * @Route("/tacografos", name="tacografos")
     */
    public function tacografosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:tacografos.html.twig');
    }


    public function taximetrosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':index:taximetros.html.twig');
    }

    /**
     * @Route("/printf", name="printf")
     */
    public function printAction()
    {
        $this->get('knp_snappy.pdf')->generateFromHtml(
            $this->renderView(
                'index/index.html.twig',
                array(
                )
            ),
            '/web/assets/impresiones/certificado.pdf'
        );
    }
}
