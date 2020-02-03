<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineMember extends Migration
{
    public function up()
    {
        Schema::table('benjamin_heroine_member', function($table)
        {
            $table->integer('top');
            $table->integer('bust');
            $table->integer('waist');
            $table->integer('hip');
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_heroine_member', function($table)
        {
            $table->dropColumn('top');
            $table->dropColumn('bust');
            $table->dropColumn('waist');
            $table->dropColumn('hip');
        });
    }
}
