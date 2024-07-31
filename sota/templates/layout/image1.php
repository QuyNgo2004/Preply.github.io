<div class="photoUpload-zone">
	<div style="background:#333; padding: 20px 0;" class="photoUpload-detail" id="photoUpload-preview1"><img class="rounded" src="<?=@$photoDetail?>" onerror="src='assets/images/noimage.png'" alt="Alt Photo"/></div>
	<label class="photoUpload-file" id="photo-zone1" for="file-zone1">
		<input type="file" name="file1" id="file-zone1">
		<i class="fas fa-cloud-upload-alt"></i>
		<p class="photoUpload-drop">Kéo và thả hình vào đây</p>
		<p class="photoUpload-or">hoặc</p>
		<p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
	</label>
	<div class="photoUpload-dimension"><?=@$dimension?></div>
</div>