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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('edad')->unsigned();
            $table->boolean('is_active')->default(true);
            $table->decimal('amount', 8, 2);
            $table->dateTime('create_at');  
            $table->enum('status', ['pending', 'completed', 'cancelled']);
            $table->json('metadata'); 
            $table->string('name', 100)->default('Gerardino'); 
            $table->string('email')->unique();
            $table->text('description');
            $table->mediumText('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
