<?php

class CreateUsersTable extends Migration
{

  /**
  * Make changes to the database.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('users', function($table)
    {
      $table->create();

      $table->increments('id');

      $table->string('email');
      $table->string('real_name');
      $table->string('password');

      $table->timestamps();
    });
  }

  /**
  * Revert the changes to the database.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('users');
  }

}