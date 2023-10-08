<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_60_column_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('column_name')->nullable();
            $table->unsignedBigInteger('table_id')->index('idx_table_id');
            $table->unsignedBigInteger('table_type_id')->index('idx_table_type_id');
            $table->unsignedBigInteger('subType_id')->nullable()->index('idx_subType_id');
            $table->unsignedBigInteger('column_type_primary')->index('idx_column_type_primary');
            $table->boolean('list')->nullable();
            $table->boolean('null')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_60_column_types');
    }
};
