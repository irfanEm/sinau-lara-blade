<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", [
            "user" => [
                "premium" => true,
                "nama" => "Balqis FA",
                "admin" => true,
            ]
        ])
            ->assertSee("checked")
            ->assertSee("Balqis FA")
            ->assertDontSee("readonly");

        $this->view("form", [
            "user" => [
                "premium" => false,
                "nama" => "Shilvia QA",
                "admin" => false
            ]
        ])
            ->assertDontSee("checked")
            ->assertSee("Shilvia QA")
            ->assertSee("readonly");
    }
}
