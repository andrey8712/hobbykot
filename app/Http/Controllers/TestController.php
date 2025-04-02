<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class TestController extends Controller
{

    public function index(): Response
    {
        return Inertia::render(
            'Test', [
                'test' => 'Hello, World!'
            ]
        );
    }

    public function test(): Response
    {
        return Inertia::render(
            'Test3', [
                'test' => 'Hello, World!'
            ]
        );
    }

}
