<?php

class Usermodel extends CI_Model
{
    public function getUsers()
    {
        return [
            [
                'firstname' => 'First Name 1',
                'lastname' => 'Last Name 1'
            ],
            [
                'firstname' => 'First Name 2',
                'lastname' => 'Last Name 2'
            ],
            [
                'firstname' => 'First Name 3',
                'lastname' => 'Last Name 3'
            ],


        ];
    }
}