<?php

use Harbor\Responder\Responder;

class StubResponder extends Responder
{
    /**
     * @return Response
     */
    protected function respond()
    {
        return $this->response;
    }
}
