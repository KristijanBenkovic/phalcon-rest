<?php

namespace PhalconRest\Auth;

interface Authenticate
{

    public function login($username = null, $password = null);
}
