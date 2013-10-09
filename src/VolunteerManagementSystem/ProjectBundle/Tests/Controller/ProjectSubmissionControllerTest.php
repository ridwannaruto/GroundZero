<?php

namespace VolunteerManagementSystem\ProjectBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectSubmissionControllerTest extends WebTestCase
{
    public function testProjectsubmission()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/projectsubmission');
    }

}
