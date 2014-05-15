<?php

namespace Harbor\Responder;

use Symfony\Component\HttpFoundation\Response;

abstract class Responder
{
    /**
     * @return Response
     */
    abstract protected function respond();

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

    /**
     * The point of execution for the Responder.
     * @return Response
     */
    public function __invoke()
    {
        return $this->respond();
    }
}
