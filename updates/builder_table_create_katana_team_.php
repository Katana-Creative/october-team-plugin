<?php namespace Katana\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKatanaTeam extends Migration
{
    public function up()
    {
        Schema::create('katana_team_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('role');
            $table->text('long_desc');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('katana_team_');
    }
}
