<?php

namespace Lamo\Stubs\Exceptions;

use Layer\Base\Exceptions\BaseLogicException;

class LogicException extends BaseLogicException
{
    protected array $errors = [
        'error' => [
            'status' => 500,
            'message' => 'xxx',
            'code' => -1
        ]
    ];
}
