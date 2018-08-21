<?php
use App\User; 
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
        User::create([
            'name'      => 'Emerson Lopes',
            'email'     => 'emersonlsg10@gmail.com',
            'password'  => bcrypt('12345')
        ]);
        
        User::create([
            'name'      => 'Outro',
            'email'     => 'contato@gmail.com',
            'password'  => bcrypt('12345')
        ]);
    }
}
