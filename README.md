# ActionResponder

Provides implementations of the Action and Responder layers of the [ADR Pattern](https://github.com/pmjones/mvc-refinement/).

These are base classes, intended to be extended (in most situations).

**Note: The Domain Layer of ADR is out of the scope of this package.**

## Action Example

This example uses a `JsonAction` which uses a `JsonResponder`.

``` php
<?php

namespace Blog\Api\Actions;

use Harbor\ActionResponder\JsonAction;

class BlogListAction extends JsonAction
{
    public function __invoke()
    {
        // Do something with your domain to get the Blog list

        $this->responder->articles = $articles;
        return $this->getResponse();
    }
}
```

## Responder Example

Coming Soon...See Tests for now.
