<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Logement;

class LogementTest extends TestCase
{
    use RefreshDatabase;
    public function test_index(): void
    {
        $response = $this->get('/api/logement');
        $response->assertStatus(200);
    }

    public function test_store():void
    {
        $data=[
        "type"=>"Duplex",
        "description"=>"très grand",
        "note"=>18.2,
    ];

        $response=$this->post("/api/logement/store", $data);
        $response->assertStatus(200);
        $response->assertJsonPath("success", true);
    }

    public function test_update():void
    {
        $logement=Logement::factory()->create();
        $data=[
            "type"=>"Duplex 3 niveau",
            "description"=>"très grand",
            "note"=>12,
        ];

        $response=$this->post("/api/logement/".$logement->code."/update", $data);
        $response->assertStatus(200);
        $response->assertJsonPath("success", true);
    }

    public function test_delete():void
    {
        $logement=Logement::factory()->create();
        $response=$this->get("/api/logement/".$logement->code."/delete");
        $response->assertStatus(200);

    }
}
