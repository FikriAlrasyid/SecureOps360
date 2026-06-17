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
        Schema::create('compliances', function (Blueprint $table) {

    $table->id();

    $table->string('control_code');

    $table->string('control_name');

    $table->string('owner');

    $table->enum(
        'status',
        [
            'Compliant',
            'Partial',
            'Non-Compliant'
        ]
    );

    $table->date('review_date');

    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compliances');
    }
};
