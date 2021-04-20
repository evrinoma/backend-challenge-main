<?php

declare(strict_types=1);

namespace App\Infrastructure\UI\Web;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController
{
    /**
     * @Route("/hello-world", name="app_hello_world")
     */
    public function helloWorld(): Response
    {
        return new Response(
            '<html lang="en"><body>Hello World</body></html>'
        );
    }
}
