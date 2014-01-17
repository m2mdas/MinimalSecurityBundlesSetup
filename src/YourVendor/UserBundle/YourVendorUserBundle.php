<?php

namespace YourVendor\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class YourVendorUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
