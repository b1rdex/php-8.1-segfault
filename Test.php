<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Test extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testMock(): void
    {
    }

    /**
     * @return iterable<never>
     */
    public function provider(): iterable
    {
        yield ['' => $this->createMock(UploadedFile::class)];
    }
}
