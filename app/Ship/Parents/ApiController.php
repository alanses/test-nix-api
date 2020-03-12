<?php


namespace App\Ship\Parents;

use App\Ship\Interfaces\ApiControllerInterface;
use App\Ship\Interfaces\ParentInterface;
use App\Ship\Traits\CallableTrait;
use App\Ship\Traits\HttpResponses;

class ApiController implements ApiControllerInterface, ParentInterface
{
    /**
     * @OA\Info(
     *     title="Store Swagger API documentation",
     *     version="1.0.0",
     *     @OA\Contact(
     *         email="alansisslavik@gmail.com"
     *     ),
     * )
     * @OA\Server(
     *     description="Laravel Swagger API server",
     *     url=L5_SWAGGER_CONST_HOST
     * )
     * @OA\SecurityScheme(
     *     type="apiKey",
     *     in="header",
     *     name="Authorization",
     *     securityScheme="bearerAuth",
     *     type="http",
     *     scheme="bearer",
     *     bearerFormat="JWT"
     * )
     */
    use CallableTrait;
    use HttpResponses;
}
