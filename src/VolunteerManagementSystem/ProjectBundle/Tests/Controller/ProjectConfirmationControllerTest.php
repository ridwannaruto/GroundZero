<?php

namespace VolunteerManagementSystem\ProjectBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectConfirmationControllerTest extends WebTestCase
{
    public function testProjectconfirmation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/projectconfirmation');
    }

}
