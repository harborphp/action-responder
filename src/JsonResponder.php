<?php

namespace Harbor\ActionResponder;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * A JSON Responder.
 *
 * @package Harbor\Responder
 */
class JsonResponder extends Responder
{
    public function __construct(JsonResponse $response)
    {
        parent::__construct($response);
    }

    /**
     * The point of execution for the Responder.
     * @return Response
     */
    public function __invoke()
    {
        $this->response->setData($this->toArray());

        return $this->response;
    }
}
