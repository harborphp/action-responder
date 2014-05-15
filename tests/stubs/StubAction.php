<?php

namespace Harbor\ActionResponder\Stubs;

use Harbor\ActionResponder\Action;

class StubAction extends Action
{
    /**
     * @return Response
     */
    public function __invoke()
    {
        return $this->getResponse();
    }
}
