<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\s_50_subtypes;

class s_50_subtypesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_s_50_subtypes()
    {
        $s50Subtypes = s_50_subtypes::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/s_50_subtypes', $s50Subtypes
        );

        $this->assertApiResponse($s50Subtypes);
    }

    /**
     * @test
     */
    public function test_read_s_50_subtypes()
    {
        $s50Subtypes = s_50_subtypes::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/s_50_subtypes/'.$s50Subtypes->id
        );

        $this->assertApiResponse($s50Subtypes->toArray());
    }

    /**
     * @test
     */
    public function test_update_s_50_subtypes()
    {
        $s50Subtypes = s_50_subtypes::factory()->create();
        $editeds_50_subtypes = s_50_subtypes::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/s_50_subtypes/'.$s50Subtypes->id,
            $editeds_50_subtypes
        );

        $this->assertApiResponse($editeds_50_subtypes);
    }

    /**
     * @test
     */
    public function test_delete_s_50_subtypes()
    {
        $s50Subtypes = s_50_subtypes::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/s_50_subtypes/'.$s50Subtypes->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/s_50_subtypes/'.$s50Subtypes->id
        );

        $this->response->assertStatus(404);
    }
}
