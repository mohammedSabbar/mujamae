<?php

use App\Enums\AccessPassStatus;
use App\Enums\AccessPassType;
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
        Schema::create('access_passes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->string('code');
            $table->string('guest_name');
            $table->string('vehicle_info')->nullable();
            $table->tinyInteger('type')->default(AccessPassType::TEMPORARY->value);
            $table->tinyInteger('status')->default(AccessPassStatus::ACTIVE->value);
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('access_passes');
    }
};
