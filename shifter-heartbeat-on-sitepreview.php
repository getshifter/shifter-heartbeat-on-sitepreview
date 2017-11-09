<?php
/*
Plugin Name: Shifter HeartBeat on SitePreview
*/

function shifter_heartbert_on_sitepreview_writeScript() {
  if (is_user_logged_in()) {
  echo '
  <script>
  function shifter_heartbert_getajax() {
    var xhr= new XMLHttpRequest();
    xhr.open("GET","/wp-admin/admin-ajax.php");
    xhr.send();
    }
  setInterval("shifter_heartbert_getajax()",60000);
  </script>
  ';
  }
}
add_action( 'wp_footer', 'shifter_heartbert_on_sitepreview_writeScript', 999 );

?>
