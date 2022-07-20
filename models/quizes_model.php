<?php

class quizes_model extends Model
{

    public $lang;

    /**
     * @var string
     */
    public $table;

    public function __construct($lang)
    {
        parent::__construct();
        $this->lang = $lang;
        $this->table = $lang.'_quizes';
    }

}