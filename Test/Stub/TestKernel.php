<?php

declare(strict_types=1);

namespace diego182\MobileDetectBundle\Test\Stub;

use diego182\MobileDetectBundle\MobileDetectBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

final class TestKernel extends Kernel
{
    public function registerBundles(): iterable
    {
        return [
            new MobileDetectBundle()
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {

    }
}
