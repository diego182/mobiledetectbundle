<?php

declare(strict_types=1);

namespace diego182\MobileDetectBundle\Test\Functional;

use diego182\MobileDetectBundle\Service\MobileDetect;
use diego182\MobileDetectBundle\Test\Stub\TestKernel;
use Mobile_Detect;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

final class ServiceConfigurationTest extends TestCase
{
    private ContainerInterface $container;

    protected function setUp(): void
    {
        parent::setUp();

        $kernel = new TestKernel('test', true);
        $kernel->boot();

        $this->container = $kernel->getContainer();
    }

    public function testItCorrectlyCreateMobileDetectServiceInTheContainer()
    {
        $mobileDetect = $this->container->get('diego182.mobile_detect_bundle.mobile_detect');

        $this->assertInstanceOf(MobileDetect::class, $mobileDetect);
        $this->assertInstanceOf(Mobile_Detect::class, $mobileDetect);
    }
}
