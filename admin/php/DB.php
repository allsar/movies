<?php
class DB {
    public function getDB()
    {
        return new  mysqli("localhost", "root", "", "movies");
    }
}


?>