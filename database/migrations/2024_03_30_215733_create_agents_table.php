<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Тип посредника - (фотограф, видеограф, свет, dj)
     * Название или имя
     * Номер телефона
     * Сайт
     * Почта
     * Соц.сети (вк, инста) - ссылки для открытия приложения
     * Адрес
     * Предоплата
     * Цена
     * Комментарий (набор услуг подрядчика)
     * Дата встречи
     * Статус брони
     */
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('site')->nullable();
            $table->string('mail')->nullable();
            $table->string('vk')->nullable();
            $table->string('insta')->nullable();
            $table->integer('price')->nullable();
            $table->integer('prepayment')->nullable();
            $table->text('comments')->nullable();
            $table->timestamp('date_visit')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
