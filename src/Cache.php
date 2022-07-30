<?php

declare(strict_types=1);

namespace StopWords;

class Cache
{
    public const CACHE_FILE = 'cache.json';
    public const WORDS_FOLDER = 'words';

    private string $cachePath;
    private string $wordsPath;

    /** @var list<string> Cache file turn into a workable PHP array */
    private array $content;

    /** @throws IrregularLanguageFileException */
    public function __construct()
    {
        $this->cachePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . self::CACHE_FILE;
        $this->wordsPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . self::WORDS_FOLDER . DIRECTORY_SEPARATOR;

        if (file_exists($this->cachePath) === false) {
            $this->refresh();
        }

        $this->load();
    }

    /**
     * @return list<string> List of words to remove
     *
     * @throws LanguageNotFoundException
     * @throws IrregularLanguageFileException
     */
    public function find(string $language) : array
    {
        $language = mb_strtolower($language);
        $filePath = $this->inHandlers($language);

        if ($filePath === null) {
            $this->refresh();
            $filePath = $this->inHandlers($language);

            if ($filePath === null) {
                throw LanguageNotFoundException::fromLanguage($language);
            }
        }

        $result = json_decode(file_get_contents($filePath), true);

        if (isset($result['words']) === false) {
            throw IrregularLanguageFileException::fromFile($filePath);
        }

        return $result['words'];
    }

    private function inHandlers(string $handler) : ?string
    {
        $filePath = null;

        foreach ($this->content as $filename => $handlers) {
            if (in_array($handler, $handlers)) {
                $filePath = $this->wordsPath . $filename;
                break;
            }
        }

        return $filePath;
    }

    private function load() : void
    {
        $this->content = json_decode(file_get_contents($this->cachePath), true);
    }

    /** @throws IrregularLanguageFileException */
    private function refresh() : void
    {
        $handlers = array();
        $fileList = preg_grep('~\.(json)$~', scandir($this->wordsPath));

        foreach ($fileList as $item) {
            $content = json_decode(file_get_contents($this->wordsPath . $item), true);

            if (isset($content['handlers']) === false) {
                throw IrregularLanguageFileException::fromFile($this->wordsPath . $item);
            }

            $handlers[$item] = $content['handlers'];
        }

        $this->content = $handlers;
        file_put_contents($this->cachePath, json_encode($handlers));
    }
}
