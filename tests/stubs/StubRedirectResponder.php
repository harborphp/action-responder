<?php

use Harbor\Responder\RedirectResponder;

class StubRedirectResponder extends RedirectResponder
{
    protected function getRedirectUrl()
    {
        return 'http://foo.com';
    }
}
