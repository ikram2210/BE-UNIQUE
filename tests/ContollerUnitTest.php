<?php

// tests/Controller/PostControllerTest.php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
{
    public function testcompteRoute()
    {
        $client = static::createClient();

        // GET pour afficher la page
        $client->request('GET', '/compte');

        // on vérifie que la réponse est 200 ( OK )
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    public function testHomeRoute()
    {
        $client = static::createClient();

        // GET pour afficher la page
        $client->request('GET', '/');

        // on vérifie que la réponse est 200 ( OK )
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    public function testAproposRoute()
    {
        $client = static::createClient();

        // GET pour afficher la page
        $client->request('GET', '/apropos');

        // on vérifie que la réponse est 200 ( OK )
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    public function testContactRoute()
    {
        $client = static::createClient();

        // GET pour afficher la page
        $client->request('GET', '/contact');

        // on vérifie que la réponse est 200 ( OK )
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    public function testMentionsRoute()
    {
        $client = static::createClient();

        // GET pour afficher la page
        $client->request('GET', '/mentions');

        // on vérifie que la réponse est 200 ( OK )
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    public function testConditionsRoute()
    {
        $client = static::createClient();

        // GET pour afficher la page
        $client->request('GET', '/conditions');

        // on vérifie que la réponse est 200 ( OK )
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
   
   
   

}
