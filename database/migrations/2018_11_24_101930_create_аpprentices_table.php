<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateаpprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('аpprentices', function(Blueprint $table) {
            $table->increments('id');                           // id  системе
            $table->string('personal_number')->unique();        // Персональный номер
            $table->string('name', 50)->unique();               // Имя
            $table->string('surname', 50)->unique();            // Фамилия
            $table->string('patronymic', 50)->unique();         // Отчество
            $table->string('birth_date')->unique();             // Дата рождения
            $table->string('receipt_date')->unique();           // Дата поступления (зачисления)
            $table->string('document')->unique();               // номер документа паспорт и т.д
            $table->string('parents_1')->unique();              // Родители: Мать или бабушка
            $table->string('parents_2')->unique();              // Родители: Отец или дедушка
            $table->string('achievements')->unique();           // Личные достижения учащегося
            $table->string('phone')->unique();                  // Телефон
            $table->string('events')->unique();                 // Мероприятия по годам
            $table->string('gender')->unique();                 // Пол: М\Ж
            $table->string('sociallin_1')->unique();            // Ссылка на социальные сети ребенка
            $table->string('sociallin_2')->unique();            // Ссылка на социальные сети ребенка
            $table->string('sociallin_3')->unique();            // Ссылка на социальные сети ребенка
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('valid')->default(false);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('аpprentices');
    }
}
