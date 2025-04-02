<?php

use App\Enums\UnitStatus;
use App\Enums\UnitType;
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
        Schema::create('units', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('building_id');
            $table->string('number');
            $table->tinyInteger('type')->default(UnitType::APARTMENT->value);
            $table->tinyInteger('status')->default(UnitStatus::AVAILABLE->value);
            $table->integer('floor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
