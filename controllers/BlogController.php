<?php

/**
 * Created by PhpStorm.
 * User: Я
 * Date: 07.05.2017
 * Time: 1:55
 */
class BlogController
{

    public function actionIndex() {

        echo '<h1>List of blog</h1><br/>
           <h3>Heading1</h3>
           <p>Lorem ipsum dolor sit amet, 
           consectetur adipisicing elit.<br/> 
           Adipisci asperiores autem beatae 
           blanditiis culpa, debitis error <br/>
           inventore ipsum itaque iure, magnam</p>
           <a href="#">Read more ></a>
           <h3>Heading2</h3>
           <p>Lorem ipsum dolor sit amet, 
           consectetur adipisicing elit. <br/>
           Adipisci asperiores autem beatae 
           blanditiis culpa, debitis error <br/>
           inventore ipsum itaque iure, magnam</p>
           <a href="#">Read more ></a>';
        return true;
    }

    public function actionView($category, $id){
        echo '<h3>Heading</h3>
           <p>Lorem ipsum dolor sit amet, 
           consectetur adipisicing elit.<br/> 
           Adipisci asperiores autem beatae 
           blanditiis culpa, debitis error <br/>
           inventore ipsum itaque iure, magnam</p>
           <a href="#">< Back</a>';
        echo '<br>'.$category.
            '<br>'.$id;

        return true;
    }
}