<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\s_20_user_tables;

class s_20_user_tablesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_s_20_user_tables()
    {
        $s20UserTables = s_20_user_tables::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/s_20_user_tables', $s20UserTables
        );

        $this->assertApiResponse($s20UserTables);
    }

    /**
     * @test
     */
    public function test_read_s_20_user_tables()
    {
        $s20UserTables = s_20_user_tables::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/s_20_user_tables/'.$s20UserTables->id
        );

        $this->assertApiResponse($s20UserTables->toArray());
    }

    /**
     * @test
     */
    public function test_update_s_20_user_tables()
    {
        $s20UserTables = s_20_user_tables::factory()->create();
        $editeds_20_user_tables = s_20_user_tables::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/s_20_user_tables/'.$s20UserTables->id,
            $editeds_20_user_tables
        );

        $this->assertApiResponse($editeds_20_user_tables);
    }

    /**
     * @test
     */
    public function test_delete_s_20_user_tables()
    {
        $s20UserTables = s_20_user_tables::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/s_20_user_tables/'.$s20UserTables->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/s_20_user_tables/'.$s20UserTables->id
        );

        $this->response->assertStatus(404);
    }
}
