<?php
declare(strict_types = 1);

namespace Trio\Contracts\Logistics\Bar;

use Trio\Contracts\Command;

class TestLogisticsCommand implements Command
{

    public function __construct(public string $what)
    {
    }

}
