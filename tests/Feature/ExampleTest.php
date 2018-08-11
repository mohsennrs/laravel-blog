<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $first=factory(App\Post::class)->create();
        $first=factory(App\Post::class)->create([
            'created_at'=>\Carbon\Carbon::now()->subMonth()
        ]);

        $posts=Post::archives();

        $this->assertCount(2,$posts);
    }
}
