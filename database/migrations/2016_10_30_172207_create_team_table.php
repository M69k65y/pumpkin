<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('teams', function (Blueprint $table){

			$table->increments("member_id");
			$table->string('team_first_name')->notnull();
			$table->string('team_surname')->notnull();
			$table->string('team_nickname');
			$table->string('email')->unique();
			$table->string('team_designation');
			$table->string('team_description');
			$table->string('team_image');

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		Schema::dropIfExists('teams');

	}
}
