<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\s_10_user_databases;

class s_10_user_databasesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_s_10_user_databases()
    {
        $s10UserDatabases = s_10_user_databases::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/s_10_user_databases', $s10UserDatabases
        );

        $this->assertApiResponse($s10UserDatabases);
    }

    /**
     * @test
     */
    public function test_read_s_10_user_databases()
    {
        $s10UserDatabases = s_10_user_databases::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/s_10_user_databases/'.$s10UserDatabases->id
        );

        $this->assertApiResponse($s10UserDatabases->toArray());
    }

    /**
     * @test
     */
    public function test_update_s_10_user_databases()
    {
        $s10UserDatabases = s_10_user_databases::factory()->create();
        $editeds_10_user_databases = s_10_user_databases::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/s_10_user_databases/'.$s10UserDatabases->id,
            $editeds_10_user_databases
        );

        $this->assertApiResponse($editeds_10_user_databases);
    }

    /**
     * @test
     */
    public function test_delete_s_10_user_databases()
    {
        $s10UserDatabases = s_10_user_databases::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/s_10_user_databases/'.$s10UserDatabases->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/s_10_user_databases/'.$s10UserDatabases->id
        );

        $this->response->assertStatus(404);
    }
}
