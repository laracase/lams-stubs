<?php

namespace Lams\Stubs\Exceptions;

use Layer\Base\Support\BaseException;

class LogicException extends BaseException
{
    protected array $errors = [
        'error' => [
            'status' => 500,
            'message' => 'xxx',
            'code' => -1
        ]
    ];
}
