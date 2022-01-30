<?php

namespace App\Modules\Blog\Tests;

use Tests\TestCase;

class BlogEntriesTest extends TestCase
{
    //
    public function testBlogEntryCaseOne()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
