<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBenjaminHeroineMember extends Migration
{
    public function up()
    {
        Schema::create('benjamin_heroine_member', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('is_new');
            $table->integer('age');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('benjamin_heroine_member');
    }
}
