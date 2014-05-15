<?php

namespace Harbor\ActionResponder;

use Symfony\Component\HttpFoundation\Response;
use Harbor\DataContainer\DataContainerTrait;

abstract class Responder
{
    use DataContainerTrait;

    /**
     * The point of execution for the Responder.
     * @return Response
     */
    abstract public function __invoke();

    /**
     * @var Response
     */
    protected $response;

    /**
     * @param Response    $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }
}
