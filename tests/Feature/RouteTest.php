<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomeTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAllFeedTest()
    {
        $response = $this->get('/main/all');

        $response
            ->assertStatus(200)
            ->assertJson([
                'error' => 404, 
                'msg' => 'Not yet implemented'
            ]);
    }
}
