<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBenjaminHeroineSystem extends Migration
{
    public function up()
    {
        Schema::create('benjamin_heroine_system', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('notice');
            $table->text('desc');
            $table->string('open_hour');
            $table->string('tel');
            $table->string('address');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('benjamin_heroine_system');
    }
}
