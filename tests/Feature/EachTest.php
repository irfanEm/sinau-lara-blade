<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["user2" => [
            [
                "nama" => "Balqis FA",
                "hobi2" => [
                    "Gaming",
                    "Coding"
                ]
            ],
            [
                "nama" => "Shilvia QA",
                "hobi2" => [
                    "Coding",
                    "Gaming"
                ]
            ]
        ]])
            ->assertSeeInOrder([".red", "Balqis FA", "Gaming", "Coding", "Shilvia QA", "Coding", "Gaming"]);
    }
}
