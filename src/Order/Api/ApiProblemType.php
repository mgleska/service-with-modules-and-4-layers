<?php

declare(strict_types=1);

namespace App\Order\Api;

enum ApiProblemType: string
{
    case VALIDATOR = 'order/validator';
}
