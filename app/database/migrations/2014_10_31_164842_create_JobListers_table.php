<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobListersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_listers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('position_title');
			$table->string('job_type');
			$table->string('job_city');
			$table->longText('jobs_description');
			$table->longText('jobs_apply');
			$table->longText('jobs_contact');
			$table->integer('company_id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('job_listers');
	}

}
