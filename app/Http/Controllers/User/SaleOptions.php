<?php

namespace App\Http\Controllers\User;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Conversations\Conversation;

use App\Models\Property;

class SaleOptions extends Conversation
{
    public function run()
    {
        $this->select_option();
    }

    public function select_option()
    {
        $question = Question::create("What Type of Property? ")
            ->fallback("Sorry I did not understand that, please try again.")
            ->callbackId("sale_options")
            ->addButtons([
                Button::create("Pre-selling")->value("pre_selling"),
                Button::create("RFO")->value("rfo"),
        ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $value = $answer->getValue();
                if ($value == "pre_selling") {
                    $where = [
                        "cat" => "For Sale",
                        "type" => "Pre-selling",
                        "status" => "Published",
                    ];
                }
                else if ($value == "rfo") {
                    $where = [
                        "cat" => "For Sale",
                        "type" => "RFO",
                        "status" => "Published",
                    ];
                }

                $reply = "<p>Here is a list of available properties:<p>";

                $records = Property::where($where)->orderBy('name')->limit(10)->get();
                for ($i = 1; $i <= count($records); $i++) {
                    $id = $records[$i-1]['id'];
                    $name = $records[$i-1]['name'];
                    $reply .= "<a href='/property/$id' target='_blank'>$i. $name</a><br>";
                }
    
                $this->bot->reply($reply);
            }
        });
    }
}