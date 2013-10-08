<?php

namespace VolunteerManagementSystem\ProjectBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectCreationControllerTest extends WebTestCase
{
    public function testProjectcreation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/projectcreation');
    }

}
