<div class="box">
    <div class="box-header with-header">
        <h3 class="box-title">Detail Materi</h3>
        <div class="pull-right">
            <a href="<?=base_url()?>materi" class="btn btn-xs btn-flat btn-default">
                <i class="fa fa-arrow-left"></i> Kembali
            </a>
            <a href="<?=base_url()?>materi/edit/<?=$this->uri->segment(3)?>" class="btn btn-xs btn-flat btn-warning disabled">
                <i class="fa fa-edit"></i> Edit
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="text-center">Materi</h3>
<!-- 
                <?php // if(!empty($materi->file)): ?>
                    <div class="w-50">
                        <?// = tampil_media('uploads/bank_soal/'.$materi->file); ?>
                    </div>
                <?php // endif; ?>
                 -->
                <h2>
                <?=$materi->judul_materi?>    
                </h2>
                <hr class="my-4">
                <h3 class="text-center">Deskripsi</h3>
                
                <?php 
                // $abjad = ['a'];
                // //$benar = "<i class='fa fa-check-circle text-purple'></i>";
                
                // foreach ($abjad as $abj) :
                
                //     $ABJ = strtoupper($abj);
                //     $opsi = 'opsi_'.$abj;
                    // $file = 'file_'.$;
                ?>
                
                    <h4><?=$materi->isi_materi ?></h4>
<!--                     
                    <?php // if(!empty($materi->$file)): ?>
                    <div class="w-50 mx-auto">
                        <? //= tampil_media('uploads/bank_soal/'.$materi->$file); ?>
                    </div> -->
                    <?php// endif;?>
                
                <?php// endforeach;?>
                
<!--                 <hr class="my-4">
                <strong>Dibuat pada :</strong> 
                <? // =strftime("%A, %d %B %Y", date($materi->created_on))?>
                <br>
                <strong>Terkahir diupdate :</strong> 
                <? //=strftime("%A, %d %B %Y", date($materi->update_on))?> -->
            </div>
        </div>
    </div>
</div>