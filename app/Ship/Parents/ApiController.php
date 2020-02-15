<?php


namespace App\Ship\Parents;

use App\Ship\Interfaces\ApiControllerInterface;
use App\Ship\Interfaces\ParentInterface;
use App\Ship\Traits\CallableTrait;
use App\Ship\Traits\HttpResponses;

class ApiController implements ApiControllerInterface, ParentInterface
{
    use CallableTrait;
    use HttpResponses;
}
