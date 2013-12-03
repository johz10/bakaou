    <?php
    /**
    * Helpers for the template file.
    */
    $sa->data['header'] = '<h1>Header: Samir</h1>';
    $sa->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
    $sa->data['footer'] = '<p>Footer: &copy; Lydia by Mikael Roos (mos@dbwebb.se)</p>';


    /**
    * Print debuginformation from the framework.
    */
    function get_debug() {
      $sa = CSamir::Instance();
      $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($sa->config, true)) . "</pre>";
      $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($sa->data, true)) . "</pre>";
      $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($sa->request, true)) . "</pre>";
      return $html;
    }