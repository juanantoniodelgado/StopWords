<?php

declare(strict_types=1);

namespace StopWords\Tests;

use PHPUnit\Framework\TestCase;
use StopWords\Cache;
use StopWords\IrregularLanguageFileException;
use StopWords\LanguageNotFoundException;

class CacheTest extends TestCase
{
    /**
     * @test
     *
     * @throws LanguageNotFoundException
     * @throws IrregularLanguageFileException
     */
    public function returnsWordsTest(): void
    {
        $cache = new Cache();
        $this->assertIsArray($cache->find('es'));
    }

    /**
     * @test
     *
     * @throws LanguageNotFoundException
     * @throws IrregularLanguageFileException
     */
    public function languageNotFoundTest(): void
    {
        $cache = new Cache();

        $this->expectException(LanguageNotFoundException::class);
        $cache->find('ZZZ');
    }

    /**
     * @test
     *
     * @throws LanguageNotFoundException
     * @throws IrregularLanguageFileException
     */
    public function irregularFileTest(): void
    {
        $filePath = Cache::WORDS_PATH . 'test.json';

        file_put_contents($filePath, '{"handlers": ["test"]}');
        $cache = new Cache();

        $this->expectException(IrregularLanguageFileException::class);
        $cache->find('test');
        unlink($filePath);
    }
}
