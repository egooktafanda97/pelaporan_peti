<script type="text/javascript">
	let map;
	function initMap() {
		map = new google.maps.Map(document.getElementById("map"), {
			center: { lat: -0.518512, lng: 101.545023 },
			zoom: 12,
			animation: google.maps.Animation.BOUNCE,
			mapOptions: [{mapTypeID: "satellite"}] 
		});
		let str = "<?=$new['lokasi']?>";
		let lanlong = str.split(',');
		let postition = new google.maps.LatLng(lanlong[0],lanlong[1]);
		marker(postition,map);
		convert_latlng(postition,celback);
		function celback(callback){
			// $("#al").text(callback);
			$("#al").html(callback[3].long_name+" , "+callback[2].long_name+" , "+callback[1].long_name+" , "+callback[0].long_name);
		}
	}
	let marker = (position, map)=>{
		var marker = new google.maps.Marker({
			position: position,
			map: map
		});
		map.panTo(position);
	}

	// merubah geotag menjadi alamat
	let convert_latlng = (pos,getAlamat)=>{
	 // membuat geocoder
	 var geocoder = new google.maps.Geocoder();
	 geocoder.geocode({'latLng': pos}, function(r) {
	 	if (r && r.length > 0) {
	 		return getAlamat(r[0].address_components);
	 	} else {
	 		return getAlamat("Alamat tidak valid");
	 	}
	 });
	}
	(function(){
		$("#msg").hide();
		$('#next_proses').change(function() {
			if($(this).val() == 'Tolak'){$("#msg").show(300)}else{$("#msg").hide();}	
		});
	})();
</script>

