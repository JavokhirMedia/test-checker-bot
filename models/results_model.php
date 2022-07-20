<?php

class results_model extends Model
{

    /**
     * @var string
     */
    private $table;

    /**
     * @var Telegram
     */
    private $telegram;

    /**
     * @var mixed
     */
    private $chat_id;

    /**
     * @var false|string
     */
    private $current_time;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'results';

        $this->telegram = new Telegram();
        $this->chat_id = $this->telegram->ChatID();

        $this->current_time = $this->telegram->currentDate();
    }

    /**
     * @param $ticket_id
     * @return bool
     */

    public function set($ticket_id): bool
    {
        return $this->db->prepare("INSERT INTO `$this->table` (`user_id`, `ticket_id`, `starting_at`) VALUES ('$this->chat_id', '$ticket_id', `$this->current_time`)")->execute();
    }

    /**
     * @param $row
     * @param $data
     * @param $limit
     * @return array|false
     */

    public function get($row, $data, $limit = null)
    {
        return $this->db->prepare("SELECT * FROM `$this->table` WHERE `$row` = '$data' $limit")->fetchAll();
    }

    /**
     * @param $row
     * @param $data
     * @return bool
     */

    public function update($row, $data): bool
    {
        return $this->db->prepare("UPDATE `$this->table` SET `$row` = '$data' WHERE `user_id` = '$this->chat_id'")->execute();
    }

    /**
     * @param $limit
     * @return bool
     */

    public function delete($limit): bool
    {
        return $this->db->prepare("DELETE FROM `$this->table` WHERE `user_id` = '$this->chat_id' $limit")->execute();
    }

}