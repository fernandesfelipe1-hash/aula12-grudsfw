<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase {
    
    public function test_login() {
        $user = User::factory()->create([
            'email' => 'teste@email.com',
            'password' => bcrypt('123456')
        ]);
        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
                    ->pause(1000)
                    ->type('email', 'teste@email.com')
                    ->pause(1000)
                    ->type('password', '123456')
                    ->pause(1000)
                    ->press('Entrar')
                    ->pause(1000)
                    ->assertPathIs('/dashboard');
        });
    }
}