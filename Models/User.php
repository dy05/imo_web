<?php

namespace WatatApp\Models;


class User extends Db
{


    public static function setTable()
    {
        self::$_table = 'techniciens';
    }


    public static function findAll($datas = [], $keys = null, $one = false)
    {
        //Pour mettre la table automatique;
        self::setTable();
        if ($keys === null){
            $keys = '*';
        }

        if (!empty($datas)){
            $sqlend = '';
            foreach ($datas as $key => $data) {
                $sqlend .= " $key = :$key AND";
            }
            $sqlend = substr($sqlend, 0, -4);
        }

//        $sql = 'SELECT ' . $keys . ' FROM ' . self::$_table;
        $sql = 'SELECT techniciens.*, quartier.NOM_QR AS QUARTIER_TECH FROM ' . self::$_table.' LEFT JOIN quartier on techniciens.ID_QR = quartier.ID_QR';
        // Au cas ou ce sont les informations de l'administrateur
        if(!array_key_exists('ID_TECH', $datas)){
            if(isset($_SESSION['auth'])){
                $sql .= ' WHERE ID_TECH != :actif_user';
                if($_SESSION['auth'] !== 1){
                    $sql .= ' AND ID_TECH != 1';
                }
                $datas = array_merge($datas, ['actif_user' => $_SESSION['auth']]);
            }
            if(isset($sqlend)) {
                $sql .= $sqlend;
            }
            $result = self::staticquery($sql, $datas, $one);
        }else {
            // Au cas ou ce sont les informations de l'administrateur
            if ($datas['ID_TECH'] === 1) {
                $result = self::staticquery('SELECT techniciens.*, quartier.NOM_QR AS QUARTIER_TECH FROM ' . self::$_table.' LEFT JOIN quartier on techniciens.ID_QR = quartier.ID_QR WHERE ID_TECH = 1', [], true);
//                $result = self::staticquery('SELECT ' . $keys . ' FROM ' . self::$_table . ' WHERE ID_TECH = 1', [], true);
            } else {
                $sql .= ' WHERE' . $sqlend;
                $result = self::staticquery($sql, $datas, $one);
            }
        }
        return $result;
    }

    public static function findiAll($datas = [], $keys = null, $one = false)
    {
        //Pour mettre la table automatique;
        self::setTable();
        if ($keys === null){
            $keys = '*';
        }

        if (!empty($datas)){
            $sqlend = '';
            foreach ($datas as $key => $data) {
                $sqlend .= " $key = :$key AND";
            }
            $sqlend = substr($sqlend, 0, -4);
        }

        $sql = 'SELECT ' . $keys . ' FROM ' . self::$_table;
        // Au cas ou ce sont les informations de l'administrateur
        if(!array_key_exists('id', $datas)){
            if(isset($_SESSION['auth'])){
                $sql .= ' WHERE id != :actif_user';
                if($_SESSION['auth'] !== 1){
                    $sql .= ' AND id != 1';
                }
                $datas = array_merge($datas, ['actif_user' => $_SESSION['auth']]);
            }
            if(isset($sqlend)) {
                $sql .= $sqlend;
            }
            $result = self::staticquery($sql, $datas, $one);
        }else {
            // Au cas ou ce sont les informations de l'administrateur
            if ($datas['id'] === 1) {
                $result = self::staticquery('SELECT ' . $keys . ' FROM ' . self::$_table . ' WHERE id = 1', [], true);
            } else {
                $sql .= ' WHERE' . $sqlend;
                $result = self::staticquery($sql, $datas, $one);
            }
        }
        return $result;
    }


    public static function find($datas, $keys = '*')
    {
        if(is_string($datas) || is_integer($datas)){
            return self::findAll(['ID_TECH' => $datas], $keys, true);
        }
        return self::findAll($datas, $keys, true);
    }

}