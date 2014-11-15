<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo (empty($title) ? '' : $title . ' - ') . TITLE; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- styles -->            
        <link href="<?php echo ASSETS_TEMPLATE; ?>_deploy/style.min.css" rel="stylesheet">
        <!-- end style -->
    </head>

    <body>

	<div class="bh-sl-container">
		<div class="bh-sl-form-container">
			<form id="bh-sl-user-location" method="post" action="#">
				<div class="form-input">
					<label for="bh-sl-address">Enter Address or Zip Code:</label>
					<input type="text" id="bh-sl-address" name="bh-sl-address" />
				</div>

				<button id="bh-sl-submit" type="submit">Submit</button>
			</form>
		</div>

		<div id="map-container" class="bh-sl-map-container">
			<div class="bh-sl-loc-list">
				<ul class="list"></ul>
			</div>
			<div id="bh-sl-map" class="bh-sl-map"></div>
		</div>
	</div>

	<?php empty($page) ? '' : $this->load->view($page); ?>

    </body>

	<!-- javascript -->
	<script src="<?php echo ASSETS_TEMPLATE; ?>_source/js/libs/jquery-1.11.1.min.js"></script>
	<script src="<?php echo ASSETS_TEMPLATE; ?>_source/js/libs/handlebars.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo ASSETS_TEMPLATE; ?>_source/js/libs/jquery.storelocator.js"></script>
	<script>
		$(function() {
			$('#map-container').storeLocator({
				catMarkers : {
					'Restaurant' : ['templates/assets/img/red-marker.png', 32, 32],
					'Cafe' : ['templates/assets/img/blue-marker.png', 32, 32]
				}
			});
		});
	</script>
	<!-- end javascript-->

</html>