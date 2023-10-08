<?php namespace Tests\Repositories;

use App\Models\s_10_user_databases;
use App\Repositories\s_10_user_databasesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class s_10_user_databasesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var s_10_user_databasesRepository
     */
    protected $s10UserDatabasesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->s10UserDatabasesRepo = \App::make(s_10_user_databasesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_s_10_user_databases()
    {
        $s10UserDatabases = s_10_user_databases::factory()->make()->toArray();

        $createds_10_user_databases = $this->s10UserDatabasesRepo->create($s10UserDatabases);

        $createds_10_user_databases = $createds_10_user_databases->toArray();
        $this->assertArrayHasKey('id', $createds_10_user_databases);
        $this->assertNotNull($createds_10_user_databases['id'], 'Created s_10_user_databases must have id specified');
        $this->assertNotNull(s_10_user_databases::find($createds_10_user_databases['id']), 's_10_user_databases with given id must be in DB');
        $this->assertModelData($s10UserDatabases, $createds_10_user_databases);
    }

    /**
     * @test read
     */
    public function test_read_s_10_user_databases()
    {
        $s10UserDatabases = s_10_user_databases::factory()->create();

        $dbs_10_user_databases = $this->s10UserDatabasesRepo->find($s10UserDatabases->id);

        $dbs_10_user_databases = $dbs_10_user_databases->toArray();
        $this->assertModelData($s10UserDatabases->toArray(), $dbs_10_user_databases);
    }

    /**
     * @test update
     */
    public function test_update_s_10_user_databases()
    {
        $s10UserDatabases = s_10_user_databases::factory()->create();
        $fakes_10_user_databases = s_10_user_databases::factory()->make()->toArray();

        $updateds_10_user_databases = $this->s10UserDatabasesRepo->update($fakes_10_user_databases, $s10UserDatabases->id);

        $this->assertModelData($fakes_10_user_databases, $updateds_10_user_databases->toArray());
        $dbs_10_user_databases = $this->s10UserDatabasesRepo->find($s10UserDatabases->id);
        $this->assertModelData($fakes_10_user_databases, $dbs_10_user_databases->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_s_10_user_databases()
    {
        $s10UserDatabases = s_10_user_databases::factory()->create();

        $resp = $this->s10UserDatabasesRepo->delete($s10UserDatabases->id);

        $this->assertTrue($resp);
        $this->assertNull(s_10_user_databases::find($s10UserDatabases->id), 's_10_user_databases should not exist in DB');
    }
}
