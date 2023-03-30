<?php

namespace Rappasoft\LaravelLivewireTables\Tests\Standard\Traits\Helpers;

use Rappasoft\LaravelLivewireTables\Tests\Standard\TestCase;

class DebugHelpersTest extends TestCase
{
    /** @test */
    public function can_get_debug_status(): void
    {
        $this->assertTrue($this->basicTable->debugIsDisabled());

        $this->basicTable->setDebugEnabled();

        $this->assertTrue($this->basicTable->debugIsEnabled());

        $this->basicTable->setDebugDisabled();

        $this->assertTrue($this->basicTable->debugIsDisabled());
    }
}
