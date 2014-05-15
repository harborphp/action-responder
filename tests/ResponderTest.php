<?php

use \Symfony\Component\HttpFoundation\Response;

require __DIR__.'/stubs/StubResponder.php';

class ResponderTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $responder = new StubResponder(new Response());

        $this->assertInstanceOf('Harbor\Responder\Responder', $responder);
        $this->assertAttributeEquals([], 'data', $responder);
    }

    public function testInvocation()
    {
        $responder = new StubResponder(new Response());

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Response', $responder());
    }
}
