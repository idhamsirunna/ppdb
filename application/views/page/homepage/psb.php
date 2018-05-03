
<div class="container-fluid" style=" background-color: #eff2f4">
	<div class="panel-heading"  style="margin-top: 6%; text-align: center; ">
		<h1>Form Pendaftaran Siswa Baru</h1>
		<h4>Tahun Ajaran 2018/2019</h4>
	</div>
	<hr style="border-top: 3px solid #8c8b8b;">
	<div class="row" style="margin-top: 2.5%;">
		<div class="col-md-4 col-xs-12">
		<?php echo form_open_multipart('homepage/psb_create'); ?>
		  	<div class="form-group">
				
			    <label>Nama Lengkap</label>
			    <input type="text" class="form-control" placeholder="" name="registration_full_name">
		  	</div>
		  	<div class="form-group">
			    <label>Tempat/Tgl Lahir</label>
			    <input type="text" class="form-control" placeholder="" name="registration_place_birthdate">
		  	</div>
		  	<div class="form-group">
			    <label>Alamat Lengkap</label>
			    <textarea class="form-control" rows="3" name="registration_address"></textarea>
		  	</div>
		  	<div class="form-group">
			    <label>No Telp</label>
			    <input type="text" class="form-control" placeholder="" name="registration_numphone">
		  	</div>
		  	<div class="form-group">
			    <label>Nama Ayah</label>
			    <input type="text" class="form-control" placeholder="" name="registration_father_name">
		  	</div>
		  	<div class="form-group">
			    <label>Nama Ibu</label>
			    <input type="text" class="form-control" placeholder="" name="registration_mother_name">
		  	</div>	  	
		</div>


		<div class="col-md-4 col-xs-12">
			<div class="form-group">
			    <label>Tingkat Pendidikan</label>
			    <select class="form-control" id="pendidikan" name="registration_edu_level">
			    	<option></option>
			    	<option value="SD">SD</option>
			    	<option value="SMP">SMP</option>
			    	<option value="SMA">SMA</option>
			    </select>
		  	</div>
			<div class="form-group">
				<label>Asal Sekolah</label>
				<input type="text" class="form-control" name="" id="asalSekolah" name="registration_school">
			</div>
			<div class="form-group">
				<label>Nomor Ijazah</label>
				<input type="text" class="form-control" name="" id="nomorIjazah" name="registration_ijasah_number">
			</div>
			<div class="form-group">
				<label>Foto 1</label>
				<input type="file" class="form-control" name="registration_pict1">
			</div>			
			<div class="form-group">
				<label>Foto 2</label>
				<input type="file" class="form-control" name="registration_pict2">
			</div>
			<div class="form-group">
				<label>Scan Ijazah</label>
				<input type="file" class="form-control" name="registration_ijasah_scan">
			</div>
			<div class="form-group">
				<label>Scan Doc</label>
				<input type="file" class="form-control" name="registration_doc">
			</div>
			<input type="submit" class="btn btn-success btn-default" style="float: right;" value="Submit" name="m_psb">
			<?php echo form_close(); ?>	
		</div><!--col-md-4-->
		<div class="col-md-4" style="padding: 5%;">
			<h5><b>Keterangan</b></h5>
			<p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>
	</div><!--row-->
</div>
<script src="<?php echo base_url(); ?>assets/homepage/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
	$("#pendidikan").change(function() {
		if (this.value=="SD") {
			$("#asalSekolah").attr("disabled", true);
    		$("#nomorIjazah").attr("disabled", true);	
		} else{
			$("#asalSekolah").attr("disabled", false);
    		$("#nomorIjazah").attr("disabled", false);
		}
    	
});
</script>
