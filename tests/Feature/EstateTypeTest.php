<?php

namespace Tests\Feature;

use App\Models\EstateType;
use Tests\TestCase;

class EstateTypeTest extends TestCase
{

    public function test_returns_all_estate_types()
    {
        $response = $this->get('/estate/type');

        $response->assertOK();
    }

    public function test_store_validate_estate_type()
    {
        $response = $this->post('/estate/type', [
            'name' => '',
            'slug' => ''
        ]);
        $response->assertSessionHas('errors');
    }

    public function test_estate_type_name_is_unique(){
        $response = $this->post('/estate/type', [
            'name' => 'salah',
            'slug' => 'salah'
        ]);
        $response = $this->post('/estate/type', [
            'name' => 'salah',
            'slug' => 'salah'
        ]);

        $response->assertRedirectContains('/estate/type');
    }

    public function test_deletes_record()
    {
        $response = $this->delete('/estate/type/16');

        $response->assertStatus(302);
    }
}
