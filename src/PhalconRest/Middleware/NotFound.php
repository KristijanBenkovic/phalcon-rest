<?php

namespace PhalconRest\Middleware;

use PhalconRest\Constants\ErrorCodes;
use PhalconRest\Exceptions\UserException;
use Phalcon\Events\Event;
use Phalcon\Mvc\Micro;

class NotFound extends \Phalcon\Mvc\User\Plugin
{

    public function beforeNotFound(Event $event, Micro $app)
    {
        throw new UserException(ErrorCodes::GEN_NOTFOUND);
    }
}
