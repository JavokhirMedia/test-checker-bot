<?php

class ChooseType_controller extends Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->telegram->getUpdateType() == 'callback_query') {
            $d = $this->telegram->Callback_Data();
            $this->$d();
        }

        $this->telegram->sendMessage([
            'chat_id' => $this->chat_id,
            'text' => "Biletni tanlang:",
            'reply_markup' => $this->template_test(),
        ]);

    }

    function template_test()
    {

        return $this->telegram->buildInlineKeyBoard([
            [
                $this->telegram->buildInlineKeyboardButton("1", "1"),
                $this->telegram->buildInlineKeyboardButton("2", "2"),
                $this->telegram->buildInlineKeyboardButton("3", "3"),
                $this->telegram->buildInlineKeyboardButton("4", "4"),
                $this->telegram->buildInlineKeyboardButton("5", "5"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("6", "6"),
                $this->telegram->buildInlineKeyboardButton("7", "7"),
                $this->telegram->buildInlineKeyboardButton("8", "8"),
                $this->telegram->buildInlineKeyboardButton("9", "9"),
                $this->telegram->buildInlineKeyboardButton("10", "10"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("11", "11"),
                $this->telegram->buildInlineKeyboardButton("12", "12"),
                $this->telegram->buildInlineKeyboardButton("13", "13"),
                $this->telegram->buildInlineKeyboardButton("14", "14"),
                $this->telegram->buildInlineKeyboardButton("15", "15"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("16", "16"),
                $this->telegram->buildInlineKeyboardButton("17", "17"),
                $this->telegram->buildInlineKeyboardButton("18", "18"),
                $this->telegram->buildInlineKeyboardButton("19", "19"),
                $this->telegram->buildInlineKeyboardButton("20", "20"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("21", "21"),
                $this->telegram->buildInlineKeyboardButton("22", "22"),
                $this->telegram->buildInlineKeyboardButton("23", "23"),
                $this->telegram->buildInlineKeyboardButton("24", "24"),
                $this->telegram->buildInlineKeyboardButton("25", "25"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("26", "26"),
                $this->telegram->buildInlineKeyboardButton("27", "27"),
                $this->telegram->buildInlineKeyboardButton("28", "28"),
                $this->telegram->buildInlineKeyboardButton("29", "29"),
                $this->telegram->buildInlineKeyboardButton("30", "30"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("31", "31"),
                $this->telegram->buildInlineKeyboardButton("32", "32"),
                $this->telegram->buildInlineKeyboardButton("33", "33"),
                $this->telegram->buildInlineKeyboardButton("34", "34"),
                $this->telegram->buildInlineKeyboardButton("35", "35"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("36", "36"),
                $this->telegram->buildInlineKeyboardButton("37", "37"),
                $this->telegram->buildInlineKeyboardButton("38", "38"),
                $this->telegram->buildInlineKeyboardButton("39", "39"),
                $this->telegram->buildInlineKeyboardButton("40", "40"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("41", "41"),
                $this->telegram->buildInlineKeyboardButton("42", "42"),
                $this->telegram->buildInlineKeyboardButton("43", "43"),
                $this->telegram->buildInlineKeyboardButton("44", "44"),
                $this->telegram->buildInlineKeyboardButton("45", "45"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("46", "46"),
                $this->telegram->buildInlineKeyboardButton("47", "47"),
                $this->telegram->buildInlineKeyboardButton("48", "48"),
                $this->telegram->buildInlineKeyboardButton("49", "49"),
                $this->telegram->buildInlineKeyboardButton("50", "50"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("51", "51"),
                $this->telegram->buildInlineKeyboardButton("52", "52"),
                $this->telegram->buildInlineKeyboardButton("53", "53"),
                $this->telegram->buildInlineKeyboardButton("54", "54"),
                $this->telegram->buildInlineKeyboardButton("55", "55"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("56", "56"),
                $this->telegram->buildInlineKeyboardButton("57", "57"),
                $this->telegram->buildInlineKeyboardButton("58", "58"),
                $this->telegram->buildInlineKeyboardButton("59", "59"),
                $this->telegram->buildInlineKeyboardButton("60", "60"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("61", "61"),
                $this->telegram->buildInlineKeyboardButton("62", "62"),
                $this->telegram->buildInlineKeyboardButton("63", "63"),
                $this->telegram->buildInlineKeyboardButton("64", "64"),
                $this->telegram->buildInlineKeyboardButton("65", "65"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("66", "66"),
                $this->telegram->buildInlineKeyboardButton("67", "67"),
                $this->telegram->buildInlineKeyboardButton("68", "68"),
                $this->telegram->buildInlineKeyboardButton("69", "69"),
                $this->telegram->buildInlineKeyboardButton("70", "70"),
            ],
            [
                $this->telegram->buildInlineKeyboardButton("Asosiy menyuga qaytish ⬅️", "ChooseType"),
            ],
        ]);

    }
}