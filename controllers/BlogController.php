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


        echo '<pre>';
        print_r($recordsList);
        echo '</pre>';

        echo '<a href="#">Read more ></a>';

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

        echo '<a href="#">< Back </a>';

        return true;
    }
}