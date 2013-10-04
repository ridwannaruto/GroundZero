<?php

namespace VolunteerManagementSystem\ProfileBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditNameControllerTest extends WebTestCase
{
    public function testEditname()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editName');
    }

}
