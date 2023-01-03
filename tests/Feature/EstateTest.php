<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Estate;

class EstateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function itReturnsOnlyTheAvailableEstataes()
    {
      $estate =  Estate::factory()->create();

        $estate->dump();
    }
}
