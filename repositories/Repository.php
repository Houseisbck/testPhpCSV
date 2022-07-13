<?php

class Repository {
    protected $db = null;

    public function __construct() {
        $this->db = DB::connToDB();
    }
}