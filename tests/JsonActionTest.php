<?php

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Harbor\ActionResponder\Stubs\StubJsonAction;
use Harbor\ActionResponder\JsonResponder;
use Harbor\ActionResponder\Stubs\StubResponder;

class JsonActionTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $request = new Request();
        $responder = new JsonResponder(new JsonResponse());
        $action = new StubJsonAction($request, $responder);

        $this->assertInstanceOf('Harbor\ActionResponder\JsonAction', $action);
        $this->assertAttributeEquals($request, 'request', $action);
        $this->assertAttributeEquals($responder, 'responder', $action);
    }

    public function testInvocation()
    {
        $responder = new JsonResponder(new JsonResponse());
        $action = new StubJsonAction(new Request(), $responder);
        $response = $action();

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\JsonResponse', $response);
        $this->assertEquals('{"foo":"bar"}', $response->getContent());
    }
}
