<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineMembers8 extends Migration
{
    public function up()
    {
        Schema::table('benjamin_heroine_members', function($table)
        {
            $table->integer('rank')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_heroine_members', function($table)
        {
            $table->dropColumn('rank');
        });
    }
}
