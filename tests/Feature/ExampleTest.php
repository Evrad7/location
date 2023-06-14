<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_region_index_route():void
    {
        $response=$this->get("/api/regions");
        $response->assertStatus(200);
    }

    public function  test_region_store_route():void{
        $this->withHeader("Content-Type","application/json");
        $response=$this->post("/api/regions/store", []);


    }
}
