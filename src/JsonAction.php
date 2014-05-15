<?php

namespace Harbor\ActionResponder;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class Action
 * @package Harbor\ActionResponder
 */
abstract class JsonAction extends Action
{
    /**
     * @param Request       $request
     * @param JsonResponder $responder
     */
    public function __construct(Request $request, JsonResponder $responder)
    {
        parent::__construct($request, $responder);
    }
} 
