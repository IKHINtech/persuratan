<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?= base_url('surat/store') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Tambah Surat</h4>
                </div>
                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Data Surat</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">No Surat : </label>
                                <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="Masukan Nomor Surat" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">Tanggal Surat : </label>
                                <input type="date" name="tanggal_surat" id="tanggal_surat" class="form-control" placeholder="Masukan Tanggal Surat" required="reuqired" />
                            </div>
                        </div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 ">
							<div class="form-group">
								<label for="email">Perihal : </label>
								<input type="text" name="perihal_surat" id="perihal_surat" class="form-control" placeholder="Masukan Perihal Surat" required="reuqired" />
							</div>
						</div>
                        <div class="col-xs-12 col-sm-6 ">
                            <div class="form-group">
                                <label for="telp">Penandatangan : </label>
                                <input type="text" name="penandatangan_surat" id="penandatangan_surat" class="form-control" placeholder="Masukan Penandatangan Surat" required="reuqired" />
                            </div>
                        </div>
					</div>
					<div class="row">
                        <div class="col-xs-12 col-sm-6 ">
							<div class="form-group">
                                <label for="email">Jabatan Penandatangan : </label>
                                <input type="text" name="jabatan_penandatangan" id="jabatan" class="form-control" placeholder="Masukkan Jabatan Penandatangan" required="reuqired" />
                            </div>
                        </div>
						<div class="col-xs-12 col-sm-6 ">
                            <div class="form-group">
                                <label for="email">Unit Kerja : </label>
                                <input type="text" name="unit_kerja" id="unit_kerja" class="form-control" placeholder="Masukan Unit Kejra" required="reuqired" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
