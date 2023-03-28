<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'nom'=>'Admin',
               'prenom'=>'Admin User',
               'adresse'=>'Dakar',
               'email'=>'admin@gmail.com',
               'telephone'=>'65567675',
               'password'=> bcrypt('123456'),
               'role'=>'admin',
            ],
            [
               'nom'=>'Passager',
               'prenom'=>'Passager User',
               'adresse'=>'Guediawaye',
               'email'=>'passager@gmail.com',
               'telephone'=>'772576767',
               'password'=> bcrypt('123456'),
               'role'=> 'client',
            ],
            [
               'nom'=>'Chauffeur',
               'prenom'=>'Chauffeur user',
               'adresse'=>'pikine',
               'email'=>'chauffeur@gmail.com',
               'telephone'=>'6564344556',
               'password'=> bcrypt('123456'),
               'role'=>'chauffeur',
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}