<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineSystem3 extends Migration
{
    public function up()
    {
        Schema::table('benjamin_heroine_system', function($table)
        {
            $table->string('en_name');
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_heroine_system', function($table)
        {
            $table->dropColumn('en_name');
        });
    }
}
