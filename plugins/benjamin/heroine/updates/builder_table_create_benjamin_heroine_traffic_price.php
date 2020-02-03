<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBenjaminHeroineTrafficPrice extends Migration
{
    public function up()
    {
        Schema::create('benjamin_heroine_traffic_price', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('benjamin_heroine_traffic_price');
    }
}
