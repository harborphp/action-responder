<?php

use Harbor\ActionResponder\Responder;

class StubResponder extends Responder
{
    /**
     * @return Response
     */
    public function __invoke()
    {
        return $this->response;
    }
}
