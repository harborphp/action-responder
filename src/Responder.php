<?php

namespace Harbor\Responder;

use Symfony\Component\HttpFoundation\Response;

abstract class Responder
{
    /**
     * The point of execution for the Responder.
     * @return Response
     */
    abstract public function __invoke();

    /**
     * @var array
     */
    public $data;

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
        $this->data = [];
    }
}
