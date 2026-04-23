<?php
declare(strict_types = 1);

namespace Trio\Contracts;

interface Command
{

    public function __construct(string $what);

}
