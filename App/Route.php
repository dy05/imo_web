<?php

namespace WatatApp\App;


/**
 * Class Route
 */
class Route
{
    private $path;
    private $callable;
    private $matches = [];
    private $params = [];

    public function __construct($path, $callable)
    {
        $this->path = trim($path, '/');
        if(empty($this->path)) {
            $this->path = 'home';
        }
        $this->callable = $callable;
    }

    public function url()
    {
        return $this->path;
    }

    public function match($url)
    {
        $parts = explode('/', $url);
        $path = explode(':', $this->path);
        if(count($parts) > 1){
            if(count($parts) > 2 && trim($path[0], '/') === $parts[0].'/'.$parts[1]) {
                return true;
            }
            if(trim($path[0], '/') === $parts[0]) {
                return true;
            }
        }
        return $this->path === $url || substr($url, 1) === $this->path;
    }

    public function matched($url)
    {

        $path = preg_replace_callback('#:([\w]+)#', [$this, 'paramMatch'], $this->path);
        $regex = "#^$path#i";

        if(!preg_match($regex, $url, $matches)) {
            return false;
        }
        if (count(explode('/', $url)) < 2){
            return $this->path === $url;
        }

        array_shift($matches);
        $this->matches = $matches;
        return true;
    }

    public function paramMatch($match)
    {
        if(isset($this->params[$match[1]])) {
            return '(' . $this->params[$match[1]] . ')';
        }
        return '([^/]+)';
    }

    public function getUrl($params)
    {
        $path = $this->path;
        foreach ($params as $key => $value) {
            $path = str_replace(":$key", $value, $path);
        }
        return $path;
    }

    public function call($data  = null)
    {
        if(is_string($this->callable)){
            $params = explode('@', $this->callable);
            $controller = 1 === 1 ? $params[0] : $params[0].'Controller';
            $controller = "WatatApp\\Controllers\\".$controller;
            $controller = new $controller();
            if($data === null){
                return call_user_func([$controller, $params[1]]);
            }
            return call_user_func([$controller, $params[1]], $data);
        }else{
            return call_user_func_array($this->callable, $this->matches);
        }
    }

    public function with($param, $regex)
    {
        $this->params[$param] = str_replace('(', '(?:', $regex);
        return $this;
    }

}