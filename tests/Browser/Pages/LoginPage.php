<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class LoginPage extends Page {
    
    public function url() {
        return '/login';
    }

    public function assert(Browser $browser) {
        $browser->assertSee('Login');
    }
    
    public function elements() {
        return [
            '@login-email' => '#email',
            '@login-password' => '#password',
        ];
    }
    
    public function login(Browser $browser, $email, $password) {
        $browser->type('@login-email', $email)
                ->type('@login-password', $password)
                ->press('Entrar');
    }
}