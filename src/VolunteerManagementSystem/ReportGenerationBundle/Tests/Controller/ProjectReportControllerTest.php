<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectReportControllerTest extends WebTestCase
{
    public function testProjectreport()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ProjectReport');
    }

}
