<?php

namespace Harbor\ActionResponder\Stubs;

use Harbor\ActionResponder\RedirectResponder;

class StubRedirectResponder extends RedirectResponder
{
    protected function getRedirectUrl()
    {
        return 'http://foo.com';
    }
}
