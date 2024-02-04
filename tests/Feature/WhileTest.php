<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function testWhile()
    {
        $this->view("while", ["i" => 1])
            ->assertSeeText("Nilai i = 1")
            ->assertSeeText("Nilai i = 2")
            ->assertSeeText("Nilai i = 3")
            ->assertSeeText("Nilai i = 4")
            ->assertSeeText("Nilai i = 5")
            ->assertSeeText("Nilai i = 6")
            ->assertSeeText("Nilai i = 7")
            ->assertSeeText("Nilai i = 8")
            ->assertSeeText("Nilai i = 9")
            ->assertSeeText("Nilai i = 10");
    }
}
