<?php namespace Katana\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKatanaTeam3 extends Migration
{
    public function up()
    {
        Schema::table('katana_team_', function($table)
        {
            $table->smallInteger('order');
        });
    }
    
    public function down()
    {
        Schema::table('katana_team_', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
