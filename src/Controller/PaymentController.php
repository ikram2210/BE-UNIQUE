<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class PaymentController extends AbstractController

{
  
  
    /**
     *  @Route("/success", name="success")
     */
    public function  success(){
        return $this->render('payment/success.html.twig');

    }
    
    /**
     *  @Route("/erreur", name="erreur")
     */
    public function  erreur(){
        return $this->render('payment/erreur.html.twig');

    }

  
  
    /**
     * @Route("/create-checkout-session", name="checkout")
     */
    public function checkout(): Response
    {
        \Stripe\Stripe::setApiKey('sk_test_51IZNrML6Jn5FyECcSxOBOeTdKwzIt1dVasfPaZDei4mpmwRJQEuabgK5SIXr4CCHW3Q36gxjmtszLkEWCGCJpbs600ojXlh7Fd');
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Votre commande',
                ],
                'unit_amount' => 2000,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success',[], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('erreur',[], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);
          return new JsonResponse(['id' => $session->id]);
    }
    
}
