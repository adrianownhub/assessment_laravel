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
        Schema::create('files_tbl', function (Blueprint $table) {
            $table->integer('id')->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->string('filename')->nullable(false);
            $table->string('filepath')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files_tbl');
    }
};
