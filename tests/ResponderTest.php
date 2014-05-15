<?php

use Symfony\Component\HttpFoundation\Response;
use Harbor\ActionResponder\Stubs\StubResponder;

class ResponderTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $responder = new StubResponder(new Response());

        $this->assertInstanceOf('Harbor\ActionResponder\Responder', $responder);
    }

    public function testInvocation()
    {
        $responder = new StubResponder(new Response());
        $response = $responder();

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Response', $response);
        $this->assertEquals('Foo', $response->getContent());

    }
}
