<?php

namespace App\Http\Controllers\User;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Conversations\Conversation;

use App\Models\Property;

class LeaseOptions extends Conversation
{
    public function run()
    {
        $this->select_option();
    }

    public function select_option()
    {
        $question = Question::create("What Type of Property? ")
            ->fallback("Sorry I did not understand that, please try again.")
            ->callbackId("lease_options")
            ->addButtons([
                Button::create("Residential")->value("residential"),
                Button::create("Commercial")->value("commercial"),
        ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $value = $answer->getValue();
                if ($value == "residential") {
                    $where = [
                        "cat" => "For Lease",
                        "type" => "Residential",
                        "status" => "Published",
                    ];
                }
                else if ($value == "commercial") {
                    $where = [
                        "cat" => "For Lease",
                        "type" => "Commercial",
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