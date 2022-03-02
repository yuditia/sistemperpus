<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbooks', function (Blueprint $table) {
            $table->id();
            $table->date('tpinjam');
            $table->date('tkembali');
            $table->foreignId('user_id');
            $table->foreignId('staff_id');
            $table->foreignId('dpinjam_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbooks');
    }
}
