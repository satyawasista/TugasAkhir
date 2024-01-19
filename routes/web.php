<?php

use App\Http\Controllers\AutoFillController;
use App\Http\Controllers\BirthRecordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaternityPatientController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\VisitationController;
use App\Models\MaternityPatient;
use App\Models\Visitation;
use Illuminate\Support\Facades\Route;

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


//Route Login User
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/loginproses',[LoginController::class,'loginproses'])->name('loginproses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/insertregistra',[LoginController::class,'insertregistra'])->name('insertregistra');

//Route Kelola User
Route::get('/data-user',[LoginController::class,'datauser'])->name('datauser')->middleware('level');
Route::get('/insertdatauser',[LoginController::class,'insertdatauser'])->name('insertdatauser');
Route::get('/tambah-data-user',[LoginController::class,'tambahuser'])->name('tambahuser');
Route::post('/insertuser',[LoginController::class,'insertuser'])->name('insertuser');
Route::get('/edit-data-user/{id}',[LoginController::class,'tampildatauser'])->name('tampildatauser');
Route::post('/edituser/{id}',[LoginController::class,'edituser'])->name('edituser');
Route::get('/detail-data-user/{id}',[LoginController::class,'detaildatauser'])->name('detaildatauser');
Route::get('/hapusdatuser/{id}',[LoginController::class,'hapusdatuser'])->name('hapusdatuser');


//Route Kelola Pasien
Route::get('/dashboard',[PatientController::class,'index'])->name('dasboard')->middleware('auth');
Route::get('/data-pasien',[PatientController::class, 'datapasien'])->name('pasien')->middleware('auth');
Route::get('/datapasienkunjungan',[PatientController::class, 'datapasienkunjungan'])->name('datapasienkunjungan')->middleware('auth');
Route::get('/tambah-data-pasien', [PatientController::class,'pasienbaru'])->name('pasienbaru')->middleware('level');
Route::post('/insertdata', [PatientController::class,'insertdata'])->name('insertdata')->middleware('auth');
Route::get('/edit-data-pasien/{id}', [PatientController::class,'tampilkandata'])->name('tampilkandata')->middleware('auth');
Route::get('/detail-data-pasien/{id}', [PatientController::class,'detaildatapasien'])->name('detaildatapasien')->middleware('auth');
Route::post('/editdata/{id}', [PatientController::class,'editdata'])->name('editdata')->middleware('auth');

//Route Kelola Antrian
Route::get('/data-kunjungan-pasien',[VisitationController::class,'dataantrian'])->name('dataantrian')->middleware('auth');
Route::post('/antrian',[VisitationController::class,'antrian'])->middleware('auth');
Route::get('/hapusdataantrian/{id}',[VisitationController::class,'hapusdataantrian'])->name('hapusdataantrian')->middleware('auth');
Route::post('/editdatakunjungan/{id}',[VisitationController::class,'editdatakunjungan'])->name('editdatakunjungan')->middleware('auth');

//Route Kelola Rekam Medis
Route::get('/tambah-data-rekam-medis-pasien-pemeriksaan-umum/{id}/{id_user}', [RecordController::class,'tambahrekammedis'])->name('tambahrekammedis')->middleware('auth');
Route::post('/simpanrekammedis/{id}', [RecordController::class,'simpanrekammedis'])->name('simpanrekammedis')->middleware('auth');
Route::get('/data-rekam-medis-pasien-pemeriksaan-umum', [RecordController::class,'datatindakan'])->name('datatindakan')->middleware('auth');
Route::get('/edit-data-rekam-medis-pasien-pemeriksaan-umum/{id}', [RecordController::class,'tampildatarekammedis'])->name('tampildatarekammedis')->middleware('auth');
Route::post('/editdatarekammedis/{id}', [RecordController::class,'editdatarekammedis'])->name('editdatarekammedis')->middleware('auth');
Route::get('/detail-data-rekam-medis-pasien-pemeriksaan-umum/{id}', [RecordController::class,'detaildatarekammedis'])->name('detaildatarekammedis')->middleware('auth');
Route::get('/hapusdatarekammedis/{id}', [RecordController::class,'hapusdatarekammedis'])->name('hapusdatarekammedis')->middleware('auth');

