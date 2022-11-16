<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_api_returns_all_pokemons()
    {
        $response = $this->getJson('api/v1/pokemons');

        $response->assertJson(function (AssertableJson $json){
            $json->count('data',151)
                ->etc();
        });
    }

    public function test_create_team_name()
    {
        $response = $this->postJson('api/v1/teams',["name"=>"test team"]);

        $this->assertDatabaseHas('teams',['name' => 'test team']);

    }
}
