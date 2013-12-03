    <?php
    /**
    * Standard controller layout.
    *
    * @package SamirCore
    */
    class CCIndex implements IController {

       /**
        * Implementing interface IController. All controllers must have an index action.
        */
       public function Index() {   
          global $sa;
          $sa->data['title'] = "The Index Controller";
          $sa->data['main'] = "<h1>The Index Controller</h1>";
       }

    } 