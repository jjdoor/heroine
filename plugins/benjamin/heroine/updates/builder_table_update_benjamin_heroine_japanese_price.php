<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineJapanesePrice extends Migration
{
    public function up()
    {
        Schema::table('benjamin_heroine_japanese_price', function($table)
        {
            $table->string('price', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('benjamin_heroine_japanese_price', function($table)
        {
            $table->integer('price')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
