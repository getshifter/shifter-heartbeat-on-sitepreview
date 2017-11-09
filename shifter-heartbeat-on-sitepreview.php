<?php
/*
Plugin Name: Shifter HeartBeat on SitePreview
Plugin URI: https://github.com/getshifter/shifter-heartbeat-on-sitepreview
Version: 1.0.0
Author: DigitalCube
License: GPLv2 or later
*/

function shifter_heartbert_on_sitepreview_writeScript() {
  if (is_user_logged_in()) {
?>
<script>
function shifter_heartbert_getajax() {
  var xhr= new XMLHttpRequest();
  xhr.open("GET","/wp-admin/admin-ajax.php");
  xhr.send();
}
setInterval("shifter_heartbert_getajax()",60000);
</script>
<?php
  }
}
add_action( 'wp_footer', 'shifter_heartbert_on_sitepreview_writeScript', 999 );
?>
