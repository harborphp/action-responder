<?php

namespace Harbor\ActionResponder;

use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * A Redirect Responder
 *
 * @package Harbor\Responder
 */
abstract class RedirectResponder extends Responder
{
    abstract protected function getRedirectUrl();

    public function __construct()
    {
        $response = new RedirectResponse($this->getRedirectUrl(), $this->getRedirectStatus());
        parent::__construct($response);
    }

    /**
     * Respond to the Redirect
     * @return Response
     */
    public function __invoke()
    {
        return $this->response;
    }

    /**
     * Gets the Redirect HTTP Status to use.  Default: 302
     * @return int
     */
    protected function getRedirectStatus()
    {
        return 302;
    }
}
