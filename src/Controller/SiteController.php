<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;

class SiteController extends AbstractController
{
    /**
     * @Route("/produits", name="be-unique")
     */
    public function index(Request $request): Response
    
    {
        $category = $request->query->get("category");
        
        $produits= $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findBy(
                array("categorie"=> $category)
            );

        return $this->render('Site/produits.html.twig', [
            'produits' => $produits,
        ]);
    }

    /**
     *  @Route("/", name="home")
     */
    public function  home(){
        return $this->render('Site/home.html.twig');

    }

     /**
     *  @Route("/contact", name="contact")
     */
    public function  contact(){
        return $this->render('Site/contact.html.twig');

    }
     /**
     *  @Route("/compte", name="compte")
     */
    public function  compte(){
        return $this->render('Site/compte.html.twig');

    }
     /**
     *  @Route("/panier", name="panier")
     */
    public function  panier(){
        return $this->render('Site/panier.html.twig');

    }
}
