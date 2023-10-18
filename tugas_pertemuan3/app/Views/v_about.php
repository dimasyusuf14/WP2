<?= $this->extend('v_layout') ?> <!-- Mengambil template dari v_layout.php -->

<?= $this->section('content') ?> <!-- Mengambil content dari v_layout.php -->

<section>
    <h1><?= $judul ?></h1>
    <div class="about-container">
        <div class="about-picture">
            <img src="<?= base_url() ?>/img/ucup.jpg" alt="profile">
        </div>
        <div class="about-description">
            <div class="typography">
                <div>
                    <h4>PROFIL</h4>
                    <p align="justify">
                        Nama saya <a> Dimas Yusuf Hidayat </a>,<br>saya seorang mahasiswa Rekayasa Perangkat Lunak di  Universitas Bina Sarana Informatika.
                        <br>Saya lahir di Jakarta <a> 14 April 2002.</a>
                    </p>
                </div>
                
                <div>
                    <h4>ALAMAT</h4>
                    <p align="justify">
                        Jl.Lapan Gg.Rembani 3 Kel.Pekayon Kec.Pasar Rebo
                    </p>
                </div>

                <div class="olahraga">
                    <h4>OLAHRAGA FAVORIT</h4>
                    <p align="justify">
                        Saya memiliki beberapa olahraga favorit seperti:
                    </p>

                    <li>Bersepeda</li>
                    <li>Berlatih Pencak Silat</li>
                    <li>Badminton</li>
                </div>

            </div>
            <ul class="social-media">
                <li>
                    <a href="https://github.com/dimasyusuf14" target="_blank">
                        Github
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/dms.yusuf" target="_blank">
                        Instagram
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<?= $this->endSection() ?> <!-- Mengakhiri content dari v_layout.php -->