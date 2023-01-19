<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertIsString;

class LocalisationTest extends TestCase
{
    public function test_language_param_is_changing()
    {
        app()->setLocale('fr');

        $response =  app()->getLocale();

        assertIsString($response, 'fr');
    }
}
