<?php
/**
 * Created by PhpStorm.
 * User: Slavik
 * Date: 12.03.2020
 * Time: 23:02
 */

namespace App\Modules\Authentication\Virtual\Entities;

/**
 * @OA\Schema(
 *     title="User",
 *     description="User model",
 *     @OA\Xml(
 *         name="User"
 *     )
 * )
 */

class User
{
    /**
     * @OA\Property(
     *     title="user_Id",
     *     description="User Id",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */

    private $user_id;

    /**
     * @OA\Property(
     *      title="email",
     *      description="User Email",
     *      example="admin@admin.com"
     * )
     *
     * @var string
     */

    private $email;

    /**
     * @OA\Property(
     *      title="Name",
     *      description="User name",
     *      example="slavik"
     * )
     *
     * @var string
     */

    private $name;

    /**
     * @OA\Property(
     *     title="Content",
     *     description="Login data"
     * )
     *
     * @var \App\Modules\Authentication\Virtual\Entities\Authentication
     */

    private $content;
}