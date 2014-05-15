<?php

namespace Harbor\ActionResponder\Stubs;

use Harbor\ActionResponder\Responder;

class StubResponder extends Responder
{
    /**
     * @return Response
     */
    public function __invoke()
    {
        $this->response->setContent('Foo');
        return $this->response;
    }
}
