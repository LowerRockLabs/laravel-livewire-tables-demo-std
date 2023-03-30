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

            $browser->pause(2000);
            $browser->assertSee('Tailwind');

            $browser->assertSee('Tailwind 2 Implementation');

            $browser->assertDontSee('Tafasdf');

            $browser->click('.filterbuttonClicker');

            $browser->pause(2000);

            $browser->assertSee('Verified To Filter');
        });
    }

        /**
     * All Filters Load
     */
    public function testSeeRandom(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tailwind');

            $browser->pause(2000);
            $browser->assertSee('Asdfasfa4fadfvacvarfda');

        });
    }

}
