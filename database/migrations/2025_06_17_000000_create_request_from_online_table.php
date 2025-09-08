<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestFromOnlineTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('request_from_online', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('mobile');
        $table->string('email');
        $table->text('message')->nullable();
        $table->string('doc_path')->nullable();
        $table->ipAddress('ip')->nullable();
        $table->string('location')->nullable();
        $table->boolean('converted')->default(false);
        $table->string('token')->unique(); // ✅ Ensure token is here
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_from_online');
    }
}
