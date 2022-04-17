<?php

declare(strict_types=1);

namespace Snicco\Component\BetterWPAPI\Tests\fixtures;

use Snicco\Component\BetterWPAPI\BetterWPAPI;

final class TestWPAPI extends BetterWPAPI
{
    public function customMethod(): string
    {
        return 'customMethod';
    }
}
