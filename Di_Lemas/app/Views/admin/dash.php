<?= $this->extend('layout/dash') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-6">
                    <a href="<?= route_to('admin.siswa') ?>" class="small-box">
                        <div class="inner">
                            <h3><?= $siswa_count ?></h3>

                            <p>Data Siswa</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate text-primary"></i>
                        </div>
                        <span class="small-box-footer bg-primary">Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></span>
                    </a>
                </div>
                <div class="col-lg-6 col-md-4 col-6">
                    <a href="<?= route_to('admin.guru') ?>" class="small-box">
                        <div class="inner">
                            <h3><?= $guru_count ?></h3>

                            <p>Data Guru</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tie text-indigo"></i>
                        </div>
                        <span class="small-box-footer bg-indigo">Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></span>
                    </a>
                </div>
                <div class="col-lg-6 col-md-4 col-6">
                    <a href="<?= route_to('admin.kelas') ?>" class="small-box">
                        <div class="inner">
                            <h3><?= $kelas_count ?></h3>

                            <p>Data Kelas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher text-purple"></i>
                        </div>
                        <span class="small-box-footer bg-purple">Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>