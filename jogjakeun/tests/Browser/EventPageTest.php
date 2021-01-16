<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EventPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testButtonLike()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/event/index')
                    ->press('btn_1')
                    ->assertSee('1');
        });
    }

    public function testSwitchPhoto()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/event/index')
                    ->click('@photo-button')
                    ->assertVisible("@photo_img");
        });
    }

    public function testSwitchVideo()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/event/index')
                    ->click('@video-button')
                    ->assertVisible("@video_img");
        });
    }
}
