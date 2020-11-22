<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
	CKEDITOR.replace( 'editor2' );
	CKEDITOR.replace( 'editor3' );

	$(document).ready(function() {
		const tx1 =  `<?=$q->visi?>`;
		const tx2 =  `<?=$q->misi?>`;
		const tx3 =  `<?=$q->sejarah?>`;

		CKEDITOR.instances.editor1.setData(tx1);
		CKEDITOR.instances.editor2.setData(tx2);
		CKEDITOR.instances.editor3.setData(tx3);
	});

</script>