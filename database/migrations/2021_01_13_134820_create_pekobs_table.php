<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('img_url')->nullable();
            $table->timestamp('time')->useCurrent();
            $table->longText('img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pekobs');
    }
}
