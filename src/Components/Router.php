<?php


namespace AdServer\Routing\Components;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Router as SymfonyRouter;

class Router extends SymfonyRouter
{
    /**
     * {@inheritdoc}
     */
    public function setRouteCollection(RouteCollection $collection)
    {
        return $this->collection = $collection;
    }
}