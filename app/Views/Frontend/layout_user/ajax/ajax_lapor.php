<script type="text/javascript">
	const ax = new ajax;
	$("#Laporan").hide(300);
	ax.get("<?=base_url('User_controller/dataSesion');?>",response);
	$('#sub').click(function() {
		const data = {
			nik 			: $("[name='nik']").val(),
			nama 			: $("[name='nama']").val(),
			tempat_lahir 	: $("[name='tempat_lahir']").val(),
			tanggal_lahir 	: $("[name='tanggal_lahir']").val(),
			pekerjaan 		: $("[name='pekerjaan']").val(),
			kebangsaan 		: $("[name='kebangsaan']").val(),
			agama 			: $("[name='agama']").val(),
			alamat 			: $("[name='alamat']").val(),
			email 			: $("[name='email']").val(),
			no_hp 			: $("[name='no_hp']").val()
		}
		ax.post("<?=base_url('User_controller/save_data_diri');?>",data,next_step,error_debug,debug);
	});
	function next_step(){
		ax.get("<?=base_url('User_controller/dataSesion');?>",response);
		$("#User").hide(300);
		$("#Laporan").show(300);
	}
	function response(response){
		// console.log(response);
		if(response.status === false){
			$("#sub").html('Next <span class="lnr lnr-arrow-right"></span>');
		}else{
			$("#sub").html('Update & Next <span class="lnr lnr-arrow-right"></span>');
			$("#btl").html('<button class="genric-btn danger medium arrow" id="batal" style="float: right;">Batal</button>');
			$("[name='nik']").val(response.nik);
			$("[name='nama']").val(response.nama);
			$("[name='tempat_lahir']").val(response.tempat_lahir);
			$("[name='tanggal_lahir']").val(response.tanggal_lahir);
			$("[name='pekerjaan']").val(response.pekerjaan);
			$("[name='kebangsaan']").val(response.kebangsaan).niceSelect('update');
			$("[name='agama']").val(response.agama).niceSelect('update');;
			$("[name='alamat']").val(response.alamat);
			$("[name='email']").val(response.email);
			$("[name='no_hp']").val(response.no_hp);
			
			$("#User").hide(300);
			$("#Laporan").show(300);
		}
	}

	$("#batal").click(function() {
		ax.post("<?=base_url('User_controller/save_data_diri');?>",data,next_step,error_debug,debug);
	});

	let beck = ()=>{
		$("#User").show(300);
		$("#Laporan").hide(300);
	};




// google maps Dan Form Laporan===================================================
let map;
var markersArray = [];
let latLong;


function initMap() {
	map = new google.maps.Map(document.getElementById("map"), {
		center: { lat: -0.518512, lng: 101.545023 },
		zoom: 12
	});
	map.addListener('click', function(e) {
		placeMarker(e.latLng, map);
		$("#default-switch")[0].checked = false;
	});
}
function placeMarker(position, map) {
	if (markersArray) {
		for (i in markersArray) {
			markersArray[i].setMap(null);
		}
	}
	var marker = new google.maps.Marker({
		position: position,
		map: map
	});
	map.panTo(position);
	markersArray.push(marker);
	latLong = position.lat()+','+position.lng()
}


$("#default-switch").click(function() {
	if($(this)[0].checked === true){
		navigator.geolocation.getCurrentPosition(showPosition);
		function showPosition(position) {
			let postition = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
			placeMarker(postition, map)
		}
	}else{

	}
});
$("#view").hide();
$("#bukti").change(function() {
	let reader = new FileReader();
	reader.onload = function(){
		var output = document.getElementById('images');
		output.src = reader.result;
	};
	reader.readAsDataURL($(this).prop("files")[0])
	$("#view").show();
});



let sub_lap = ()=>{
	ax.post_image("<?=base_url('User_controller/upload_data')?>",()=>{
		var form_data = new FormData();
		form_data.append("file", $("#bukti").prop("files")[0]);
		form_data.append("masalah", $("#hal").val());
		form_data.append("terduga", $("#terduga").val());
		form_data.append("lokasi", latLong);
		form_data.append("desc", $("#desc").val());
		
		return form_data;
	},success_debug,error_debug,debug);
	// alertSuccess,alertError,debug);
};

