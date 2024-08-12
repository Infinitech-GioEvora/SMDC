<?php

namespace App\Http\Controllers\User;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Conversations\Conversation;

use App\Models\Setting;

class InitialOptions extends Conversation
{
    public function run()
    {
        $this->select_option();
    }

    public function select_option()
    {
        $question = Question::create("How can i help you, would you like to know about the following: ")
            ->fallback("Sorry I did not understand that, please try again.")
            ->callbackId("initial_options")
            ->addButtons([
                Button::create("For Sale")->value("for_sale"),
                Button::create("For Lease")->value("for_lease"),
                Button::create("About Us")->value("about"),
        ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $value = $answer->getValue();
                if ($value == "for_sale") {
                    $this->bot->startConversation(new SaleOptions());
                }
                else if ($value == "for_lease") {
                    $this->bot->startConversation(new LeaseOptions());
                }
                else if ($value == "about") {
                    $setting = Setting::first();
                    $this->bot->reply($setting['desc']);
                }
            }
        });
    }
}