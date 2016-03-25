<?php

namespace CmPayments\Crate\Tests;

use CmPayments\Crate\Compactor\CompactorInterface;

class TestCompactor implements CompactorInterface
{
    public function compact($contents)
    {
    }

    public function supports($file)
    {
    }
}
