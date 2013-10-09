<?php

namespace VolunteerManagementSystem\ProjectBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConfirmControllerTest extends WebTestCase
{
    public function testConfirmprojectcreation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/confirmprojectCreation');
    }

}
