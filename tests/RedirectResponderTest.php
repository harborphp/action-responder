<?php

require __DIR__.'/stubs/StubRedirectResponder.php';

class RedirectResponderTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $responder = new StubRedirectResponder();

        $this->assertInstanceOf('Harbor\Responder\Responder', $responder);
        $this->assertAttributeInstanceOf('Symfony\Component\HttpFoundation\RedirectResponse', 'response', $responder);
    }

    public function testInvocation()
    {
        $responder = new StubRedirectResponder();
        $response = $responder();

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\RedirectResponse', $response);
        $this->assertEquals('http://foo.com', $response->getTargetUrl());
    }
}
