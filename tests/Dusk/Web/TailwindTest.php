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

            $browser->press('div.flex-col > div.md\:flex.md\:justify-between.mb-4.px-4.md\:p-0 > div.w-full.mb-4.md\:mb-0.md\:w-2\/4.md\:flex.space-y-4.md\:space-y-0.md\:space-x-2 > div.relative.block.md\:inline-block.text-left > div:nth-child(1) > button');

            $browser->pause(1000);

            $browser->assertSee('E-mail Verified');
        });
    }
}
