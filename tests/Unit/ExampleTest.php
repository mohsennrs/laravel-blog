<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
	use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

    	$first=factory(\App\Post::class)->create();
    	$second=factory(\App\Post::class)->create([
    		'created_at'=>\Carbon\Carbon::now()->subMonth()
    	]);

    	$posts=\App\Post::archives();

    	$this->assertCount(2,$posts);
    }
}
