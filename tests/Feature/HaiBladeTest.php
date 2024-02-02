<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HaiBladeTest extends TestCase
{
    public function testHaiBlade()
    {
        $this->get('/hai')
            ->assertSeeText('balqis FA');
    }

    public function testHaiKamu()
    {
        $this->get('/kamu')
            ->assertSeeText('kamu..');
    }

    public function testHaiBladeView()
    {
        $this->view('hai', [
            "title" => "halaman hai",
            "nama" => "balqis FA"
        ])
            ->assertSeeText('balqis FA');
    }

    public function testHaiKamuView()
    {
        $this->view('hai.kamu', [
            "title" => "halaman hai",
            "nama" => "kamu.."
        ])
            ->assertSeeText('kamu..');
    }

    public function testKomentView()
    {
        $this->view('comment', [
            "title" => "halaman hai"
        ])
            ->assertSeeText('Komentar')
            ->assertDontSeeText('kamu..');
    }

    public function testDisabledView()
    {
        $this->view('disabled', [
            "nama" => "Balqis FA"
        ])
            ->assertSeeText('hai {{ $nama }}')
            ->assertSeeText('{{ $nama }}')
            ->assertDontSeeText('balqis FA');
    }
}
