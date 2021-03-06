<?php
/*
Plugin Name: PP Google Analytics Plugin
Plugin URI: http://pl.citizensclimatelobby.org/blog/
Description: Adds a Google analytics tracking code to the <head> of your theme, by hooking to wp_head.
Author: Piotr Podsiadly
Version: 1.0
 */
 function google_analytics() { ?>
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-30226964-3', 'auto');
  ga('send', 'pageview');
</script>
<?php }
add_action( 'wp_head', 'google_analytics', 10 );
?>