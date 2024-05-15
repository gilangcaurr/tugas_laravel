<?php


use App\Models\Sekolah;
use Illuminate\Support\Facades\Route; 
use App\Models\Siswa;  
use App\Models\Film;   
use App\Models\Artikel;
// import controller 
use App\Http\Controllers\MyController; 
// import Movie Controller 
use App\Http\Controllers\MovieController; 
use App\Http\Controllers\ArtikelController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman2', function () {
    return view('animals');
}); 

Route::get('/halaman3', function () {
    return view('fruits');
}); 

Route::get('/about', function () {
    $nama = "ZAPNU NUMBER ONE!"; 
    $jenis_kelamin = "Laki-laki"; 
    $pendidikan_terakhir = "SMK"; 
    $pekerjaan = "Pelajar";
    return view('biodata',compact('nama', 'jenis_kelamin', 'pendidikan_terakhir', 'pekerjaan'));
   
});  

//parameter 
Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama; 
    return view('sample',compact('nama2'));
}); 

Route::get('sekolah', function(){
    return view('Sekolah');
}); 

Route::get('siswa', function(){
    return view('Siswa');
}); 

Route::get('album', function(){
    return view('album');
}); 

Route::get('film', function(){
    return view('film');
}); 

Route::get('film/{id}', function(int $id){ 
    // $film = Film::find($id); 
    return view('detail_film', ['film' => Film::find($id)]);
});  

// route with controller 
Route::get('perkenalan',[App\Http\Controllers\MyController::class,'introduce']);
Route::get('hewan',[App\Http\Controllers\MyController::class,'animals']); 

// route movie  
Route::get('movie', [MovieController::class, 'getMovie'])->middleware('auth');
Route::get('movie/{id}', [MovieController::class, 'getMovieById']); 

Route::get('artikel', [ArtikelController::class, 'getArtikel']); 
Route::get('artikel/id/{id}', [ArtikelController::class, 'getArtikelById']); 
Route::get('artikel/kategori/{kategori}', [ArtikelController::class, 'getArtikelByKategori']);      

 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

// route crud
use App\Http\Controllers\PenulisController;
Route::resource('penulis', PenulisController::class);

