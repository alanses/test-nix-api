<?php
/**
 * Created by PhpStorm.
 * User: Slavik
 * Date: 12.03.2020
 * Time: 22:13
 */

namespace App\Modules\Category\Virtual\Transformers;

/**
 * @OA\Schema(
 *     title="CategoryTransformer",
 *     description="Category Transformer",
 *     @OA\Xml(
 *         name="CategoryTransformer"
 *     )
 * )
 */

class CategoryTransformer
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Modules\Category\Virtual\Entities\Category[]
     */

    private $data;
}