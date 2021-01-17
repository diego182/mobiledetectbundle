## Mobile Detect Bundle for Symfony

This library aims to give a thin wrapper for
[Mobile Detect](http://mobiledetect.net/) library, providing library auto configuration for autowire the class into your
project.

This way you could just auto wire the class into your services as follows:

```php
<?php

namespace App\Service;

use diego182\MobileDetectBundle\Service\MobileDetect;

class MyService
{
    private MobileDetect $mobileDetect;
    
    public function __construct(MobileDetect $mobileDetect) {
        $this->mobileDetect = $mobileDetect;
    }
}
```
