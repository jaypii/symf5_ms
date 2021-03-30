<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number", name="lucky")
    */
    public function number(): Response
    {
        $title = 'Lucky Number';
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'page_title' => $title,
            'number' => $number,
        ]);
    }
}