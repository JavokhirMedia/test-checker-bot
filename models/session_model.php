<?php

class Session_Model extends Model
{

    /**
     * @var string
     */
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'sessions';
    }

    /**
     * @param $chat_id
     * @param $data
     * @return bool
     */
    function set($chat_id, $data, $value = null): bool
    {
        if (empty($this->get($chat_id))) {
            return $this->db->prepare("INSERT INTO `$this->table` (`user_id`, `status`, `value`) VALUES ('$chat_id', '$data', '$value')")->execute();
        } else {
            return $this->update($chat_id, $data);
        }

    }

    /**
     * @param $chat_id
     * @return array|false
     */
    function get($chat_id)
    {
        $sth = $this->db->prepare("SELECT * FROM `$this->table` WHERE `user_id` = '$chat_id'");
        $sth->execute();
        return $sth->fetchAll();
    }

    /**
     * @param $chat_id
     * @param $data
     * @return bool
     */
    function update($chat_id, $data, $value = null): bool
    {
        return $this->db->prepare("UPDATE `$this->table` SET `status` = '$data', `value` = '$value' WHERE `user_id` = $chat_id")->execute();
    }

    /**
     * @param $chat_id
     * @return bool
     */
    function delete($chat_id): bool
    {
        return $this->db->prepare("DELETE FROM $this->table WHERE `user_id` = $chat_id")->execute();
    }

}
