<?php namespace Benjamin\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminMovies2 extends Migration
{
    public function up()
    {
        Schema::table('benjamin_movies_', function($table)
        {
            $table->string('video');
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_movies_', function($table)
        {
            $table->dropColumn('video');
        });
    }
}
