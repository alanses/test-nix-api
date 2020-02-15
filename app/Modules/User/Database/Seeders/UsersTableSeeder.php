<?php

namespace App\Modules\User\Database\Seeders;

use App\Modules\User\Entities\User;
use App\Modules\User\Repositories\UserRepository;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function run()
    {
        Model::unguard();

        $this->repository->create([
            'email' => 'admin@gmail.com',
            'password' => 'admin@gmail.com',
            'login' => 'admin',
            'name' => 'admin',
            'user_type' => User::$is_ADMIN
        ]);

        $this->repository->create([
            'email' => 'user@gmail.com',
            'password' => 'user@gmail.com',
            'login' => 'user',
            'name' => 'user',
            'user_type' => User::$IS_USER
        ]);
    }
}
