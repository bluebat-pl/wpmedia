<?php

final class Crawler
{
    /**
     * @var array $links
     */
    private $links = [];

    /**
     * @var Storage $storage
     */
    private $storage;

    /**
     * @var string $filepath
     */
    private $filepath = '..' . DIRECTORY_SEPARATOR . 'sitemap.html';

    /**
     * @var string $cacheKey
     */
    private $cacheKey = 'WpMediaCrawlerResults';

    /**
     * @param Storage $storage
     */
    public function __construct($storage)
    {
        $this->storage = $storage;
        $storage->unlink($this->filepath);
        $storage->clearCache($this->cacheKey);
        $this->setFirstLink();
    }

    public function crawl()
    {
        try {
            $content = '';
            foreach ($this->links as $link) {
                $page = file_get_contents($link); // better would be use guzzle HTTP, but will keep it simple
                $dom = new DOMDocument;
                $dom->loadHTML($page);
                $hrefs = $dom->getElementsByTagName('a');
                foreach ($hrefs as $href) {
                    $content .= $href->nodeValue . ' ' . $href->getAttribute('href') . PHP_EOL;
                }
            }
            $this->storage->cache($this->cacheKey, $content);
            $content = nl2br($content);
            $this->storage->save($this->filepath, $content);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }

        return $content;
    }

    private function setFirstLink()
    {
        $this->links[] = get_home_url();
    }
}
