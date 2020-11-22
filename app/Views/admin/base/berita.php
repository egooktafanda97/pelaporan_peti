<script src="<?=base_url('node_modules/ckeditor4/ckeditor.js')?>"></script>
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12" id="anm" style="margin-bottom: 15px;">	
						</div>
						<div class="col-md-12" id="posting_" style="padding: 5px;">
							<div class="col-auto">

								<div class="table-responsive">
									<table class="table center-aligned-table ">
										<thead>
											<tr class="text-primary">
												<th>No</th>
												<th>Judul</th>
												<th>date</th>
												<th>lihat</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $i=1; foreach ($berita as $value) {?>
												<tr>
													<td><?=$i++?></td>
													<td><?=$value->title?></td>
													<td><?=$value->created_at?></td>
													<td><button class="btn btn-info">lihat</button></td>
													<td>
														<button class="btn btn-success edit__" data-id="<?=$value->id?>">Edit</button>
														<a href="<?=base_url('deleteBerita/'.$value->id)?>" class="btn btn-danger">Hapus</a>
													</td>
												</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
								
							</div>

							
						</div>
						<div class="col-md-12 box" id="entry" style="padding: 5px;">
							<div class="col-auto">
								<h5 class="card-title mb-4">Berita
									<span class="float-right">
										<button class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop">Post Image</button>
										<button class="btn btn-primary" id="entry____" data-swc="Simpan">Entry</button>
									</span>
								</h5>
								<hr>
								<label class="sr-only" for="inlineFormInputGroup">Username</label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text">Judul</div>
									</div>
									<input type="text" class="form-control" placeholder="Judul" id="judul">
								</div>
								<div class="custom-file" style="margin-bottom: 10px;">
									<input type="file" class="custom-file-input ImgInp" id="inpThm">
									<label class="custom-file-label" id="thm">Choose file...</label>
								</div>

								<textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
							</div>

							
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Posting Image</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="input-group is-invalid">
					<div class="custom-file">
						<input type="file" class="custom-file-input ImgInp" id="file">
						<label class="custom-file-label" id="ImgLabel">Choose file...</label>
					</div>
					<div class="input-group-append">
						<button class="btn btn-outline-primary" id="up" type="button">Upload</button>
					</div>
				</div>
				<br>
				<div class="box" id="tbll" style="width: 100%">
					<table class="table" id="_table">
						
					</table>
				</div>
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>

