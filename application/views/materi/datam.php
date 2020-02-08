<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?=$subjudul?></h3>
        <!-- 
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
         -->
    </div>
    <div class="box-body">
		<div class="row">
        	<div class="col-sm-4">
				<?php if ( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
				<button type="button" onclick="bulk_delete()" class="btn btn-flat btn-sm bg-red"><i class="fa fa-trash"></i> Bulk Delete</button>
				<?php endif; ?>
			</div>
			<div class="col-sm-8">
				<div class="pull-right">
					<?php if ( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
					<a href="<?=base_url('materi/add')?>" class="btn bg-purple btn-flat btn-sm right">
						<i class="fa fa-plus"></i> 
						Buat Materi
					</a>
					<?php endif; ?>

					<button type="button" onclick="reload_ajax()" class="btn btn-flat btn-sm bg-maroon right">
						<i class="fa fa-refresh"></i> 
						Reload
					</button>
				</div>
			</div>
		</div>
    </div>
	<?=form_open('materi/delete', array('id'=>'bulk'))?>
    <div class="table-responsive px-4 pb-3" style="border: 0">
        <table id="materi" class="w-100 table table-striped table-bordered table-hover">
        <thead>
            <tr>
            	<?php if ( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) { ?>
				<th class="text-center">
					<input type="checkbox" class="select_all">
				</th>
				<?php } else (!$this->ion_auth->is_admin() || !$this->ion_auth->in_group('dosen') ) ?>
				<th class="text-center">
					<input type="checkbox" class="select_all" disabled>
				</th>
				<?php ?>
                <th width="25">No.</th>
                <th>Bidang</th>
                <th>Judul Materi</th>
				<th>Tgl Dibuat</th>
				<th class="text-center">Aksi</th>
            </tr>        
        </thead>
        <tfoot>
            <tr>
            	<?php if ( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) { ?>
				<th class="text-center">
					<input type="checkbox" class="select_all">
				</th>
				<?php } else (!$this->ion_auth->is_admin() || !$this->ion_auth->in_group('dosen') ) ?>
				<th class="text-center">
					<input type="checkbox" class="select_all" disabled>
				</th>
				<?php ?>
                <th width="25">No.</th>
                <th>Bidang</th>
                <th>Judul Materi</th>
				<th>Tgl Dibuat</th>
				<th class="text-center">Aksi</th>
            </tr>
        </tfoot>
        </table>
    </div>
	<?=form_close();?>
</div>
<?php if ( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
<script src="<?=base_url()?>assets/dist/js/app/materi/data.js"></script>
<?php endif; ?>
<script src="<?=base_url()?>assets/dist/js/app/materi/datam.js"></script>
<?php if ( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
<script type="text/javascript">
$(document).ready(function(){
	$('#matkul_filter').on('change', function(){
		let id_matkul = $(this).val();
		let src = '<?=base_url()?>materi/data';
		let url;

		if(id_matkul !== 'all'){
			let src2 = src + '/' + id_matkul;
			url = $(this).prop('checked') === true ? src : src2;
		}else{
			url = src;
		}
		table.ajax.url(url).load();
	});
});
</script>
<?php endif; ?>
<?php if ( $this->ion_auth->logged_in() ) : ?>
<script type="text/javascript">
$(document).ready(function(){
	let id_matkul = '<?=$matkul->id_matkul?>';
	let src = '<?=base_url()?>materi/data';
	let url = src + '/' + id_matkul;

	table.ajax.url(url).load();
});
</script>
<?php endif; ?>