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
        Schema::table('s_60_column_types', function (Blueprint $table) {
            $table->foreign(['table_id'], 's_60_column_types_ibfk_1')->references(['id'])->on('s_20_user_tables')->onDelete('CASCADE');
            $table->foreign(['subType_id'], 's_60_column_types_ibfk_2')->references(['id'])->on('s_50_subtypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('s_60_column_types', function (Blueprint $table) {
            $table->dropForeign('s_60_column_types_ibfk_1');
            $table->dropForeign('s_60_column_types_ibfk_2');
        });
    }
};
