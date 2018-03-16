<?php namespace Katana\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKatanaTeam2 extends Migration
{
    public function up()
    {
        Schema::table('katana_team_', function($table)
        {
            $table->text('colour');
        });
    }
    
    public function down()
    {
        Schema::table('katana_team_', function($table)
        {
            $table->dropColumn('colour');
        });
    }
}
