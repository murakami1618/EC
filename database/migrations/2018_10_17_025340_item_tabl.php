<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemTabl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //商品名
            $table->string('img'); // 商品画像
            $table->string('description'); // 商品の説明文
            $table->string('bitter');//苦味
            $table->string('koku');//コク
            $table->string('san');//酸味
            $table->string('kaori');//香り
            $table->string('make');
            $table->unsignedInteger('price');//　商品の価格
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
