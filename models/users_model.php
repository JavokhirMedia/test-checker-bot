<?php

class users_model extends Model
{

    /**
     * @var string
     */
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    /**
     * @param $user_id
     * @param $user_name
     * @param $lang
     * @return bool
     */

    function set($user_id, $user_name, $lang): bool
    {
        return $this->db->prepare("INSERT INTO `$this->table` (`user_id`, `user_name`, `lang`) VALUES ('$user_id', '$user_name', '$lang')")->execute();
    }

    /**
     * @param $chat_id
     * @return array|false
     */

    function get($chat_id)
    {
        $query = $this->db->prepare("SELECT * FROM `$this->table` WHERE `chat_id` = '$chat_id'");
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * @return array|false
     */

    function getAll()
    {
        $query = $this->db->prepare("SELECT * FROM `$this->table`");
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * @param $user_id
     * @param $row
     * @param $data
     * @return bool
     */

    function update($user_id, $row, $data): bool
    {
        return $this->db->prepare("UPDATE `$this->table` SET `$row` = '$data' WHERE `user_id` = '$user_id'")->execute();
    }

    /**
     * @param $user_id
     * @return bool
     */

    function delete($user_id): bool
    {
        return $this->db->prepare("DELETE FROM `$this->table` WHERE `user_id` = '$user_id'")->execute();
    }

    /**
     * @param $chat_id
     * @return bool
     */

    function if_not_exist($chat_id): bool
    {
        return empty($this->get($chat_id));
    }

    function getLang($chat_id)
    {
        return $this->get($chat_id)[0]["lang"];
    }

}