<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{
    public function testSwitch()
    {
        $this->view("switch", ["nilai" => "A"])
            ->assertSeeText("Memuaskan");

        $this->view("switch", ["nilai" => "B"])
            ->assertSeeText("Bagus");

        $this->view("switch", ["nilai" => "C"])
            ->assertSeeText("Cukup");

        $this->view("switch", ["nilai" => "E"])
            ->assertSeeText("Belum lulus, silahkan coba lagi.");
    }
}
