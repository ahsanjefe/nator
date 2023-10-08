<?php namespace Tests\Repositories;

use App\Models\s_20_user_tables;
use App\Repositories\s_20_user_tablesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class s_20_user_tablesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var s_20_user_tablesRepository
     */
    protected $s20UserTablesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->s20UserTablesRepo = \App::make(s_20_user_tablesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_s_20_user_tables()
    {
        $s20UserTables = s_20_user_tables::factory()->make()->toArray();

        $createds_20_user_tables = $this->s20UserTablesRepo->create($s20UserTables);

        $createds_20_user_tables = $createds_20_user_tables->toArray();
        $this->assertArrayHasKey('id', $createds_20_user_tables);
        $this->assertNotNull($createds_20_user_tables['id'], 'Created s_20_user_tables must have id specified');
        $this->assertNotNull(s_20_user_tables::find($createds_20_user_tables['id']), 's_20_user_tables with given id must be in DB');
        $this->assertModelData($s20UserTables, $createds_20_user_tables);
    }

    /**
     * @test read
     */
    public function test_read_s_20_user_tables()
    {
        $s20UserTables = s_20_user_tables::factory()->create();

        $dbs_20_user_tables = $this->s20UserTablesRepo->find($s20UserTables->id);

        $dbs_20_user_tables = $dbs_20_user_tables->toArray();
        $this->assertModelData($s20UserTables->toArray(), $dbs_20_user_tables);
    }

    /**
     * @test update
     */
    public function test_update_s_20_user_tables()
    {
        $s20UserTables = s_20_user_tables::factory()->create();
        $fakes_20_user_tables = s_20_user_tables::factory()->make()->toArray();

        $updateds_20_user_tables = $this->s20UserTablesRepo->update($fakes_20_user_tables, $s20UserTables->id);

        $this->assertModelData($fakes_20_user_tables, $updateds_20_user_tables->toArray());
        $dbs_20_user_tables = $this->s20UserTablesRepo->find($s20UserTables->id);
        $this->assertModelData($fakes_20_user_tables, $dbs_20_user_tables->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_s_20_user_tables()
    {
        $s20UserTables = s_20_user_tables::factory()->create();

        $resp = $this->s20UserTablesRepo->delete($s20UserTables->id);

        $this->assertTrue($resp);
        $this->assertNull(s_20_user_tables::find($s20UserTables->id), 's_20_user_tables should not exist in DB');
    }
}
