<?php

declare(strict_types=1);

namespace StopWords\Tests;

use PHPUnit\Framework\TestCase;
use StopWords\Cache;
use StopWords\IrregularLanguageFileException;
use StopWords\LanguageNotFoundException;

class CacheTest extends TestCase
{
    /** @test */
    public function returnsWordsTest() : void
    {
        $cache = new Cache();
        self::assertIsArray($cache->find('es'));
    }

    /** @test */
    public function languageNotFoundTest() : void
    {
        $cache = new Cache();

        self::expectException(LanguageNotFoundException::class);
        $cache->find('ZZZ');
    }

    /** @test */
    public function irregularFileTest(): void
    {
        $filePath = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR .
            'words' . DIRECTORY_SEPARATOR . 'test.json';

        file_put_contents($filePath, '{"handlers": ["test"]}');
        $cache = new Cache();

        self::expectException(IrregularLanguageFileException::class);
        $cache->find('test');
        unlink($filePath);
    }
}
