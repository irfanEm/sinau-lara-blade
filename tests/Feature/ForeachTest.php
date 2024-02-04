<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForeachTest extends TestCase
{
    public function testForeachDir()
    {
        $this->view("foreach", [
            "hobi2" => [
                "Ngoding",
                "Ngorok",
                "Ngaji"
                ]
            ])
            ->assertSeeText("Ngoding")
            ->assertSeeText("Ngorok")
            ->assertSeeText("Ngaji");
    }

    public function testForelseDir()
    {
        $this->view("forelse", [
            "hobi2" => []
            ])
            ->assertDontSeeText("Ngoding")
            ->assertDontSeeText("Ngorok")
            ->assertDontSeeText("Ngaji")
            ->assertSeeText("Kamu belum memiliki hobi.");

        $this->view("forelse", [
            "hobi2" => [
                "Ngoding",
                "Ngorok",
                "Ngaji"
                ]
            ])
            ->assertSeeText("Ngoding")
            ->assertSeeText("Ngorok")
            ->assertSeeText("Ngaji")
            ->assertDontSeeText("Kamu belum memiliki hobi.");
    }
}
