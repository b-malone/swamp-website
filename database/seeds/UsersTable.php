<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // SETUP User-Role Relations for existing users
      // $this->call([
      //   UserRolesTable::class
      // ]);

      // CREATE users from development

      // SETUP User-Role Relations for existing users
      $this->call([
        UserRolesTable::class
      ]);
    }
}
