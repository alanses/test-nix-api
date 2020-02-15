<?php

namespace App\Modules\User\Database\Seeders;

use App\Modules\Gym\Database\Seeders\GymDatabaseSeeder;
use App\Modules\Gym\Database\Seeders\SeedRatingForTrainersTableSeeder;
use App\Modules\Gym\Database\Seeders\SeedTrainersTableSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
    }
}
