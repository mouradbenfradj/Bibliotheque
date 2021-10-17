<?php

namespace App\Controller;

use App\Repository\LivreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/")
*/
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(LivreRepository $livreRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'livres' => $livreRepository->findAll(),
        ]);
    }
    /*
    public function index(LivreRepository $livreRepository, Request $request): Response
    {
        $data = new SearchLivre();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);
        $livres = $livreRepository->findSearch($data);
        return $this->render('default/index.html.twig', [
            'livres' =>  $livres,
            'form' => $form->createView()
        ]);
    }
    */
}
