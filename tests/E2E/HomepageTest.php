<?php

namespace App\Tests\E2E;

use Symfony\Component\Panther\PantherTestCase;

class HomepageTest extends PantherTestCase
{
    protected static function getKernelClass(): string
    {
        return 'App\Kernel';
    }

    public function testHomepageLoads(): void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/');

        $this->assertSelectorTextContains('h1', 'Welcome');
        $client->quit();

        // ⚡ Assure que le Kernel est bien fermé après le test
        static::ensureKernelShutdown();
    }
}
