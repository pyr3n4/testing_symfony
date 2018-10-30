<?php
// tests/Controller/PostControllerTest.php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/product/');  //en el ejercicio guiado la uri: /product/new

        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }
}