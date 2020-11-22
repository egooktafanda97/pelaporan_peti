<script type="text/javascript">
	const ax = new ajax;
	CKEDITOR.replace( 'editor1' );
	let id__Edit = "";
	$("#file").change(function() {

		$('#ImgLabel').html($(this).val());

	});

	$("#up").click(function() {;
		upImg();
	});

	let upImg = ()=>{
		ax.post_image("<?=base_url('admin/admin/ajax_up_images_news')?>",()=>{
			var form_data = new FormData();
			form_data.append("file", $("#file").prop("files")[0]);
			return form_data;
		},success,errors,success_);
		function success(response){}

		function success_(response){
			let respon = JSON.parse(response);
			console.log(respon.img);
			let html = '<tbody><tr><td><label class="sr-only" for="inlineFormInputGroupUsername">Username</label><div class="input-group"><input type="text" class="form-control" id="inpSS" placeholder="Username" value="<?=base_url('public/imgs')?>/'+respon.img+'"><div class="input-group-prepend"><div class="input-group-text"><button class="btn btn-info btn-sm" id="copyS">Copy</button></div></div></div></td><td style="width: 30%"><img src="<?=base_url('public/imgs')?>/'+respon.img+'" style="width: 100%"></td></tr></tbody>';

			$('#_table').html(html);
		}
		function errors(response){
			console.log(response);		
		}
	};

	$("#entry____").click(function() {
		if($(this).data('id') == 'Simoan'){
			var editor = CKEDITOR.instances.editor1.getData();
			let title = $("#judul").val();
			let html  = $("#editor1").text();
			ax.post_image("<?=base_url('upBerita')?>",()=>{
				var form_data = new FormData();
				form_data.append("title", title);
				form_data.append("thumbnail", $("#inpThm").prop("files")[0]);
				form_data.append("text", editor);
				return form_data;
			},alertSuccess,alertError,debug);
		}else{
			var editor = CKEDITOR.instances.editor1.getData();
			let title = $("#judul").val();
			let html  = $("#editor1").text();
			ax.post_image("<?=base_url('EdBerita')?>",()=>{
				var form_data = new FormData();
				form_data.append("id", id__Edit);
				form_data.append("title", title);
				form_data.append("thumbnail", $("#inpThm").prop("files")[0]);
				form_data.append("text", editor);
				return form_data;
			},alertSuccess,alertError,debug);
			// alertSuccess,alertError,debug);
		}
	});

	$("#inpThm").change(function(){
		$("#thm").text($(this).prop("files")[0].name)
	});
	$("#entry").hide(300);
	$('#anm').html('<button class="btn btn-warning btn-sm float-right swic">Posting</button>');
	$(document).on('click', 'button.swic', function() {
		if($(this).text()== 'Entry'){
			$(this).text('Posting');
			$("#entry").hide(300);
			$("#posting_").show(300);
		}else{
			$("#entry____").attr("data-swc","Simpan");
			$("#entry____").text("Entry");
			$(this).text('Entry');
			$("#entry").show(300);
			$("#posting_").hide(300);
		}
	});
	$(".edit__").click(function() {
		$('#anm').html('<button class="btn btn-warning btn-sm float-right swic">Entry</button>');
		$("#entry").show(300);
		$("#posting_").hide(300);
		let id = $(this).data('id');
		ajx(id);
		id__Edit = $(this).data("id");
		$("#entry____").attr("data-swc","Edit");
		$("#entry____").text("Edit");

	});

	let ajx = (id)=>{
		let data = {
			id : id
		}
		ax.post("<?=base_url('cekBerita')?>",data,scc,error_debug,seccSess);
		function scc(res){}
		function seccSess(res){
			let rss = JSON.parse(res);
			CKEDITOR.instances.editor1.setData(rss.text);
			$("#judul").val(rss.title);

		}
	}

</script>