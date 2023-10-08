<?php namespace Tests\Repositories;

use App\Models\s_30_data_types;
use App\Repositories\s_30_data_typesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class s_30_data_typesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var s_30_data_typesRepository
     */
    protected $s30DataTypesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->s30DataTypesRepo = \App::make(s_30_data_typesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_s_30_data_types()
    {
        $s30DataTypes = s_30_data_types::factory()->make()->toArray();

        $createds_30_data_types = $this->s30DataTypesRepo->create($s30DataTypes);

        $createds_30_data_types = $createds_30_data_types->toArray();
        $this->assertArrayHasKey('id', $createds_30_data_types);
        $this->assertNotNull($createds_30_data_types['id'], 'Created s_30_data_types must have id specified');
        $this->assertNotNull(s_30_data_types::find($createds_30_data_types['id']), 's_30_data_types with given id must be in DB');
        $this->assertModelData($s30DataTypes, $createds_30_data_types);
    }

    /**
     * @test read
     */
    public function test_read_s_30_data_types()
    {
        $s30DataTypes = s_30_data_types::factory()->create();

        $dbs_30_data_types = $this->s30DataTypesRepo->find($s30DataTypes->id);

        $dbs_30_data_types = $dbs_30_data_types->toArray();
        $this->assertModelData($s30DataTypes->toArray(), $dbs_30_data_types);
    }

    /**
     * @test update
     */
    public function test_update_s_30_data_types()
    {
        $s30DataTypes = s_30_data_types::factory()->create();
        $fakes_30_data_types = s_30_data_types::factory()->make()->toArray();

        $updateds_30_data_types = $this->s30DataTypesRepo->update($fakes_30_data_types, $s30DataTypes->id);

        $this->assertModelData($fakes_30_data_types, $updateds_30_data_types->toArray());
        $dbs_30_data_types = $this->s30DataTypesRepo->find($s30DataTypes->id);
        $this->assertModelData($fakes_30_data_types, $dbs_30_data_types->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_s_30_data_types()
    {
        $s30DataTypes = s_30_data_types::factory()->create();

        $resp = $this->s30DataTypesRepo->delete($s30DataTypes->id);

        $this->assertTrue($resp);
        $this->assertNull(s_30_data_types::find($s30DataTypes->id), 's_30_data_types should not exist in DB');
    }
}
