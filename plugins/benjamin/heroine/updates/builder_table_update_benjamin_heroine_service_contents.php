<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineServiceContents extends Migration
{
    public function up()
    {
        Schema::rename('benjamin_heroine_service_content', 'benjamin_heroine_service_contents');
    }
    
    public function down()
    {
        Schema::rename('benjamin_heroine_service_contents', 'benjamin_heroine_service_content');
    }
}
