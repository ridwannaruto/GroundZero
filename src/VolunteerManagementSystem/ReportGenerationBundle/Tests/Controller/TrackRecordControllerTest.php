<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TrackRecordControllerTest extends WebTestCase
{
    public function testTrackrecord()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/TrackRecord');
    }

}
