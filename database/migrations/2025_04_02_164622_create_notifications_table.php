<?php

use App\Enums\NotificationTargetType;
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
        Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sender_id'); // من أرسل الإشعار (أحد موظفي الإدارة)
            $table->string('title');
            $table->text('body');
            $table->tinyInteger('target_type')->default(NotificationTargetType::ALL->value);
            $table->json('target_ids')->nullable(); // لتحديد مجموعة معينة من المستخدمين
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
