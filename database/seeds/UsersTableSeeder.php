<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $user = new \App\User();
 //       $user-> Create([
   //         'name'=>'Augusto cezar',
    //        'email'=>'augustoperez696@live.com',
      //      'password'=>bcrypt('123456')
        //]);

        factory(App\User::class, 30)->create();
    }
}
