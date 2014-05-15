<?php

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Harbor\ActionResponder\Stubs\StubAction;
use Harbor\ActionResponder\Stubs\StubResponder;

class ActionTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $request = new Request();
        $responder = new StubResponder(new Response());
        $action = new StubAction($request, $responder);

        $this->assertInstanceOf('Harbor\ActionResponder\Action', $action);
        $this->assertAttributeEquals($request, 'request', $action);
        $this->assertAttributeEquals($responder, 'responder', $action);
    }

    public function testInvocation()
    {
        $responder = new StubResponder(new Response());
        $action = new StubAction(new Request(), $responder);
        $response = $action();

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Response', $response);
        $this->assertEquals('Foo', $response->getContent());
    }
}
