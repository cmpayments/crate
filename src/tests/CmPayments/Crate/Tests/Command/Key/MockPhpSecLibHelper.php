<?php

namespace CmPayments\Crate\Tests\Command\Key;

use CmPayments\Crate\Helper\PhpSecLibHelper;

class MockPhpSecLibHelper extends PhpSecLibHelper
{
    public function cryptRSA()
    {
        return new MockCryptRSA();
    }
}
