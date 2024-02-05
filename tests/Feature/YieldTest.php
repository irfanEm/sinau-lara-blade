<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class YieldTest extends TestCase
{
    public function testYield()
    {
        $this->view("child", [])
            ->assertSeeText("footer")
            ->assertSeeText("Halaman Utama")
            ->assertSeeText("Header Utama")
            ->assertSeeText("Navbar Utama")
            ->assertSeeText("Ini adalah konten Utama kita");
    }

    public function testYieldDefault()
    {
        $this->view("child-default", [])
            ->assertSeeText("footer")
            ->assertSeeText("Halaman Utama")
            ->assertDontSeeText("Header Utama")
            ->assertDontSeeText("Navbar Utama")
            ->assertSeeText("Navbar Default")
            ->assertSeeText("Ini adalah konten default jika konten child tidak di deklarasikan.")
            ->assertDontSeeText("Ini adalah konten Utama kita");
    }
}