//kelola rekam medis bersalin
Route::get('/tambah-rekam-medis-pasien-persalinan/{id}', [BirthRecordController::class,'tambahrekammedisbersalin'])->name('tambahrekammedisbersalin')->middleware('auth');
Route::post('/simpanrekammedisbersalin/{id}', [BirthRecordController::class,'simpanrekammedisbersalin'])->name('simpanrekammedisbersalin')->middleware('auth');
Route::get('/data-rekam-medis-pasien-persalinan', [BirthRecordController::class,'datarekammedisbersalin'])->name('datarekammedisbersalin')->middleware('auth');
Route::get('/detail-rekam-medis-pasien-persalinan/{id}', [BirthRecordController::class,'detailrekammedisbersalin'])->name('detailrekammedisbersalin')->middleware('auth');
Route::get('/edit-data-rekam-medis-pasien-persalinan/{id}', [BirthRecordController::class,'tampildatarekammedisbersalin'])->name('tampildatarekammedisbersalin')->middleware('auth');
Route::post('/editdatarekammedisbersalin/{id}', [BirthRecordController::class,'editdatarekammedisbersalin'])->name('editdatarekammedisbersalin')->middleware('auth');
Route::get('/hapusdatarekammedisbersalin/{id}', [BirthRecordController::class,'hapusdatarekammedisbersalin'])->name('hapusdatarekammedisbersalin')->middleware('auth');

//klola pendaftaran pasien melahirkan
Route::get('/daftaran-pasien-Persalinan/{id}', [MaternityPatientController::class,'daftarapasienmelahirkan'])->name('daftarapasienmelahirkan')->middleware('auth');
Route::post('/simpanpasienbersalin/{id}', [MaternityPatientController::class,'simpanpasienbersalin'])->name('simpanpasienbersalin')->middleware('auth');
Route::get('/detail-data-kunjungan-persalinan/{id}', [MaternityPatientController::class,'detaildatakunjunganbersalin'])->name('detaildatakunjunganbersalin')->middleware('auth');
Route::get('/edit-data-kunjungan-pasien-persalinan/{id}', [MaternityPatientController::class,'tampildatakunjunganbersalin'])->name('tampildatakunjunganbersalin')->middleware('auth');
Route::post('/editdatakunjunganpasienbersalin/{id}', [MaternityPatientController::class,'editdatakunjunganpasienbersalin'])->name('editdatakunjunganpasienbersalin')->middleware('auth');
Route::get('/hapusdatakunjunganbersalin/{id}', [MaternityPatientController::class,'hapusdatakunjunganbersalin'])->name('hapusdatakunjunganbersalin')->middleware('auth');

//Route kelola laporan umum
Route::get('/laporan-kunjungan-pasien-pemeriksaan-umum',[VisitationController::class,'laporanKunjunganPasien'])->name('laporanKunjunganPasien')->middleware('level');
Route::get('/cetakLaporan/{tglawal}/{tglakhir}',[VisitationController::class,'cetakLaporan'])->name('cetakLaporan')->middleware('level');

//Route kelola laporan persalinan
Route::get('/laporan-kunjungan-pasien-persalinan',[MaternityPatientController::class,'laporanKunjunganPasienbersalin'])->name('laporanKunjunganPasienbersalin')->middleware('level');
Route::get('/cetakLaporanbersalin/{tglawal}/{tglakhir}',[MaternityPatientController::class,'cetakLaporanbersalin'])->name('cetakLaporanbersalin')->middleware('level');

//kelola pendaftaran online
Route::get('/', function () {return view('menupasien.index');});
Route::get('/pendaftaran-online',[PatientController::class,'pendaftaranonline'])->name('pendaftaranonline')->middleware('auth');
Route::post('/simpanpasienonline',[PatientController::class,'simpanpasienonline'])->name('simpanpasienonline')->middleware('auth');
Route::get('/data-pasien-kunjungan-online',[PatientController::class, 'datapasienkunjunganonline'])->name('datapasienkunjunganonline')->middleware('auth');
Route::post('/simpanpendaftaranonline',[VisitationController::class,'simpanpendaftaranonline'])->name('simpanpendaftaranonline');
Route::get('/data-pendaftaran',[VisitationController::class, 'datapendaftaran'])->name('datapendaftaran')->middleware('auth');

