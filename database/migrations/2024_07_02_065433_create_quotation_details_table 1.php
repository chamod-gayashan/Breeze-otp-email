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
        Schema::create('quotation_details', function (Blueprint $table) {
            $table->id();
            $table->string('quote_id');
            $table->string('name');
            $table->string('member_id');
            $table->integer('Age');
            $table->double('z1plan1');
            $table->double('z1plan2');
            $table->double('z1plan3');
            $table->double('z1plan4');
            $table->double('z2plan1');
            $table->double('z2plan2');
            $table->double('z2plan3');
            $table->double('z2plan4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotation_details');
    }
};
