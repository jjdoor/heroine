<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineSystem2 extends Migration
{
    public function up()
    {
        Schema::table('benjamin_heroine_system', function($table)
        {
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_heroine_system', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
