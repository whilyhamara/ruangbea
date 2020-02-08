<div class="box">
    <div class="box-header with-header">
        <h3 class="box-title">Detail Materi</h3>
        <div class="pull-right">
            <a href="<?=base_url()?>materi" class="btn btn-xs btn-flat btn-default">
                <i class="fa fa-arrow-left"></i> Kembali
            </a>
            <?php if ( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
            <a href="<?=base_url()?>materi/edit/<?=$this->uri->segment(3)?>" class="btn btn-xs btn-flat btn-warning">
                <i class="fa fa-edit"></i> Edit
            </a>
        <?php endif; ?>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
<!-- 
                <?php // if(!empty($materi->file)): ?>
                    <div class="w-50">
                        <?// = tampil_media('uploads/bank_soal/'.$materi->file); ?>
                    </div>
                <?php // endif; ?>
                 -->
                <h2 class="text-center">
                    <?=$materi->judul_materi?>    
                <h4 class="text-center">
                    <p>Bidang : <?=$matkul->nama_matkul?></p>     
                </h4>
                </h2>
                <hr class="my-4">                
                <h4><?=$materi->isi_materi ?></h4>
<!--                     
                    <?php // if(!empty($materi->$file)): ?>
                    <div class="w-50 mx-auto">
                        <? //= tampil_media('uploads/bank_soal/'.$materi->$file); ?>
                    </div> -->
                    <?php// endif;?>
                
                <?php// endforeach;?>
                
                <hr class="my-4">
                <strong>Dibuat pada :</strong> 
                <?=strftime("%A, %d %B %Y", date($materi->created_on))?>
                <br>
                <strong>Terkahir diupdate :</strong> 
                <?=strftime("%A, %d %B %Y", date($materi->update_on))?>
            </div>
        </div>
    </div>
</div>