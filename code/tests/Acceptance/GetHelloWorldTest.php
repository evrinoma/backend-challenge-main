<?php

declare(strict_types=1);

namespace App\Tests\Acceptance;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GetHelloWorldTest extends WebTestCase
{
    public function testGetHelloWorld_returns_HelloWorld(): void
    {
        $client = static::createClient();
        $client->request('GET', '/hello-world');

        self::assertEquals(200, $client->getResponse()->getStatusCode());
        self::assertStringContainsString("Hello World", $client->getResponse()->getContent());
    }
}
