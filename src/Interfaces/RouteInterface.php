<?php

namespace Abdulmajidcse\PhpRoute\Interfaces;

interface RouteInterface
{
    /**
     * get instance
     */
    public static function load(): self;

    /**
     * get route
     * @param string $uri
     * @param array $action
     * 
     * @return void
     */
    public function get(string $uri, array $action): void;

    /**
     * post route
     * @param string $uri
     * @param array $action
     * 
     * @return void
     */
    public function post(string $uri, array $action): void;

    /**
     * run the application
     */
    public function run(): mixed;
}
