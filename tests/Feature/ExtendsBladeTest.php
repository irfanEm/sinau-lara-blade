<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExtendsBladeTest extends TestCase
{
    public function testExtendsBlade()
    {
        $this->view("extends", ["nama" => "Balqis FA"])
            ->assertSeeText("Hai Balqis FA");
    }
}
