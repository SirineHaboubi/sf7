<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    // 1) Route simple qui renvoie une Response HTML brute
    #[Route('/', name: 'homepage')]
    public function home(): Response
    {
        return new Response('<h1>Ma première page Symfony</h1>');
    }

    // 2) Route qui affiche une vue Twig (sans paramètre)
    #[Route('/twig', name: 'twig_example')]
    public function twigExample(): Response
    {
        // On passe un nom par défaut pour éviter une erreur dans Twig
        return $this->render('index.html.twig', ['name' => 'Utilisateur']);
    }

    // 3) Route avec paramètre (ex: /Nadhem)
    #[Route('/hello/{name}', name: 'hello')]
    public function hello(string $name): Response
    {
        return $this->render('index.html.twig', ['name' => $name]);
    }
}
