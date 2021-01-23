<?php

declare(strict_types=1);

use diego182\MobileDetectBundle\Service\MobileDetect;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure();

    $services->set('diego182.mobile_detect_bundle.mobile_detect')
        ->class(MobileDetect::class)
        ->autowire(false)
        ->public();

    $services->alias(MobileDetect::class, 'diego182.mobile_detect_bundle.mobile_detect')
        ->private();
};
