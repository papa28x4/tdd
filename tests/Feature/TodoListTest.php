<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_todo_list(): void
    {
        //preparation
        // $this->withoutExceptionHandling();

        //action 
        $response = $this->getJson(route('todolist.index'));

        // dd($response->json());
        //assertion
        // $response->assertStatus(200);
        $this->assertEquals(1, count($response->json()));
    }
}
