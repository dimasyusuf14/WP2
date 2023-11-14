<?= $this->extend('layout/dash') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-8">

            <form action="<?= route_to('admin.siswa.store') ?>" class="card" autocomplete="off" method="post" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="POST">
                <?= csrf_field() ?>

                <div class="card-header p-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="ml-2 py-1">Form Tambah Siswa</span>
                    </div>
                </div>

                <div class="card-body">

                    <div class="alert alert-default-warning alert-dissmissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Perhatian!</strong> <br>
                        <small>Form dengan tanda <span class="text-danger">*</span> wajib diisi.</small><br>
                        <small>Password akan dibuat otomatis sesuai dengan nomer induk.</small>
                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6">
                            <label for="first_name" wajib>Nama Awalan</label>

                            <input type="text" name="first_name" id="first_name" class="form-control <?= validation_show_error('first_name') ? 'is-invalid' : '' ?>" value="<?= old('first_name') ?>" placeholder="Masukkan Nama Awal Siswa">

                            <div class="invalid-feedback d-block">
                                <?= validation_show_error('first_name') ?>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="last_name" wajib>Nama Akhiran</label>

                            <input type="text" name="last_name" id="last_name" class="form-control <?= validation_show_error('last_name') ? 'is-invalid' : '' ?>" value="<?= old('last_name') ?>" placeholder="Masukkan Nama Akhir Siswa">

                            <div class="invalid-feedback d-block">
                                <?= validation_show_error('last_name') ?>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="id_number" wajib>Nomer Induk Siswa</label>

                            <input type="text" name="id_number" id="id_number" class="form-control <?= validation_show_error('id_number') ? 'is-invalid' : '' ?>" value="<?= old('id_number') ?>" placeholder="Masukkan Nomer Induk Siswa">

                            <div class="invalid-feedback d-block">
                                <?= validation_show_error('id_number') ?>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="email" wajib>Email</label>

                            <input type="email" name="email" id="email" class="form-control <?= validation_show_error('email') ? 'is-invalid' : '' ?>" value="<?= old('email') ?>" placeholder="Masukkan Alamat Email Siswa">

                            <div class="invalid-feedback d-block">
                                <?= validation_show_error('email') ?>
                            </div>
                        </div>
                    </div>

                    <!-- update tanggal lahir -->
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="birth_date" wajib>Tanggal Lahir</label>

                            <input type="date" name="birth_date" id="birth_date" class="form-control <?= validation_show_error('birth_date') ? 'is-invalid' : '' ?>" value="<?= old('birth_date') ?>" placeholder="Masukkan Tanggal Lahir">

                            <div class="invalid-feedback d-block">
                                <?= validation_show_error('birth_date') ?>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="birth_place" wajib>Tempat lahir</label>

                            <input type="text" name="birth_place" id="birth_place" class="form-control <?= validation_show_error('birth_place') ? 'is-invalid' : '' ?>" value="<?= old('birth_place') ?>" placeholder="Masukkan Tempat Lahir">

                            <div class="invalid-feedback d-block">
                                <?= validation_show_error('birth_place') ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6">
                            <label for="address" wajib>Alamat</label>

                            <input type="text" name="address" id="address" class="form-control <?= validation_show_error('address') ? 'is-invalid' : '' ?>" value="<?= old('address') ?>" placeholder="Masukkan Tempat Lahir">

                            <div class="invalid-feedback d-block">
                                <?= validation_show_error('address') ?>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label>Jenis Kelamin</label>

                            <div class="d-flex align-items-center">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="radio" name="gender" id="laki_laki" value="laki_laki" <?= selected_option(old('gender'), 'laki_laki') ?>>
                                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="perempuan" value="perempuan" <?= selected_option(old('gender'), 'perempuan') ?>>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="religion" wajib>Agama</label>

                            <select id="religion" name="religion" class="custom-select <?= validation_show_error('religion') ? 'is-invalid' : '' ?>">
                                <option value="" disabled selected>Silahkan pilih</option>

                                <option <?= selected_option(old('religion'), 'islam') ?> value="islam">Islam</option>
                                <option <?= selected_option(old('religion'), 'kristen') ?> value="kristen">Kristen</option>
                                <option <?= selected_option(old('religion'), 'katolik') ?> value="katolik">Katolik</option>
                                <option <?= selected_option(old('religion'), 'budha') ?> value="budha">Budha</option>
                                <option <?= selected_option(old('religion'), 'hindu') ?> value="hindu">Hindu</option>
                                <option <?= selected_option(old('religion'), 'protestan') ?> value="protestan">Protestan</option>
                                <option <?= selected_option(old('religion'), 'konghucu') ?> value="konghucu">Konghucu</option>
                            </select>

                            <div class="invalid-feedback d-block">
                                <?= validation_show_error('religion') ?>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="classroom_id" wajib>Kelas</label>

                            <select name="classroom_id" id="classroom_id" class="custom-select <?= validation_show_error('classroom_id') ? 'is-invalid' : '' ?>">
                                <option value="" disabled selected>Silahkan pilih</option>
                                <?php foreach ($classrooms as $classroom) : ?>
                                    <option <?= selected_option(old('classroom_id'), $classroom->id) ?> value="<?= $classroom->id ?>">
                                        <?= upcase($classroom->name) ?>
                                    </option>
                                <?php endforeach ?>
                            </select>

                            <div class="invalid-feedback d-block">
                                <?= validation_show_error('classroom_id') ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="picture">Paspoto</label>
                            <div class="custom-file">
                                <input type="file" id="picture" name="picture" class="custom-file-input <?= validation_show_error('picture') ? 'is-invalid' : '' ?>">
                                <label class="custom-file-label" for="picture">Silahkan cari..</label>
                            </div>
                            <div class="invalid-feedback d-block">
                                <?= validation_show_error('picture') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer p-2 ">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="<?= route_to('admin.siswa') ?>" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left mr-1"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-sm btn-success">
                            Simpan Data
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>