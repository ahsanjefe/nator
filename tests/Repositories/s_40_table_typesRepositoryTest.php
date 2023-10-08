<?php namespace Tests\Repositories;

use App\Models\s_40_table_types;
use App\Repositories\s_40_table_typesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class s_40_table_typesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var s_40_table_typesRepository
     */
    protected $s40TableTypesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->s40TableTypesRepo = \App::make(s_40_table_typesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_s_40_table_types()
    {
        $s40TableTypes = s_40_table_types::factory()->make()->toArray();

        $createds_40_table_types = $this->s40TableTypesRepo->create($s40TableTypes);

        $createds_40_table_types = $createds_40_table_types->toArray();
        $this->assertArrayHasKey('id', $createds_40_table_types);
        $this->assertNotNull($createds_40_table_types['id'], 'Created s_40_table_types must have id specified');
        $this->assertNotNull(s_40_table_types::find($createds_40_table_types['id']), 's_40_table_types with given id must be in DB');
        $this->assertModelData($s40TableTypes, $createds_40_table_types);
    }

    /**
     * @test read
     */
    public function test_read_s_40_table_types()
    {
        $s40TableTypes = s_40_table_types::factory()->create();

        $dbs_40_table_types = $this->s40TableTypesRepo->find($s40TableTypes->id);

        $dbs_40_table_types = $dbs_40_table_types->toArray();
        $this->assertModelData($s40TableTypes->toArray(), $dbs_40_table_types);
    }

    /**
     * @test update
     */
    public function test_update_s_40_table_types()
    {
        $s40TableTypes = s_40_table_types::factory()->create();
        $fakes_40_table_types = s_40_table_types::factory()->make()->toArray();

        $updateds_40_table_types = $this->s40TableTypesRepo->update($fakes_40_table_types, $s40TableTypes->id);

        $this->assertModelData($fakes_40_table_types, $updateds_40_table_types->toArray());
        $dbs_40_table_types = $this->s40TableTypesRepo->find($s40TableTypes->id);
        $this->assertModelData($fakes_40_table_types, $dbs_40_table_types->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_s_40_table_types()
    {
        $s40TableTypes = s_40_table_types::factory()->create();

        $resp = $this->s40TableTypesRepo->delete($s40TableTypes->id);

        $this->assertTrue($resp);
        $this->assertNull(s_40_table_types::find($s40TableTypes->id), 's_40_table_types should not exist in DB');
    }
}
