<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gins', function (Blueprint $table) {
            $table->foreignId('distillery_id')->constrained('distilleries')->onDelete('cascade')->onUpdate('cascade');
            $table->index('name');
            $table->index('distillery_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gins', function (Blueprint $table) {
            //
        });
    }
}
