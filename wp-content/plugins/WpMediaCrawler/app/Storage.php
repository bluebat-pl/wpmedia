<?php

final class Storage
{
    /**
     * @param string $filepath
     */
    public function unlink($filepath)
    {
        unlink($filepath);
    }

    /**
     * @param string $key
     * @param $text
     */
    public function cache($key, $text)
    {
        add_option($key, $text);
    }

    /**
     * @param string $key
     */
    public function clearCache($key)
    {
        delete_option($key);
    }

    /**
     * @param string $filepath
     * @param string $text
     */
    public function save($filepath, $text)
    {
        file_put_contents($filepath, $text);
    }
}
