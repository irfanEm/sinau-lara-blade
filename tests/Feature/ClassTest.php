<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassTest extends TestCase
{
    public function testClass()
    {
        $this->view("class",[
            "hobi2" => [
                [
                    "nama" => "Ngoding",
                    "love" => true
                ],
                [
                    "nama" => "Ngegame",
                    "love" => false
                ]
            ]
        ])
            ->assertSee('<li class="red bold">Ngoding</li>', false)
            ->assertSee('<li class="red">Ngegame</li>', false);
    }
}
