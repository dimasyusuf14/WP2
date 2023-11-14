<?php

use App\Controllers\Admin;
use App\Controllers\Guru;
use App\Controllers\Siswa;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function() {
    return redirect()->route('login');
});

// Auth Routes
$routes->get('login', 'AuthController::login', ['as' => 'login', 'filter' => 'guest']);
$routes->post('login', 'AuthController::processLogin', ['as' => 'login', 'filter' => 'guest']);
$routes->delete('logout', 'AuthController::logout', ['as' => 'logout', 'filter' => 'auth']);

// Profile Routes
$routes->group('profile', ['filter' => ['auth']], function ($routes) {
    $routes->get('/', 'ProfileController::index', ['as' => 'profile']);
    $routes->post('change-photo', 'ProfileController::changePhoto', ['as' => 'profile.change_photo']);
    $routes->post('remove-photo', 'ProfileController::removePhoto', ['as' => 'profile.remove_photo']);
    $routes->post('change-password', 'ProfileController::changePassword', ['as' => 'profile.change_password']);
});

// Admin Routes
$routes->group('admin', ['filter' => ['auth', 'role_admin'], 'namespace' => Admin::class], function ($routes) {
    $routes->get('dash', 'DashController::index', ['as' => 'admin.dash']);

    // Admin > Siswa Routes
    $routes->group('siswa', function ($routes) {
        $routes->get('/', 'SiswaController::index', ['as' => 'admin.siswa']);
        $routes->get('create', 'SiswaController::create', ['as' => 'admin.siswa.create']);
        $routes->post('store', 'SiswaController::store', ['as' => 'admin.siswa.store']);
        $routes->post('destroy', 'SiswaController::destroy', ['as' => 'admin.siswa.destroy']);
        $routes->get('edit/(:any)', 'SiswaController::edit/$1', ['as' => 'admin.siswa.edit']);
        $routes->post('update', 'SiswaController::update', ['as' => 'admin.siswa.update']);
    });

    // Admin > Guru Routes
    $routes->group('guru', function ($routes) {
        $routes->get('/', 'GuruController::index', ['as' => 'admin.guru']);
        $routes->get('create', 'GuruController::create', ['as' => 'admin.guru.create']);
        $routes->post('store', 'GuruController::store', ['as' => 'admin.guru.store']);
        $routes->post('destroy', 'GuruController::destroy', ['as' => 'admin.guru.destroy']);
        $routes->get('edit/(:any)', 'GuruController::edit/$1', ['as' => 'admin.guru.edit']);
        $routes->post('update', 'GuruController::update', ['as' => 'admin.guru.update']);
    });

    // Admin > Kelas Routes
    $routes->group('kelas', function ($routes) {
        $routes->get('/', 'KelasController::index', ['as' => 'admin.kelas']);
        $routes->get('create', 'KelasController::create', ['as' => 'admin.kelas.create']);
        $routes->post('store', 'KelasController::store', ['as' => 'admin.kelas.store']);
        $routes->post('destroy', 'KelasController::destroy', ['as' => 'admin.kelas.destroy']);
        $routes->get('edit/(:any)', 'KelasController::edit/$1', ['as' => 'admin.kelas.edit']);
        $routes->post('update', 'KelasController::update', ['as' => 'admin.kelas.update']);
    });

});

// Guru Routes
$routes->group('guru', ['filter' => ['auth', 'role_guru'], 'namespace' => Guru::class], function ($routes) {
    $routes->get('dash', 'DashController::index', ['as' => 'guru.dash']);
    $routes->get('jadwal', 'JadwalController::index', ['as' => 'guru.jadwal']);

});

// Siswa Routes
$routes->group('siswa', ['filter' => ['auth', 'role_siswa'], 'namespace' => Siswa::class], function ($routes) {
    $routes->get('dash', 'DashController::index', ['as' => 'siswa.dash']);
    $routes->get('jadwal', 'JadwalController::index', ['as' => 'siswa.jadwal']);

    // Siswa > Materi Routes
    $routes->group('materi', function ($routes) {
        $routes->get('(:any)', 'MateriController::index/$1', ['as' => 'siswa.materi']);
    });
});