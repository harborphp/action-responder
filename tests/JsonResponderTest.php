<?php

use Harbor\Responder\JsonResponder;
use Symfony\Component\HttpFoundation\JsonResponse;

class JsonResponderTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $responder = new JsonResponder(new JsonResponse());

        $this->assertInstanceOf('Harbor\Responder\Responder', $responder);
        $this->assertAttributeInstanceOf('Symfony\Component\HttpFoundation\JsonResponse', 'response', $responder);
    }

    public function testInvocation()
    {
        $responder = new JsonResponder(new JsonResponse());
        $response = $responder();

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\JsonResponse', $response);
    }

    public function testResponderDataTurnsIntoJson()
    {
        $responder = new JsonResponder(new JsonResponse());
        $this->assertEquals('[]', $responder()->getContent());

        $responder = new JsonResponder(new JsonResponse());
        $responder->data['foo'] = 'bar';
        $this->assertEquals('{"foo":"bar"}', $responder()->getContent());
    }
}
