<?php namespace Benjamin\Heroine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBenjaminHeroineMembers extends Migration
{
    public function up()
    {
        Schema::rename('benjamin_heroine_member', 'benjamin_heroine_members');
    }
    
    public function down()
    {
        Schema::rename('benjamin_heroine_members', 'benjamin_heroine_member');
    }
}
