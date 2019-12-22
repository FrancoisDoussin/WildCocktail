<?php
declare(strict_types=1);

use App\Service\Slugger;
use PHPUnit\Framework\TestCase;

final class SluggerTest extends TestCase
{
    public function testSluggerSlugMethod(): void
    {
        $slugger = new Slugger();

        $this->assertEquals(
            'test-michel',
            $slugger->slug('test Michel')
        );
        $this->assertEquals(
            'coucou-je-suis-1-slug',
            $slugger->slug('coucou je Suis 1 slUg')
        );
    }
}
