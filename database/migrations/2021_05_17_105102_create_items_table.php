<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->decimal('price',8,2)->default('0.00');
            $table->boolean('is_owned')->default('1');;
            $table->string('condition')->default('new');
            $table->date('date_of_purchase')->nullable();
            $table->string('src_name')->nullable();
            $table->string('src_link')->nullable();
            $table->string('img_src')->default('img_src');
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
        Schema::dropIfExists('items');
    }
}
