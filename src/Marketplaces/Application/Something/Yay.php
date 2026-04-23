<?php
declare(strict_types = 1);

namespace Trio\Marketplaces\Application\Something;

use Trio\Contracts\Logistics\Bar\TestLogisticsCommand;
use Trio\Contracts\Marketplaces\Foo\TestMarketplaceCommand;

class Yay {

    private CommandDispatcher $command;

    public function __construct()
    {
        $this->command = new CommandDispatcher();
    }

    public function yeah(): void
    {
        $this->command->dispatch(new TestLogisticsCommand('pass')); // <--- should pass
        $this->command->dispatchAsync(new TestLogisticsCommand('pass')); // <--- should pass
        $this->command->dispatch(new TestMarketplaceCommand('fail?')); // <--- should fail?
    }

}
