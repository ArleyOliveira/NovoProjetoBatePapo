<?php

namespace BatePapo\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BatePapoUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
