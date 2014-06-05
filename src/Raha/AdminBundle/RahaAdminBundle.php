<?php

namespace Raha\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RahaAdminBundle extends Bundle
{
    public function getParent()
    {
      return 'FOSUserBundle';
    }
}
