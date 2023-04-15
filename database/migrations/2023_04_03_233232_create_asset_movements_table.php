<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_movements', function (Blueprint $table) {
            $table->id();
            $table->string('assetCode')->nullable();
            $table->string('description')->nullable();
            $table->string('location1')->nullable();
            $table->string('location2')->nullable();
            $table->string('movementDate')->nullable();
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('authOfficer')->nullable();
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
        Schema::dropIfExists('asset_movements');
    }
}
