<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//admin
Route::group(['middleware' => ['auth', 'AccessAdmin:admin']], function () {
    Route::resource('admins-view', 'admin\adminController');
    Route::resource('guru-view', 'admin\dataguruController');
});
//admin
//guru
Route::group(['middleware' => ['auth', 'AccessAdmin:guru,admin']], function () {

    Route::resource('dashboard-view', 'admin\dashboardController');
    Route::resource('blog-view', 'admin\blogController');
    Route::resource('pengumuman-view', 'admin\pengumumanController');
    Route::resource('nilai-view', 'admin\nilaiController');
    Route::resource('siswa-view', 'admin\siswaController');
    Route::resource('tugas-view', 'admin\tugasController');
    Route::get('siswa-edit/{id}', 'admin\siswaController@index')->name('nilaisiswa-view.index');
    Route::put('siswa-edit/{id}/edit', 'admin\siswaController@update')->name('nilaisiswa-view.update');
});
//guru

//login admin dan guru
Route::post('/login/masuk', 'admin\loginController@postlogin');
//register guru admin
Auth::routes();
//register guru admin

//verifikasi email guru
// Auth::routes(['verify' => true]);
Route::get('/notif', 'notifController@index');

//tampilan depan
Route::resource('index', 'indexController');
Route::get('/', 'indexController@index');
//tampilan depan
//pengumuman
Route::get('/pengumuman', 'pengumumanController@index');
//pengumuman
//blog
Route::get('/blog', 'blogController@index');
Route::get('/blog/saint', 'blogController@saint');
Route::get('/blog/penelitian', 'blogController@penelitian');
Route::get('/blog/prestasi', 'blogController@prestasi');
Route::get('/blog/olahraga', 'blogController@olahraga');
Route::get('/blog/warga', 'blogController@warga');
Route::get('/blog/politik', 'blogController@politik');
Route::get('/blog/pendidikan', 'blogController@pendidikan');
Route::get('/blog/detailblog/{id}', 'blogController@detail');
//blog
//profil
Route::get('/profil', 'profilController@index');
//profil
//guru
Route::get('/guru', 'guruController@index');
Route::get('/guru/2', 'guruController@guru');
Route::get('/guru/3', 'guruController@guru3');
//guru
//kontak
Route::get('/kontak', 'kontakController@index');
//kontak
//Nilai Kelas 7
Route::get('/nilai/kelasvii', 'nilaiviiController@index');
Route::get('/nilai/kelasvii/bali', 'nilaivii\baliController@index');
Route::get('/nilai/kelasvii/indo', 'nilaivii\indoController@index');
Route::get('/nilai/kelasvii/informatika', 'nilaivii\informatikaController@index');
Route::get('/nilai/kelasvii/inggris', 'nilaivii\inggrisController@index');
Route::get('/nilai/kelasvii/ipa', 'nilaivii\ipaController@index');
Route::get('/nilai/kelasvii/ips', 'nilaivii\ipsController@index');
Route::get('/nilai/kelasvii/matematika', 'nilaivii\matematikaController@index');
Route::get('/nilai/kelasvii/pab', 'nilaivii\pabController@index');
Route::get('/nilai/kelasvii/pjok', 'nilaivii\pjokController@index');
Route::get('/nilai/kelasvii/pkn', 'nilaivii\pknController@index');
Route::get('/nilai/kelasvii/seni', 'nilaivii\seniController@index');
Route::get('/nilai/detailnilaivii/{id}', 'nilaiviiController@detail');
Route::get('siswa/vii/{id}', 'nilaiviiController@detailsiswa')->name('nilai-siswavii.index');
//Nilai Kelas 7
//Tugas Kelas 7
Route::get('/tugas/kelasvii', 'tugasviiController@index');
Route::get('/tugas/kelasvii/bali', 'tugasviiController@bali');
Route::get('/tugas/kelasvii/indo', 'tugasviiController@indo');
Route::get('/tugas/kelasvii/informatika', 'tugasviiController@informatika');
Route::get('/tugas/kelasvii/inggris', 'tugasviiController@inggris');
Route::get('/tugas/kelasvii/ipa', 'tugasviiController@ipa');
Route::get('/tugas/kelasvii/ips', 'tugasviiController@ips');
Route::get('/tugas/kelasvii/matematika', 'tugasviiController@matematika');
Route::get('/tugas/kelasvii/pab', 'tugasviiController@pab');
Route::get('/tugas/kelasvii/pjok', 'tugasviiController@pjok');
Route::get('/tugas/kelasvii/pkn', 'tugasviiController@pkn');
Route::get('/tugas/kelasvii/seni', 'tugasviiController@seni');
Route::get('/tugas/detailtugasvii/{id}', 'tugasviiController@detail');
//Tugas Kelas 7

