<?php

namespace VolunteerManagementSystem\ProjectBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class submissionControllerTest extends WebTestCase
{
    public function testProjectsubmission()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/projectsubmission');
    }

}
