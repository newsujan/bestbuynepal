<?php namespace Bestbuynepal\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBestbuynepalProducts extends Migration
{
    public function up()
    {
        Schema::create('bestbuynepal_products_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->integer('price')->nullable();
            $table->integer('mrp')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('bestbuy')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bestbuynepal_products_');
    }
}
