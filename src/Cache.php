<?php

declare(strict_types=1);

namespace StopWords;

class Cache
{
    public CONST CACHE_PATH = './src/cache.json';
    public CONST WORDS_PATH = './src/words/';

    private $content;

    public function __construct()
    {
        if (file_exists(self::CACHE_PATH) === false) {
            $this->refresh();
        }

        $this->load();
    }

    /**
     * @param string $language
     *
     * @return array
     *
     * @throws LanguageNotFoundException
     * @throws IrregularLanguageFileException
     */
    public function find(string $language): array
    {
        $language = mb_strtolower($language);
        $filePath = $this->inHandlers($language);

        if (is_null($filePath)) {
            $this->refresh();
            $filePath = $this->inHandlers($language);

            if (is_null($filePath)) {
                throw new LanguageNotFoundException();
            }
        }

        $result = json_decode(file_get_contents($filePath), true);

        if (isset($result['words']) === false) {
            throw new IrregularLanguageFileException();
        }

        return $result['words'];
    }

    private function inHandlers(string $handler): ?string
    {
        $filePath = null;

        foreach ($this->content as $filename => $handlers) {
            if (in_array($handler, $handlers)) {
                $filePath = self::WORDS_PATH . $filename;
                break;
            }
        }

        return $filePath;
    }

    private function load(): void
    {
        $this->content = json_decode(file_get_contents(self::CACHE_PATH), true);
    }

    private function refresh(): void
    {
        $handlers = array();
        $fileList = preg_grep('~\.(json)$~', scandir(self::WORDS_PATH));

        foreach ($fileList as $item) {
            $content = json_decode(file_get_contents(self::WORDS_PATH . $item), true);
            $handlers[$item] = $content['handlers'];
        }

        $this->content = $handlers;
        file_put_contents(self::CACHE_PATH, json_encode($handlers));
    }
}