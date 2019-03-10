<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HomeController
{
    
    public function __construct(\Twig\Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index(Request $request): Response
    {
        $locale = $request->getLocale();
        return new response($this->twig->render('page/home.html.twig', array('locale' => $locale)));
    }

}