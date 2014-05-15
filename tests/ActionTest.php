<?php

use Symfony\Component\HttpFoundation\Response;
use Harbor\ActionResponder\Stubs\StubAction;
use Harbor\ActionResponder\Stubs\StubResponder;

class ActionTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $responder = new StubResponder(new Response());
        $action = new StubAction($responder);

        $this->assertInstanceOf('Harbor\ActionResponder\Action', $action);
        $this->assertAttributeEquals($responder, 'responder', $action);
    }

    public function testInvocation()
    {
        $responder = new StubResponder(new Response());
        $action = new StubAction($responder);
        $response = $action();

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Response', $response);
        $this->assertEquals('Foo', $response->getContent());
    }
}
