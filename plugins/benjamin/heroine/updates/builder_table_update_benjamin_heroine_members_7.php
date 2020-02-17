<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineMembers7 extends Migration
{
    public function up()
    {
        Schema::table('benjamin_heroine_members', function($table)
        {
            $table->string('video')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_heroine_members', function($table)
        {
            $table->dropColumn('video');
        });
    }
}
