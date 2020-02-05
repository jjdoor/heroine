<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineMembers6 extends Migration
{
    public function up()
    {
        Schema::table('benjamin_heroine_members', function($table)
        {
            $table->string('monday', 191)->nullable()->change();
            $table->string('tuesday', 191)->nullable()->change();
            $table->string('wednesday', 191)->nullable()->change();
            $table->string('thursday', 191)->nullable()->change();
            $table->string('friday', 191)->nullable()->change();
            $table->string('saturday', 191)->nullable()->change();
            $table->string('sunday', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_heroine_members', function($table)
        {
            $table->string('monday', 191)->nullable(false)->change();
            $table->string('tuesday', 191)->nullable(false)->change();
            $table->string('wednesday', 191)->nullable(false)->change();
            $table->string('thursday', 191)->nullable(false)->change();
            $table->string('friday', 191)->nullable(false)->change();
            $table->string('saturday', 191)->nullable(false)->change();
            $table->string('sunday', 191)->nullable(false)->change();
        });
    }
}
