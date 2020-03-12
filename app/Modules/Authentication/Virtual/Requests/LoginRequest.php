<?php
/**
 * Created by PhpStorm.
 * User: Slavik
 * Date: 12.03.2020
 * Time: 22:57
 */

namespace App\Modules\Authentication\Virtual\Requests;

/**
 * @OA\Schema(
 *      title="Login",
 *      description="Login  to application request",
 *      type="object",
 *      required={"email", "password"}
 * )
 */

class LoginRequest
{
    /**
     * @OA\Property(
     *      title="email",
     *      description="Email of the register user",
     *      example="admin@gmail.com"
     * )
     *
     * @var string
     */
    public $email;

    /**
     * @OA\Property(
     *      title="password",
     *      description="Password of the register user",
     *      example="admin@gmail.com"
     * )
     *
     * @var string
     */
    public $password;
}