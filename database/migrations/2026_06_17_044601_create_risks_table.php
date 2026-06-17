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
        Schema::create('risks', function (Blueprint $table) {

    $table->id();

    $table->string('risk_name');

    $table->text('description');

    $table->integer('likelihood');

    $table->integer('impact');

    $table->integer('score');

    $table->text('mitigation');

    $table->enum(
        'status',
        ['Open','Mitigated','Closed']
    );

    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('risks');
    }
};
