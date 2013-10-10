<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OverallReportControllerTest extends WebTestCase
{
    public function testOverallreport()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/OverallReport');
    }

}
