<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('idpurchases');
            $table->string('name');
            $table->string('provider');
            $table->string('date');
            $table->string('quantity');
            $table->string('total');
            $table->string('purchasenum');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
