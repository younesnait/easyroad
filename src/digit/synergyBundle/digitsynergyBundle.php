<?php

namespace digit\synergyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class digitsynergyBundle extends Bundle
{
	public function getParent()
  {
    return 'FOSUserBundle';
  }
}
