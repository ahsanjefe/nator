<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\s_40_table_types;

class s_40_table_typesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_s_40_table_types()
    {
        $s40TableTypes = s_40_table_types::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/s_40_table_types', $s40TableTypes
        );

        $this->assertApiResponse($s40TableTypes);
    }

    /**
     * @test
     */
    public function test_read_s_40_table_types()
    {
        $s40TableTypes = s_40_table_types::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/s_40_table_types/'.$s40TableTypes->id
        );

        $this->assertApiResponse($s40TableTypes->toArray());
    }

    /**
     * @test
     */
    public function test_update_s_40_table_types()
    {
        $s40TableTypes = s_40_table_types::factory()->create();
        $editeds_40_table_types = s_40_table_types::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/s_40_table_types/'.$s40TableTypes->id,
            $editeds_40_table_types
        );

        $this->assertApiResponse($editeds_40_table_types);
    }

    /**
     * @test
     */
    public function test_delete_s_40_table_types()
    {
        $s40TableTypes = s_40_table_types::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/s_40_table_types/'.$s40TableTypes->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/s_40_table_types/'.$s40TableTypes->id
        );

        $this->response->assertStatus(404);
    }
}
