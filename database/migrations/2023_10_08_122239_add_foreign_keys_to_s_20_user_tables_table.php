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
        Schema::table('s_20_user_tables', function (Blueprint $table) {
            $table->foreign(['database_id'], 's_20_user_tables_ibfk_1')->references(['id'])->on('s_10_user_databases')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('s_20_user_tables', function (Blueprint $table) {
            $table->dropForeign('s_20_user_tables_ibfk_1');
        });
    }
};
