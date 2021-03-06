<?php namespace Katana\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKatanaTeam extends Migration
{
    public function up()
    {
        Schema::table('katana_team_', function($table)
        {
            $table->text('short_desc');
        });
    }
    
    public function down()
    {
        Schema::table('katana_team_', function($table)
        {
            $table->dropColumn('short_desc');
        });
    }
}
