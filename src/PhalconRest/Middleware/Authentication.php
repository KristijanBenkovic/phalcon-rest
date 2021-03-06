<?php

namespace PhalconRest\Middleware;

use PhalconRest\Constants\Services;

class Authentication extends \Phalcon\Mvc\User\Plugin
{

    public function beforeExecuteRoute()
    {
        $this->request = $this->di->get(Services::REQUEST);
        $this->authManager = $this->di->get(Services::AUTH_MANAGER);

        $token = $this->request->getToken();

        if ($token) {

            $this->authManager->authenticateToken($token);
        }
    }
}
