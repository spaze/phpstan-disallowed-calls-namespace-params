<?php
declare(strict_types = 1);

namespace Trio\Logistics\Application\Something;

use Trio\Contracts\Logistics\Bar\TestLogisticsCommand;
use Trio\Contracts\Marketplaces\Foo\TestMarketplaceCommand;
use Trio\Marketplaces\Application\Something\CommandDispatcher;

class Yay2 {

    private CommandDispatcher $command;

    public function __construct()
    {
        $this->command = new CommandDispatcher();
    }

    public function yeah2(): void
    {
        $this->command->dispatch(new TestMarketplaceCommand('pass')); // <--- should pass, different namespace
        $this->command->dispatchAsync(new TestMarketplaceCommand('pass')); // <--- should pass, different namespace
        $this->command->dispatch(new TestLogisticsCommand('pass')); // <--- should pass
    }

}
