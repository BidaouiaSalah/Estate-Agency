<?php

namespace Tests\Feature;

use App\Models\EstateType;
use Tests\TestCase;

class EstateTypeTest extends TestCase
{
    /**
     * @void
     */
    public function itReturnsAllEstateTypes()
    {
        $response = $this->get('/estate/type');
        $response->assertStatus(200);
    }

    /**
     *@void
     */
    public function itStoresEstateType()
    {
        $response = $this->post('/estate/type', [
            'name' => 'mqn',
            'slug' => 'sahdjhjd'
        ]);
        $response->assertStatus(302);
    }

    /**
     * @void
     */
    public function itUpdatesEstateType()
    {
        $response = $this->put('/estate/type/3', [
            'name' => 'salah',
            'slug' => 'salah'
        ]);
        $response->assertStatus(302);
    }

    /**
     * @void
     */

    public function itDeletesRecord()
    {
        $response = $this->delete('/estate/type/16');

        $response->assertStatus(302);
    }
}
