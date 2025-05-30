<?php

use App\Enums\FineStatus;
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
        Schema::create('fines', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');       // الساكن المُخالف
            $table->uuid('security_id');   // موظف الأمن اللي أصدر المخالفة
            $table->decimal('amount', 10, 2);
            $table->string('reason');
            $table->string('image')->nullable(); // صورة المخالفة
            $table->tinyInteger('status')->default(FineStatus::PENDING->value); // enum
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fines');
    }
};