//Nilai Kelas 8
Route::get('/nilai/kelasviii', 'nilaiviiiController@index');
Route::get('/nilai/kelasviii/bali', 'nilaiviii\baliController@index');
Route::get('/nilai/kelasviii/indo', 'nilaiviii\indoController@index');
Route::get('/nilai/kelasviii/informatika', 'nilaiviii\informatikaController@index');
Route::get('/nilai/kelasviii/inggris', 'nilaiviii\inggrisController@index');
Route::get('/nilai/kelasviii/ipa', 'nilaiviii\ipaController@index');
Route::get('/nilai/kelasviii/ips', 'nilaiviii\ipsController@index');
Route::get('/nilai/kelasviii/matematika', 'nilaiviii\matematikaController@index');
Route::get('/nilai/kelasviii/pab', 'nilaiviii\pabController@index');
Route::get('/nilai/kelasviii/pjok', 'nilaiviii\pjokController@index');
Route::get('/nilai/kelasviii/pkn', 'nilaiviii\pknController@index');
Route::get('/nilai/kelasviii/seni', 'nilaiviii\seniController@index');
Route::get('/nilai/detailnilaiviii/{id}', 'nilaiviiiController@detail');
Route::get('siswa/viii/{id}', 'nilaiviiiController@detailsiswa')->name('nilai-siswaviii.index');
//Nilai Kelas 8
//Tugas Kelas 8
Route::get('/tugas/kelasviii', 'tugasviiiController@index');
Route::get('/tugas/kelasviii/bali', 'tugasviiiController@bali');
Route::get('/tugas/kelasviii/indo', 'tugasviiiController@indo');
Route::get('/tugas/kelasviii/informatika', 'tugasviiiController@informatika');
Route::get('/tugas/kelasviii/inggris', 'tugasviiiController@inggris');
Route::get('/tugas/kelasviii/ipa', 'tugasviiiController@ipa');
Route::get('/tugas/kelasviii/ips', 'tugasviiiController@ips');
Route::get('/tugas/kelasviii/matematika', 'tugasviiiController@matematika');
Route::get('/tugas/kelasviii/pab', 'tugasviiiController@pab');
Route::get('/tugas/kelasviii/pjok', 'tugasviiiController@pjok');
Route::get('/tugas/kelasviii/pkn', 'tugasviiiController@pkn');
Route::get('/tugas/kelasviii/seni', 'tugasviiiController@seni');
Route::get('/tugas/detailtugasviii/{id}', 'tugasviiiController@detail');
//Tugas Kelas 8

//Nilai Kelas 9
Route::get('/nilai/kelasvix', 'nilaiixController@index');
Route::get('/nilai/kelasvix/bali', 'nilaiix\baliController@index');
Route::get('/nilai/kelasvix/indo', 'nilaiix\indoController@index');
Route::get('/nilai/kelasvix/informatika', 'nilaiix\informatikaController@index');
Route::get('/nilai/kelasvix/inggris', 'nilaiix\inggrisController@index');
Route::get('/nilai/kelasvix/ipa', 'nilaiix\ipaController@index');
Route::get('/nilai/kelasvix/ips', 'nilaiix\ipsController@index');
Route::get('/nilai/kelasvix/matematika', 'nilaiix\matematikaController@index');
Route::get('/nilai/kelasvix/pab', 'nilaiix\pabController@index');
Route::get('/nilai/kelasvix/pjok', 'nilaiix\pjokController@index');
Route::get('/nilai/kelasvix/pkn', 'nilaiix\pknController@index');
Route::get('/nilai/kelasvix/seni', 'nilaiix\seniController@index');
Route::get('/nilai/detailnilaiix/{id}', 'nilaiixController@detail');
Route::get('siswa/ix/{id}', 'nilaiixController@detailsiswa')->name('nilai-siswaix.index');
//Nilai Kelas 9
//Tugas Kelas 9
Route::get('/tugas/kelasix', 'tugasixController@index');
Route::get('/tugas/kelasix/bali', 'tugasixController@bali');
Route::get('/tugas/kelasix/indo', 'tugasixController@indo');
Route::get('/tugas/kelasix/informatika', 'tugasixController@informatika');
Route::get('/tugas/kelasix/inggris', 'tugasixController@inggris');
Route::get('/tugas/kelasix/ipa', 'tugasixController@ipa');
Route::get('/tugas/kelasix/ips', 'tugasixController@ips');
Route::get('/tugas/kelasix/matematika', 'tugasixController@matematika');
Route::get('/tugas/kelasix/pab', 'tugasixController@pab');
Route::get('/tugas/kelasix/pjok', 'tugasixController@pjok');
Route::get('/tugas/kelasix/pkn', 'tugasixController@pkn');
Route::get('/tugas/kelasix/seni', 'tugasixController@seni');
Route::get('/tugas/detailtugasix/{id}', 'tugasixController@detail');
//Tugas Kelas 9