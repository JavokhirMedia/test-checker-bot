<?php

class Boshla
{

    /**
     * @var Telegram
     */
    private $telegram;
    /**
     * @var model
     */
    public $session;

    function __construct()
    {

        $this->telegram = new Telegram();
        $this->session = new Session_Model();

        if ($this->telegram->IsBotCommand()) {
            if ($this->telegram->Text() == '/start'){
                require 'controllers/start_controller.php';
                $controller = new start();
            } else {
                $this->error(ERROR_TEXT);
            }

        } else {
            $status = $this->session->get($this->telegram->ChatID());
            require 'controllers/'.$status[0]["status"].'_controller.php';
            $sl_class = $status[0]["status"].'_controller';
            $controller = new $sl_class;
        }

    }

    /**
     * @param $text
     * @return bool
     */
    public function error($text): bool
    {
        $this->telegram->sendMessage(['chat_id' => $this->telegram->ChatID(), 'text' => $text, 'parse_mode' => "html"]);
        return false;
    }


}

