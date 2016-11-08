<?php

add_filter('widget_text', 'do_shortcode');

function raleigh_footer_js() { ?>
	<!-- Quantcast Tag -->
	<script type="text/javascript">
	var _qevents = _qevents || [];

	(function() {
	var elem = document.createElement('script');
	elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
	elem.async = true;
	elem.type = "text/javascript";
	var scpt = document.getElementsByTagName('script')[0];
	scpt.parentNode.insertBefore(elem, scpt);
	})();

	_qevents.push({
	qacct:"p-69zIWcWF__1G-"
	});
	</script>

	<noscript>
	<div style="display:none;">
	<img src="//pixel.quantserve.com/pixel/p-69zIWcWF__1G-.gif" border="0" height="1" width="1" alt="Quantcast"/>
	</div>
	</noscript>
	<!-- End Quantcast tag -->

	<!-- Newscurve -->
	<script type="text/javascript">
	var npc = npc || [];
	npc.push(['_customerId', '9a267929255567ae4a23']);

	(function() {
	  var nc = document.createElement('script'); nc.type = 'text/javascript'; nc.async = true;
	  nc.src = 'http://t.neodatagroup.com/npc.js';
	  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(nc, s);
	})();
	</script>
	<!-- End Newscurve -->

<?php
}
add_action( 'wp_footer', 'raleigh_footer_js' );