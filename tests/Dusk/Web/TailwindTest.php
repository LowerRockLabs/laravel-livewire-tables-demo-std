<?php

namespace Rappasoft\LaravelLivewireTables\Tests\Dusk\Web;

use Laravel\Dusk\Browser;
use Rappasoft\LaravelLivewireTables\Tests\Dusk\DuskTestCase;

class TailwindTest extends DuskTestCase
{
    /**
     * All Filters Load
     */
    public function testFilterMenuOpensAll(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tailwind');

            $browser->assertDontSee('Tafasdf');

            $browser->pause(1000);

            $browser->press('@filtBtn');

            $browser->pause(1000);

            $browser->assertSee('E-mail Verified');
        });
    }
}
