<?php

namespace WatatApp\Controllers;


use WatatApp\Models\User;

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->redirectIfNotConnect();
    }

    public function techniciens()
    {
        $users = User::findAll();
        $this->render('techniciens.php', [
            'page_name' => 'techniciens'
        ]);
    }

    public function techniciensadd()
    {
        var_dump('hello lolo');
        die();
        $user = User::find($this->session['auth']);
        $this->render('index.php', [
            'page_name' => 'homepage'
        ]);
    }

}