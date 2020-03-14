<?php
/**
 * Created by PhpStorm.
 * User: Slavik
 * Date: 14.03.2020
 * Time: 23:56
 */

namespace App\Modules\Authentication\Virtual\Entities;

/**
 * @OA\Schema(
 *     title="Authentication",
 *     description="Authentication data",
 *     @OA\Xml(
 *         name="User"
 *     )
 * )
 */

class Authentication
{
    /**
     * @OA\Property(
     *      title="token_type",
     *      description="Token type",
     *      example="Bearer"
     * )
     *
     * @var string
     */

    private $token_type;

    /**
     * @OA\Property(
     *      title="expires_in",
     *      description="Token expire in",
     *      example="31536000"
     * )
     *
     * @var string
     */

    private $expires_in;

    /**
     * @OA\Property(
     *      title="access_token",
     *      description="Access Token"
     * )
     *
     * @var string
     */

    private $access_token;

    /**
     * @OA\Property(
     *      title="refresh_token",
     *      description="Refresh Token"
     * )
     *
     * @var string
     */

    private $refresh_token;
}