<?php namespace Tests\Repositories;

use App\Models\s_50_subtypes;
use App\Repositories\s_50_subtypesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class s_50_subtypesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var s_50_subtypesRepository
     */
    protected $s50SubtypesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->s50SubtypesRepo = \App::make(s_50_subtypesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_s_50_subtypes()
    {
        $s50Subtypes = s_50_subtypes::factory()->make()->toArray();

        $createds_50_subtypes = $this->s50SubtypesRepo->create($s50Subtypes);

        $createds_50_subtypes = $createds_50_subtypes->toArray();
        $this->assertArrayHasKey('id', $createds_50_subtypes);
        $this->assertNotNull($createds_50_subtypes['id'], 'Created s_50_subtypes must have id specified');
        $this->assertNotNull(s_50_subtypes::find($createds_50_subtypes['id']), 's_50_subtypes with given id must be in DB');
        $this->assertModelData($s50Subtypes, $createds_50_subtypes);
    }

    /**
     * @test read
     */
    public function test_read_s_50_subtypes()
    {
        $s50Subtypes = s_50_subtypes::factory()->create();

        $dbs_50_subtypes = $this->s50SubtypesRepo->find($s50Subtypes->id);

        $dbs_50_subtypes = $dbs_50_subtypes->toArray();
        $this->assertModelData($s50Subtypes->toArray(), $dbs_50_subtypes);
    }

    /**
     * @test update
     */
    public function test_update_s_50_subtypes()
    {
        $s50Subtypes = s_50_subtypes::factory()->create();
        $fakes_50_subtypes = s_50_subtypes::factory()->make()->toArray();

        $updateds_50_subtypes = $this->s50SubtypesRepo->update($fakes_50_subtypes, $s50Subtypes->id);

        $this->assertModelData($fakes_50_subtypes, $updateds_50_subtypes->toArray());
        $dbs_50_subtypes = $this->s50SubtypesRepo->find($s50Subtypes->id);
        $this->assertModelData($fakes_50_subtypes, $dbs_50_subtypes->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_s_50_subtypes()
    {
        $s50Subtypes = s_50_subtypes::factory()->create();

        $resp = $this->s50SubtypesRepo->delete($s50Subtypes->id);

        $this->assertTrue($resp);
        $this->assertNull(s_50_subtypes::find($s50Subtypes->id), 's_50_subtypes should not exist in DB');
    }
}
