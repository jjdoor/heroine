<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineServicePrice extends Migration
{
    public function up()
    {
        Schema::table('benjamin_heroine_service_price', function($table)
        {
            $table->integer('rank')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_heroine_service_price', function($table)
        {
            $table->dropColumn('rank');
        });
    }
}
