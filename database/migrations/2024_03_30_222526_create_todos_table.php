<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Название дела (найти фотографа, разослать пригласительные)
     * Дата планирования (когда обратится к этому делу) - либо точная дата, либо месяц
     * Статус выполнения
     * Критичность дела (за просрочку) - высчитать за счет даты
     * Комментарий
     */
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('scheduled_date');
            $table->boolean('status')->default(false);
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
