<?php

/**
 * Created by PhpStorm.
 * User: Я
 * Date: 09.05.2017
 * Time: 5:52
 */



class Blog
{


    public static function getRecordsItemById($id){
        $id =  intval($id);

        if ($id) {
            $db = Database::getConnection();
            $result = $db->query('SELECT * FROM `blog_records` WHERE `id` ='.$id)
            or die(mysqli_error($link));
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $recordsItem = $result->fetch();

            return $recordsItem;
//            return $result;
        }
    }

    public static function getRecordsList() {
        $db = Database::getConnection();

        $recordsList=array();
        $result = $db->query('SELECT * FROM `blog_records`'
            . 'ORDER BY reg_date DESC');

        $i = 0;
        while ($row = $result->fetch()) {
            $recordsList[$i] ['id'] = $row['id'];
            $recordsList[$i] ['name'] = $row['name'];
            $recordsList[$i] ['content'] = $row['content'];
            $recordsList[$i] ['reg_date'] = $row['reg_date'];
            $i++;
        }

        return $recordsList;

    }

}