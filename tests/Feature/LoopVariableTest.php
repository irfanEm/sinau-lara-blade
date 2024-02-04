<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariableTest extends TestCase
{
    public function testLoopVariable()
    {
        $this->view("loop-variable",["hobi2" => ["Ngoding", "Gaming"]])
            ->assertSeeText("1. Ngoding")
            ->assertSeeText("2. Gaming");
    }
}
