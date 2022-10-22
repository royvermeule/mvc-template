<?php
class HomepageModel
{
    private Database $db;

    public function __construct($db = new Database)
    {
        $this->db = $db;
    }

    public function getAbout()
    {
        $About = 'SELECT * FROM about';
        $this->db->query($About);
        return $this->db->resultSet();
    }
}
