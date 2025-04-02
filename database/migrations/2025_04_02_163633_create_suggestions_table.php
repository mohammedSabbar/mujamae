<?php

use App\Enums\SuggestionStatus;
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
        Schema::create('suggestions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id'); // الساكن المرسل
            $table->enum('type', ['suggestion', 'complaint'])->default('complaint'); // أو enum class
            $table->text('message');
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(SuggestionStatus::NEW->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suggestions');
    }
};
