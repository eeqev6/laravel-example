<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPeople extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$user = new User;
    $user->name = 'George Clooney';
    $user->save();

		$user = new User;
    $user->name = 'Sandra Bullock';
    $user->save();

		$user = new User;
    $user->name = 'Kristen Bell';
    $user->save();

		$user = new User;
    $user->name = 'Ron Burgandy';
    $user->save();

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
