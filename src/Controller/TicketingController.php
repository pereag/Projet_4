<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class TicketingController
{
    
    public function __construct(\Twig\Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index(): Response
    {
        return new response($this->twig->render('page/Ticketing.html.twig'));
    }

}