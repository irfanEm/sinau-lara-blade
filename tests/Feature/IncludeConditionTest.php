<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view("include-cond", [
            "user" => [
                "nama" => "Balqis FA",
                "admin" => true
            ]
        ])
            ->assertSeeText("Selamat datang Owner")
            ->assertSeeText("Untuk melihat menu laporan penjualan, klik menu laporan.")
            ->assertSeeText("Selamat datang Balqis FA, diwebsite kami.");

        $this->view("include-cond", [
                "user" => [
                    "nama" => "Balqis FA",
                    "admin" => false
                ]
            ])
                ->assertDontSeeText("Selamat datang Owner")
                ->assertDontSeeText("Untuk melihat menu laporan penjualan, klik menu laporan.")
                ->assertSeeText("Selamat datang Balqis FA, diwebsite kami.");
    }
}
