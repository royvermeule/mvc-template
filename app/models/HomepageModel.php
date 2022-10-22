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
        //pulling data from the database.
        $About = 'SELECT * FROM about';

        //executing the query and then returning the result.
        $this->db->query($About);
        return $this->db->resultSet();
    }
}
