<?php

class tickets_model extends Model
{

    /**
     * @var string
     */
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = 'tickets';
    }

    function set($ticket_id): bool
    {
        $check = $this->get($ticket_id);
        if (empty($check)) {
            $query = $this->db->prepare("INSERT INTO `$this->table` (`ticket_id`) VALUES ('$ticket_id')")->execute();
            return true;
        } else {
            return false;
        }
    }

    function get($ticket_id)
    {
        $query = $this->db->prepare("SELECT * FROM `$this->table` WHERE `ticket_id` = '$ticket_id'");
        $query->execute();
        return $query->fetchAll();
    }

    function getAll()
    {
        $query = $this->db->prepare("SELECT * FROM `$this->table`");
        $query->execute();
        return $query->fetchAll();
    }

    function delete($ticket_id): bool
    {
        return $this->db->prepare("DELETE FROM `$this->table` WHERE `ticket_id` = '$ticket_id'")->execute();
    }

}