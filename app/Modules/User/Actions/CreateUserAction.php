<?php

namespace App\Modules\User\Actions;

use App\Modules\Authentication\Tasks\GenerateTokenDataForUserTask;
use App\Modules\Gym\Tasks\CreateGymTask;
use App\Modules\User\Entities\User;
use App\Modules\User\Http\Requests\CreateUserRequest;
use App\Modules\User\Tasks\CreateUserTask;
use App\Ship\Abstraction\AbstractAction;
use Illuminate\Http\Request;

class CreateUserAction extends AbstractAction
{
    /**
     * @param  Request  $request
     * @return User
     */
    public function run(CreateUserRequest $request)
    {
        /** @var array $requestData */
        $requestData = $request->sanitizeInput(['name', 'email', 'password']);

        /** @var User $user */
        $user = $this->call(CreateUserTask::class, [$requestData]);

        /** @var User $user */
        $user = $this->call(GenerateTokenDataForUserTask::class, [$user]);

        return $user;
    }
}
