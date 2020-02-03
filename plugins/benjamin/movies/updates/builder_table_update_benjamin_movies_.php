<?php namespace Benjamin\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminMovies extends Migration
{
    public function up()
    {
        Schema::table('benjamin_movies_', function($table)
        {
            $table->string('one');
            $table->string('two');
            $table->string('three');
            $table->string('four');
            $table->string('five');
            $table->string('six');
            $table->string('seven');
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_movies_', function($table)
        {
            $table->dropColumn('one');
            $table->dropColumn('two');
            $table->dropColumn('three');
            $table->dropColumn('four');
            $table->dropColumn('five');
            $table->dropColumn('six');
            $table->dropColumn('seven');
        });
    }
}
