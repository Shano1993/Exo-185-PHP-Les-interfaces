<?php

require('interfaces/UserInterface.php');

class user implements UserInterface
{

    private $request;

    public function __construct() {
        $this->getRequest($_REQUEST);
    }


    public function getRequest($request)
    {
        $this->request = $request;
    }

    public function parseRequest()
    {
        foreach ($this->request as $value) {
            echo $value;
        }
    }
}