<?php

/**
 * Created by PhpStorm.
 * User: Я
 * Date: 07.05.2017
 * Time: 1:55
 */

include_once ROOT. '/models/Blog.php';

class BlogController
{

    public function actionIndex() {


        $recordsList = array();
        $recordsList = Blog::getRecordsList();

        $reg_date = date("d-M-Y H:i:s", $recordsList['reg_date']);

        print_r($recordsList);

        require_once(ROOT . '/views/blog/index.php');

        return true;
    }

    public function actionView($id){

        if($id) {
            $recordsItem = Blog::getRecordsItemById($id);

            echo '<pre>';
            print_r($recordsItem);
            echo '</pre>';

//            echo 'actionView';
        }

        echo '<a href="/blog">< Back </a>';

        return true;
    }
}