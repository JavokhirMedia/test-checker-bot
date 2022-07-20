<?php

class SelectLang_controller extends Controller
{

    public function __construct()
    {

        parent::__construct();

        require './models/users_model.php';
        $this->users_model = new users_model();

        if ($this->telegram->getUpdateType() == 'callback_query') {
            $data = $this->telegram->Callback_Data();
            if ($data == "uzl" or $data == "uzk" or $data == "rus") {
                $this->users_model->set($this->chat_id, $this->telegram->FirstName().' '.$this->telegram->LastName(), $data);

                $this->telegram->deleteMessage([
                    'chat_id' => $this->chat_id,
                    'message_id' => $this->telegram->MessageID(),
                ]);

                require './config/lang/'.$data.'.php';

                $this->telegram->sendMessage([
                    'chat_id' => $this->chat_id,
                    'text' => START_TEXT,
                    'parse_mode' => "html",
                    'reply_markup' => $this->telegram->buildInlineKeyBoard([
                        [$this->telegram->buildInlineKeyboardButton(SHABLON_TEST_BUTTON, "template_test")],
                        [$this->telegram->buildInlineKeyboardButton(IMTIHON_BUTTON, "start_exam")],
                    ]),
                ]);
                $this->session->update($this->chat_id, "ChooseType");
            }
        }

    }
}