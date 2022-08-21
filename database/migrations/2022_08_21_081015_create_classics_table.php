<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classics', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->decimal('long','5','2')->nullable();
            $table->decimal('long-after','5','2')->nullable();
            $table->decimal('weight','5','2')->nullable();
            $table->decimal('gears','5','2');
            $table->string('color');
            $table->date('create')->nullable();
            $table->date('boya')->nullable();
            $table->date('back')->nullable();
            $table->date('sold')->nullable();
            $table->integer('route')->unique();
            $table->integer('order');
            $table->integer('num-order');
            $table->boolean('status');
            $table->foreignId('laborer_id')->references('id')->on('laborers')->onDelete('cascade')->nullable();
            $table->foreignId('machine_id')->references('id')->on('machines')->onDelete('cascade')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('design_id')->references('id')->on('designs')->onDelete('cascade');
            $table->foreignId('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classics');
    }
}
