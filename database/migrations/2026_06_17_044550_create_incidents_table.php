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
        Schema::create('incidents', function (Blueprint $table) {

    $table->id();

    $table->foreignId('asset_id')
        ->nullable()
        ->constrained()
        ->nullOnDelete();

    $table->string('ticket_number')->unique();

    $table->string('title');

    $table->text('description');

    $table->enum(
        'priority',
        ['Low','Medium','High','Critical']
    );

    $table->enum(
        'status',
        ['Open','In Progress','Resolved','Closed']
    );

    $table->string('reported_by');

    $table->date('incident_date');

    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
