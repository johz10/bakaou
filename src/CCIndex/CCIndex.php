    <?php
    /**
    * Standard controller layout.
    *
    * @package BakaouCore
    */
    class CCIndex implements IController {

       /**
        * Implementing interface IController. All controllers must have an index action.
        */
       public function Index() {   
          global $ba;
          $ba->data['title'] = "The Index Controller";
          $ba->data['main'] = "<h1>The Index Controller</h1>";
       }

    } 