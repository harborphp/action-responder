<?php

namespace Harbor\ActionResponder;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class Action
 * @package Harbor\ActionResponder
 */
abstract class Action
{
    abstract public function __invoke();

    /**
     * @var Responder
     */
    protected $request;

    /**
     * @var Responder
     */
    protected $responder;

    /**
     * @param Request   $request
     * @param Responder $responder
     */
    public function __construct(Request $request, Responder $responder)
    {
        $this->request = $request;
        $this->responder = $responder;
    }

    /**
     * Invokes the Responder and returns the Response.
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getResponse()
    {
        return $this->responder->__invoke();
    }
} 
