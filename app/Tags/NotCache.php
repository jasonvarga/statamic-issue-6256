<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class NotCache extends Tags
{
    /**
     * The {{ not_cache }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        return [];
    }

    /**
     * The {{ not_cache:example }} tag.
     *
     * @return string|array
     */
    public function example()
    {
        //
    }
}
