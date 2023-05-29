<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MataPelajaranTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $mataPelajaran_x = config("coba2.mataPelajaran.mataPelajaran_X.pelajaranPertama_x");
        $response = view("coba2");

        
    }
}
