<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('author');
        $table->text('description');
        $table->decimal('price', 10, 2);
        $table->integer('quantity');
        $table->string('img')->nullable(); // Thêm cột img và cho phép null

        $table->unsignedBigInteger('category_id');
        $table->foreign('category_id')->references('id')->on('categories');

        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('books');
    }
};
