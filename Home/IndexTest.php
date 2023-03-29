<?php
namespace Home;

use \Psr\Container\ContainerInterface;

class IndexTest
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        //do something with container
        $this->container = $container;
    }

    public function getPHPInfo(): void
    {
        phpinfo();
    }
}