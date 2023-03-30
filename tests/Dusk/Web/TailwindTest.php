<?php

namespace Rappasoft\LaravelLivewireTables\Tests\Dusk\Web;

use Laravel\Dusk\Browser;
use Rappasoft\LaravelLivewireTables\Tests\Dusk\DuskTestCase;

class TailwindTest extends DuskTestCase
{
    /**
     * Tailwind Loads
     */
    public function testTailwindLoads(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tailwind');

            $browser->pause(2000);

            $browser->assertSee('Tailwind 2 Implementation');

            $browser->assertDontSee('Tafasdf');

        });
    }

    /**
     * Tailwind Loads
     */
    public function testTailwindFilterMenu(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tailwind');

            $browser->pause(2000);

            $browser->assertDontSee('Verified To Filter');

            $browser->click('.filterbuttonClicker');

            $browser->pause(1000);

            $browser->assertSee('Verified To Filter');
        });
    }

}
