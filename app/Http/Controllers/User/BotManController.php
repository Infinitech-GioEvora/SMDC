<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class BotManController extends Controller
{
    public function botman() {
        $botman = app("botman");

        $botman->hears("{message}", function($botman, $message) {
            if (strtolower($message) == 'hi') {
                $botman->startConversation(new InitialOptions);
            }
        });
        
        $botman->listen();
    }
}
