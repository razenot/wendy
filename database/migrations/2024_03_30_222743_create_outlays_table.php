<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Название услуги или товара
     * Стоимость
     * Предоплата
     * Дата предолаты
     * Дата остатка оплаты
     * Примечание
     */
    public function up(): void
    {
        Schema::create('outlays', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->integer('prepayment')->default(0);
            $table->timestamp('prepayment_date')->nullable();
            $table->timestamp('all_payment_date')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outlays');
    }
};
