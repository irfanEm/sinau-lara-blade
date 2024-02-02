<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view('isset-empty',[])
            ->assertDontSeeText("Hai, nama saya")
            ->assertSeeText("Saya belum memiliki hobi apapun.");

        $this->view("isset-empty",["nama" => "Shilvia Qurrota Ayun"])
            ->assertSeeText("Hai, nama saya Shilvia Qurrota Ayun.", false)
            ->assertSeeText("Saya belum memiliki hobi apapun.");

            $this->view("isset-empty",[
                "nama" => "Shilvia Qurrota Ayun",
                "hobi2" => "Mengoding"
            ])
                ->assertSeeText("Hai, nama saya Shilvia Qurrota Ayun.", false)
                ->assertDontSeeText("Saya belum memiliki hobi apapun.");
    }
}
