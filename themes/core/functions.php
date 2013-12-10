    <?php
    /**
    * Helpers for the template file.
    */
    $ba->data['header'] = '<h1>Header: Bakaou</h1>';
    $ba->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
    $ba->data['footer'] = '<p>Footer: &copy; Lydia by Mikael Roos (mos@dbwebb.se)</p>';


    /**
    * Print debuginformation from the framework.
    */
    function get_debug() {
      $ba = CBakaou::Instance();
      $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($ba->config, true)) . "</pre>";
      $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($ba->data, true)) . "</pre>";
      $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($ba->request, true)) . "</pre>";
      return $html;
    }