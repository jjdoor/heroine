<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineSystem extends Migration
{
    public function up()
    {
        Schema::table('benjamin_heroine_system', function($table)
        {
            $table->text('notice')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dropColumn('desc');
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_heroine_system', function($table)
        {
            $table->string('notice', 191)->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('desc');
        });
    }
}
