<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-block">
                <h4 class="card-title float-left">Data Surat</h4>
                <div class="d-inline ml-auto float-right">
                    <a href="<?= base_url('surat/create') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped datatable">
                        <thead>
							<th>No</th>
                            <th>No Surat</th>
                            <th width="30%">Tanggal Surat</th>
                            <th>Perihal</th>
							<th>QR Code</th>
                            <th>Aksi</th>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <?php foreach($surat as $i => $s): ?>
                                <tr>
                                    <td><?= $i+1 ?></td>
                                    <td><?= $s->no_surat?></td>
                                    <td><?= $s->tanggal_surat?></td>
                                    <td><?= $s->perihal_surat?></td>
									<td><img style="width: 100px;" src="<?= base_url().'assets/qr_code/'.$s->qrcode?>"></td>
                                    <td>
										<a href="<?= base_url('surat/generate_qr/' . $s->id) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Generate QR</a>
                                        <a href="<?= base_url('surat/edit/' . $s->id) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?= base_url('surat/destroy/' . $s->id) ?>" class="btn btn-danger btn-sm btn-delete ml-2" onclick="return false"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
