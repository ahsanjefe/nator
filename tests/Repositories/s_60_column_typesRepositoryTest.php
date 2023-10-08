<?php namespace Tests\Repositories;

use App\Models\s_60_column_types;
use App\Repositories\s_60_column_typesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class s_60_column_typesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var s_60_column_typesRepository
     */
    protected $s60ColumnTypesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->s60ColumnTypesRepo = \App::make(s_60_column_typesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_s_60_column_types()
    {
        $s60ColumnTypes = s_60_column_types::factory()->make()->toArray();

        $createds_60_column_types = $this->s60ColumnTypesRepo->create($s60ColumnTypes);

        $createds_60_column_types = $createds_60_column_types->toArray();
        $this->assertArrayHasKey('id', $createds_60_column_types);
        $this->assertNotNull($createds_60_column_types['id'], 'Created s_60_column_types must have id specified');
        $this->assertNotNull(s_60_column_types::find($createds_60_column_types['id']), 's_60_column_types with given id must be in DB');
        $this->assertModelData($s60ColumnTypes, $createds_60_column_types);
    }

    /**
     * @test read
     */
    public function test_read_s_60_column_types()
    {
        $s60ColumnTypes = s_60_column_types::factory()->create();

        $dbs_60_column_types = $this->s60ColumnTypesRepo->find($s60ColumnTypes->id);

        $dbs_60_column_types = $dbs_60_column_types->toArray();
        $this->assertModelData($s60ColumnTypes->toArray(), $dbs_60_column_types);
    }

    /**
     * @test update
     */
    public function test_update_s_60_column_types()
    {
        $s60ColumnTypes = s_60_column_types::factory()->create();
        $fakes_60_column_types = s_60_column_types::factory()->make()->toArray();

        $updateds_60_column_types = $this->s60ColumnTypesRepo->update($fakes_60_column_types, $s60ColumnTypes->id);

        $this->assertModelData($fakes_60_column_types, $updateds_60_column_types->toArray());
        $dbs_60_column_types = $this->s60ColumnTypesRepo->find($s60ColumnTypes->id);
        $this->assertModelData($fakes_60_column_types, $dbs_60_column_types->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_s_60_column_types()
    {
        $s60ColumnTypes = s_60_column_types::factory()->create();

        $resp = $this->s60ColumnTypesRepo->delete($s60ColumnTypes->id);

        $this->assertTrue($resp);
        $this->assertNull(s_60_column_types::find($s60ColumnTypes->id), 's_60_column_types should not exist in DB');
    }
}
