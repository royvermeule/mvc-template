<?php
class HomepageModel
{
    private Database $db;

    public function __construct($db = new Database)
    {
        $this->db = $db;
    }

    //Here is where we write our db code.
}
