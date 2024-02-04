<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view("include", [])
            ->assertSeeText("Progamer Anyaran")
            ->assertSeeText("Selamat datang di Web Irfan_em")
            ->assertSeeText("Selamat datang di web Progamer Anyaran.");

        $this->view("include", ["title" => "Irfan_Em"])
            ->assertSeeText("Irfan_Em")
            ->assertSeeText("Selamat datang di Web Irfan_em")
            ->assertSeeText("Selamat datang di web Progamer Anyaran.");
    }
}
