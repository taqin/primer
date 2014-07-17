<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlastwall extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();			
			$table->string('password');
			$table->timestamps();
		});
		DB::table('users')->insert(array(
					'email' => 'test@test.com',
					'password' => Hash::make('123456')
		));


		Schema::create('walls', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('url')->unique();			
			$table->string('title');
			$table->timestamps();
		});
		DB::table('walls')->insert(array(
					'url' => 'qwerty',
					'title' => 'This is the first wall'
		));


		// Creation of the CUSTOMER table
		Schema::create('blasts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('wall_id')->unsigned();
			$table->string('message');
			$table->integer('down');
			$table->integer('up');
			$table->timestamps();

			$table->foreign('wall_id')->references('id')->on('walls');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
		Schema::drop('blasts');
		Schema::drop('walls');
	}

}
