<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineSystem4 extends Migration
{
    public function up()
    {
        Schema::table('benjamin_heroine_system', function($table)
        {
            $table->string('travel_start_poine')->nullable();
            $table->string('travel_scope')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_heroine_system', function($table)
        {
            $table->dropColumn('travel_start_poine');
            $table->dropColumn('travel_scope');
        });
    }
}
