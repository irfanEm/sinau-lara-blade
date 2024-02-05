<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    public function testErrorDir()
    {
        $errors = [
            "nama" => "Nama wajib diisi !",
            "password" => "Password wajib diisi !"
        ];

        $this->withViewErrors($errors)
            ->view("error", [])
            ->assertSee("Nama wajib diisi !")
            ->assertSee("Password wajib diisi !");
    }
}
