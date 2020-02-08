<div class="row">
    <div class="col-sm-12">    
        <?=form_open_multipart('materi/saver', array('id'=>'formmateri'), array('method'=>'edit', 'id_materi'=>$materi->id_materi));?>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?=$subjudul?></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="row">
                            <div class="form-group col-sm-12">
                            <label>Materi (Mata Kuliah)</label>
                            <?php echo $materi->matkul_id; ?>
                            <select name="matkul_id" required="required" id="matkul_id" class="select2 form-group" style="width:100%">
                                <?php 
                                    foreach ($matkul as $e) {
                                        echo "<option value='$e->id_matkul' ";
                                        echo $e->id_matkul==$materi->matkul_id?'selected="selected"':'';
                                        echo ">$e->nama_matkul</option>";
                                    }
                                 ?>
                                <!-- <option value="<?=$matkulis->matkul_id?>" disabled selected>
                                    <?=$matkulis->nama_matkul?>
                                </option> -->
<!--                                 <option value="" disabled selected>
                                    <?=$matkulis->nama_matkul?>
                                </option>
                            <?php //foreach ($matkul as $d) : ?>
                                <option value="<?=$d->id_matkul?>">
                                    <?=$d->nama_matkul?>
                                </option> -->
                            <?php //endforeach; ?>
                            </select>
                            <small class="help-block" style="color: #dc3545"><?=form_error('matkul_id')?></small>
                        </div>
                            
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="judul_materi" class="control-label">
                                    Judul
                                </label>
                                <textarea name="judul_materi" id="judul_materi" class="form-control froala-editor" value="" ><?=$materi->judul_materi?>
                                    
                                </textarea>
                                <small class="help-block" style="color: #dc3545"><? =form_error('judul_materi')?></small>
                            </div>
                            <div class="form-group">
                                <label>Isi Materi</label>
                                <textarea name="isi_materi" id="isi_materi" class="form-control froala-editor">
                                    <?=$materi->isi_materi?>
                                </textarea>
                                <small class="help-block" style="color: #dc3545"><? =form_error('isi_materi')?></small>
                            </div>
                        </div>

                            <div class="col-sm-12">
                                <div class="form-group pull-right">
                                    <a href="<?=base_url('materi')?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                                    <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?=form_close();?>
    </div>
</div>