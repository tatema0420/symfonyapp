<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index(Request $request)
    {
        $name = $request->query->get('name');
        $pass = $request->query->get('pass');
        $result = '<html><body><ol>';
        $result .= '<h1>Subscribed Services</h1>';
        $result .= '<p>name:' . $name . '</p>';
        $result .= '<p>pass:' . $pass . '</p>';
        $result .= '</body></html>';
        return new Response($result);
    }
}
