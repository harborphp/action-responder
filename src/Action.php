<?php

namespace Harbor\ActionResponder;

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
    protected $responder;

    /**
     * @param Responder $responder
     */
    public function __construct(Responder $responder)
    {
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
