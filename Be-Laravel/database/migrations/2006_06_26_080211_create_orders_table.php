<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('madth');
            $table->unsignedBigInteger('iduser')->nullable();
            $table->string('nguoidat_ten');
            $table->string('nguoidat_email');
            $table->string('nguoidat_tl');
            $table->string('nguoidat_diachi');
            $table->string('nguoinhan_ten');
            $table->string('nguoinhan_diachi');
            $table->string('nguoinhan_tel');
            $table->integer('total');
            $table->integer('ship');
            $table->string('voucher')->nullable(); 
            $table->integer('tongthanhtoan');
            $table->tinyInteger('pttt');
            $table->foreign('iduser')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
