<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthControllerTest extends \TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /*public function testExample()
    {
        $this->assertTrue(true);
    }*/

    public function testLogin(){

      $data = [
        'username'=>'emtudo',
        'password'=>bcrypt('emtudo123')
      ];

      $this->post('auth/login', $data);
      $this->seeStatusCode(200);
      $this->seeJson(['username'=>'emtudo']);
    }
}
