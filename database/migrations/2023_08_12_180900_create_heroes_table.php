<?php

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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('user_id')->unique();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
           
       

            $table->string('text1')->nullable();
            $table->string('text2')->nullable();
      
            $table->string('logo_d')->nullable();
            $table->string('logo_m')->nullable();

               
            $table->string('hotline')->nullable();

            $table->string('line1')->nullable();
            $table->string('line2')->nullable();
            $table->string('line3')->nullable();
            $table->string('img')->nullable();

            $table->string('line4')->nullable();
            $table->string('line5')->nullable();
            $table->string('line6')->nullable();
            $table->string('line7')->nullable();
            $table->string('image')->nullable();

            $table->string('line8')->nullable();
            $table->string('line9')->nullable();
            $table->string('line10')->nullable();
            $table->string('line11')->nullable();
            $table->string('line12')->nullable();
            $table->string('images')->nullable();

            $table->string('banner1')->nullable();
            $table->string('banner2')->nullable();
            $table->string('banner3')->nullable();


            $table->string('paymentimg')->nullable();
            $table->string('app_status')->nullable();

            $table->string('link1')->nullable();
            $table->string('link2')->nullable();
            $table->string('link3')->nullable();
            $table->string('link4')->nullable();
       

        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
