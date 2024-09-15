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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade');
            $table->foreignId('district_id')->nullable()->constrained('districts')->onUpdate('cascade');
            $table->foreignId('zone_id')->nullable()->constrained('zones')->onUpdate('cascade');
            $table->foreignId('area_id')->nullable()->constrained('areas')->onUpdate('cascade');
            $table->string('title', 100)->nullable();
            $table->string('customer_name', 100)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('address_details', 100)->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
