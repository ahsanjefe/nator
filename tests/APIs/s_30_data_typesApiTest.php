<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\s_30_data_types;

class s_30_data_typesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_s_30_data_types()
    {
        $s30DataTypes = s_30_data_types::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/s_30_data_types', $s30DataTypes
        );

        $this->assertApiResponse($s30DataTypes);
    }

    /**
     * @test
     */
    public function test_read_s_30_data_types()
    {
        $s30DataTypes = s_30_data_types::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/s_30_data_types/'.$s30DataTypes->id
        );

        $this->assertApiResponse($s30DataTypes->toArray());
    }

    /**
     * @test
     */
    public function test_update_s_30_data_types()
    {
        $s30DataTypes = s_30_data_types::factory()->create();
        $editeds_30_data_types = s_30_data_types::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/s_30_data_types/'.$s30DataTypes->id,
            $editeds_30_data_types
        );

        $this->assertApiResponse($editeds_30_data_types);
    }

    /**
     * @test
     */
    public function test_delete_s_30_data_types()
    {
        $s30DataTypes = s_30_data_types::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/s_30_data_types/'.$s30DataTypes->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/s_30_data_types/'.$s30DataTypes->id
        );

        $this->response->assertStatus(404);
    }
}
