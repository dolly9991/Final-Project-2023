<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('assetNo')->nullable();
            $table->string('type')->nullable();
            $table->string('description')->nullable();
            $table->string('model')->nullable();
            $table->string('serialNo')->nullable();
            $table->string('warranty')->nullable();
            $table->integer('purchaseCost')->nullable();
            $table->string('purchaseDate')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('assets');
    }
}
