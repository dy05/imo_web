<?php

namespace WatatApp\Controllers;


use WatatApp\Models\Article;
use WatatApp\Models\User;

class PagesController extends Controller
{
    public function home()
    {
//        $this->redirectIfNotConnect();
//        $_SESSION['auth'] = 1;
//        $user = User::find(1);
//        echo "<pre>";
//        printf($user);
//        echo "</pre>";
//        die();
        $this->isUserCookie();
//        $this->redirectIfNotConnect();
        $this->render('home.php', [
            'page_name' => 'home'
        ]);
    }

    public function contact()
    {
        $this->isUserCookie();
        $this->render('layouts/app.php', [
            'page_name' => 'contact'
        ]);
    }

    public function blogs($id = null)
    {
        $this->isUserCookie();
        $error = null;
        if($id === null){
            $blogs = Article::findAll();
            $page = 'blogs';
        }else{
            // pour convertir en int
            $id = $id + 0;
            $blog = Article::find($id);
            if(!$blog){
                $error = true;
            }
            $page = 'blog';
        }

        $this->render($page.'.php', [
            'page_name' => 'blogs',
            $page   =>  ${$page},
            'error' => $error
        ]);
    }

    public function editblog($id)
    {
        var_dump($id);
        die();
        $this->render($page.'.php', [
            'page_name' => 'blogs',
            $page   =>  ${$page},
            'error' => $error
        ]);
    }

    public function deleteblog($id)
    {
        echo Article::$_table;
        die();
        $action = Article::delete($id, 'articles');
        $this->render('blogs.php', [
            'page_name' => 'blogs',
            'blogs' => Article::findAll(),
            'alert' => 'Article supprime avec succes'
        ]);
    }

}
