<div class="row">
    <div class="col-sm-12">    
        <?=form_open_multipart('materi/save', array('id'=>'formmateri'), array('method'=>'add'));?>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?=$subjudul?></h3>            
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-group col-sm-12">
                            <label>Materi (Mata Kuliah)</label>
                            <?php if( $this->ion_auth->is_admin() ) : ?>
                                <!-- select dosen_id -->
                            <select name="matkul_id" required="required" id="matkul_id" class="select2 form-group" style="width:100% !important">
                                <option value="" disabled selected>Pilih Mata Kuliah</option>
                                <!-- foreach $dosen as $d -->
                                <?php foreach ($matkul as $d) : ?>
                                    <!-- <option value="<?=$d->id_dosen?>:<?=$d->matkul_id?>"><?=$d->nama_dosen?> (<?=$d->nama_matkul?>)</option> -->
                                    <option value="<?=$d->id_matkul?>"><?=$d->nama_matkul?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="help-block" style="color: #dc3545"><?=form_error('matkul_id')?></small>
                            <?php else : ?>
                            <!-- <input type="hidden" name="dosen_id" value="<?=$dosen->id_dosen;?>"> -->
                            <!-- <input type="hidden" name="matkul_id" value="<?=$dosen->matkul_id;?>"> -->
                            <!-- <input type="text" readonly="readonly" class="form-control" value="<?=$dosen->nama_dosen; ?> (<?=$dosen->nama_matkul; ?>)"> -->
                            <?php endif; ?>
                        </div>
                        
                        <div class="col-sm-12">
                            <label for="judul_materi" class="control-label">Judul</label>
                            <div class="form-group">
                                <textarea name="judul_materi" id="judul_materi" class="form-control froala-editor"><?=set_value('judul_materi')?></textarea>
                                <small class="help-block" style="color: #dc3545"><? =form_error('judul_materi')?></small>
                            </div>
                            <label>Isi Materi</label>
                            <div class="form-group">
                                <textarea name="isi_materi" id="isi_materi" class="form-control froala-editor"><?=set_value('isi_materi')?></textarea>
                                <small class="help-block" style="color: #dc3545"><? =form_error('isi_materi')?></small>
                            </div>
                        </div>
                        
                        <!-- Submitted -->
                        <div class="form-group pull-right">
                            <a href="<?=base_url('materi')?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                            <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?=form_close();?>
    </div>
</div>