<?php

use App\Enums\TaskStatus;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id'); // الساكن مقدم الطلب
            $table->uuid('employee_id')->nullable(); // موظف الخدمات المنفذ
            $table->string('title');
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(TaskStatus::NEW->value); // ممكن نخليه enum class بعدين
            $table->tinyInteger('rating')->nullable(); // تقييم الساكن بعد الإنجاز
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
