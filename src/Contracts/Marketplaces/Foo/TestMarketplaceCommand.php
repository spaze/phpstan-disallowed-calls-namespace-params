<?php
declare(strict_types = 1);

namespace Trio\Contracts\Marketplaces\Foo;

use Trio\Contracts\Command;

class TestMarketplaceCommand implements Command
{

    public function __construct(public string $what)
    {
    }

}
