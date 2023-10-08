<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\s_60_column_types;

class s_60_column_typesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_s_60_column_types()
    {
        $s60ColumnTypes = s_60_column_types::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/s_60_column_types', $s60ColumnTypes
        );

        $this->assertApiResponse($s60ColumnTypes);
    }

    /**
     * @test
     */
    public function test_read_s_60_column_types()
    {
        $s60ColumnTypes = s_60_column_types::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/s_60_column_types/'.$s60ColumnTypes->id
        );

        $this->assertApiResponse($s60ColumnTypes->toArray());
    }

    /**
     * @test
     */
    public function test_update_s_60_column_types()
    {
        $s60ColumnTypes = s_60_column_types::factory()->create();
        $editeds_60_column_types = s_60_column_types::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/s_60_column_types/'.$s60ColumnTypes->id,
            $editeds_60_column_types
        );

        $this->assertApiResponse($editeds_60_column_types);
    }

    /**
     * @test
     */
    public function test_delete_s_60_column_types()
    {
        $s60ColumnTypes = s_60_column_types::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/s_60_column_types/'.$s60ColumnTypes->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/s_60_column_types/'.$s60ColumnTypes->id
        );

        $this->response->assertStatus(404);
    }
}
