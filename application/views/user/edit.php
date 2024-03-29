<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
	<div class="row">
		<div class="col-lg-8">

			<?= form_open_multipart('user/edit');?>

			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" id="email" value="<?=$user['email']; ?>" readonly>
				</div>
			</div>
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Full Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" id="name" value="<?=$user['name']; ?>">
					<?= form_error('name','<small class="text-danger" pl-3>','</small>'); ?>
				</div>
			</div>
			<div class="col-sm-2">Picture</div>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-3">
						<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
					</div>
					<div class="col-sm-9">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="image" name="image" >
							<label class="custom-file-label" for="image">Choose file</label>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group row justify-content-end"></div>

			<div class="col-sm-10">
				<br>
				<button type="submit" class="btn btn-primary">edit</button>
			</div>
		</div>
	</div>
</form>

</div>
</div>

</div>
</div>