ax.get("<?=base_url('User_controller/dataSesionLapor');?>",returnSesLaporan);
function returnSesLaporan(response){
	if(!empty(response)){
		$("#view").show();
		$("#images").attr('src','<?=base_url('public/uploads/')?>/'+response.bukti);
		$("#hal").text(response.masalah);
		$("#terduga").val(response.terduga);
		$("#desc").val(response.deskripsi);

		let lanlong = response.lokasi.split(',');
		let postition = new google.maps.LatLng(lanlong[0],lanlong[1]);
		placeMarker(postition, map);
		let buton = '<button class="genric-btn info medium arrow" id="sub_lap_edit" style="float: right; margin-left: 5px;" onClick="sub_lap_edit()">Edit Laporn <span class="lnr lnr-arrow-right"></span></button>';
		buton += '<button class="genric-btn danger medium arrow" id="sub_lap_batal" style="float: right; margin-left: 5px;">Batal</button>';
		buton += '<button class="genric-btn primary medium " id="Beck" onClick="beck()" style="float: right; margin-left: 5px;"><span class="lnr lnr-arrow-left"></span> Beck</button>';
		$("#exe_").html(buton);
		$(".notif").html("Laporan anda tlah terkirim silakan cek email untuk melihat laporan anda");
	}else{

		let buton = '<button class="genric-btn info medium arrow" id="sub_lap" style="float: right; margin-left: 5px;" onClick="sub_lap()">Kirim Laporn <span class="lnr lnr-arrow-right"></span></button>';
		buton += '<button class="genric-btn primary medium " id="Beck" style="float: right; margin-left: 5px;" onClick="beck()"><span class="lnr lnr-arrow-left"></span> Beck</button>';
		$("#exe_").html(buton);	
	}

		// console.log();
	}

	function sub_lap_edit(){
		ax.post_image("<?=base_url('User_controller/edit_data_lap')?>",()=>{
			var form_data = new FormData();
			form_data.append("file", $("#bukti").prop("files")[0]);
			form_data.append("masalah", $("#hal").val());
			form_data.append("terduga", $("#terduga").val());
			form_data.append("lokasi", latLong);
			form_data.append("desc", $("#desc").val());
			return form_data;
		},alertSuccess,alertError,debug);
	}


// $("#bt").click(function() {
// 	navigator.geolocation.getCurrentPosition(showPosition);
// 	function showPosition(position) {
// 		console.log("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude);
// 	}
// });


// var map;
// var markersArray = [];

// function initialize() {
// 	var haightAshbury = new google.maps.LatLng(37.7699298, -122.4469157);
// 	var mapOptions = {
// 		zoom: 12,
// 		center: haightAshbury,
// 		mapTypeId: google.maps.MapTypeId.TERRAIN
// 	};
// 	map =  new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

// 	google.maps.event.addListener(map, 'click', function(event) {
// 		addMarker(event.latLng);
// 	});
// }

// function addMarker(location) {
// 	marker = new google.maps.Marker({
// 		position: location,
// 		map: map
// 	});
// 	markersArray.push(marker);
// }

// // Removes the overlays from the map, but keeps them in the array
// function clearOverlays() {
// 	if (markersArray) {
// 		for (i in markersArray) {
// 			markersArray[i].setMap(null);
// 		}
// 	}
// }

// // Shows any overlays currently in the array
// function showOverlays() {
// 	if (markersArray) {
// 		for (i in markersArray) {
// 			markersArray[i].setMap(map);
// 		}
// 	}
// }

// Deletes all markers in the array by removing references to them
// function deleteOverlays() {
// 	if (markersArray) {
// 		for (i in markersArray) {
// 			markersArray[i].setMap(null);
// 		}
// 		markersArray.length = 0;
// 	}
// }


</script>