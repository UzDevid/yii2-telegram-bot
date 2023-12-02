<?php

namespace uzdevid\telegram\bot\message\manager;

use GuzzleHttp\Exception\GuzzleException;
use uzdevid\telegram\bot\message\Manager;
use uzdevid\telegram\bot\Service;

class Sender extends Manager {
    /**
     * @return object
     * @throws GuzzleException
     */
    public function send(): object {
        return Service::buildResponse($this->sendRequest(), $this->method);
    }
}