<?php

namespace App\Modules\Authentication\Http\Controllers;

use App\Modules\Authentication\Actions\ApiLoginAction;
use App\Modules\Authentication\Http\Requests\LoginRequest;
use App\Modules\User\Actions\FindUserByEmailAction;
use App\Modules\User\Entities\User;
use App\Modules\User\Transformers\UserTransformer;
use App\Ship\Parents\ApiController;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends ApiController
{
    /**
     * @param  LoginRequest  $request
     * @return UserTransformer
     * @throws \ReflectionException
     */
    public function login(LoginRequest $request)
    {
        $result = $this->call(ApiLoginAction::class, [
            $request,
            env('CLIENT_WEB_ADMIN_ID'),
            env('CLIENT_WEB_ADMIN_SECRET'),
        ]);

        /** @var User $user */
        $user = $this->call(FindUserByEmailAction::class, [$request->email]);
        $user['response_content'] = $result['response-content'];

        return new UserTransformer($user);
    }

    public function logout()
    {
        $user = Auth::user();

        return response()->json(['data' => [
            'logout' => $user->token()->revoke()
        ]]);
    }
}
