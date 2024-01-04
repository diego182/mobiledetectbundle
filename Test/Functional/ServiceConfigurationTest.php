<?php

declare(strict_types=1);

namespace diego182\MobileDetectBundle\Test\Functional;

use Detection\MobileDetect as BaseMobileDetect;
use diego182\MobileDetectBundle\Service\MobileDetect;
use diego182\MobileDetectBundle\Test\Stub\TestKernel;
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

    public function testItCorrectlyCreateMobileDetectServiceInTheContainer(): void
    {
        $mobileDetect = $this->container->get('diego182.mobile_detect_bundle.mobile_detect');

        $this->assertInstanceOf(MobileDetect::class, $mobileDetect);
        $this->assertInstanceOf(BaseMobileDetect::class, $mobileDetect);
    }
}
