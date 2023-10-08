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
        Schema::table('s_10_user_databases', function (Blueprint $table) {
            $table->foreign(['user_id'], 's_10_user_databases_ibfk_1')->references(['id'])->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('s_10_user_databases', function (Blueprint $table) {
            $table->dropForeign('s_10_user_databases_ibfk_1');
        });
    }
};
