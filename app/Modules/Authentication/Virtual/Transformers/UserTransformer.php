<?php
/**
 * Created by PhpStorm.
 * User: Slavik
 * Date: 12.03.2020
 * Time: 23:01
 */

namespace App\Modules\Authentication\Virtual\Transformers;

/**
 * @OA\Schema(
 *     title="UserTransformer",
 *     description="User Transformer",
 *     @OA\Xml(
 *         name="UserTransformer"
 *     )
 * )
 */

class UserTransformer
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Modules\Authentication\Virtual\Entities\User
     */

     private $data;
}