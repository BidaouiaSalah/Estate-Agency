<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TransactionTypeTest extends TestCase
{
    public function test_transaction_types_index_page_can_be_renderd(){

        $response = $this->get('admin/en/transaction-types');

        $response->assertStatus(200);
    }

}
