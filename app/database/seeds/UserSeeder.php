<?php

class UserSeeder extends Seeder{
    public function run(){
        $users = new User();
        $users->name = 'Holi';
        $users->email = 'Dooaankh@gmail.com';
        $users->password = Hash::make('12345');
        $users->save();
    }
}
