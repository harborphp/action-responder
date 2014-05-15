<?php

namespace Harbor\ActionResponder\Stubs;

use Harbor\ActionResponder\JsonAction;

class StubJsonAction extends JsonAction
{
    /**
     * @return Response
     */
    public function __invoke()
    {
        $this->responder->foo = "bar";
        return $this->getResponse();
    }
}
