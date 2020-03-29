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
     * @OA\Post(
     *      path="/login",
     *      operationId="login",
     *      tags={"Authentication"},
     *      summary="Login to application",
     *      description="Login to application",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/LoginRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/UserTransformer")
     *       ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error"
     *      )
     * )
     *
     *
     * @param  LoginRequest $request
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

    /**
     * @OA\Post(
     *      path="/logout",
     *      operationId="logout",
     *      tags={"Authentication"},
     *      summary="Logout from application",
     *      @OA\RequestBody(
     *          @OA\JsonContent(ref="#")
     *      ),
     *      security={
     *         {"bearerAuth": {}}
     *      },
     *      @OA\Response(
     *          response=200,
     *          description="Logout",
     *          @OA\JsonContent(ref="#")
     *       )
     * )
     */

    public function logout()
    {
        $user = Auth::user();

        return response()->json(['data' => [
            'logout' => $user->token()->revoke()
        ]]);
    }
}
