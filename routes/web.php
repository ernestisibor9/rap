<?php

use App\Http\Controllers\MinutesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\LyricsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminRole;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'Index']);
Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Protect it with middleware
Route::middleware(['auth', 'roles:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/profile/update', [AdminController::class, 'AdminProfileUpdate'])->name('admin.profile.update');


    // Minutes Controller
    Route::controller(MinutesController::class)->group(function(){
        Route::get('/admin/praise/night', 'AddPraiseNight')->name('admin.praise.night');
        Route::post('/admin/add/praise/night', 'PraiseNightStore')->name('praise.night.store');
        Route::get('/admin/praise/night/view', 'PraiseNightView')->name('admin.praise.night.view');
        Route::get('/praise/night/one', 'PraiseNightOne')->name('praise_night_one');
        Route::get('/praise/night/two', 'PraiseNightTwo')->name('praise_night_two');
        Route::get('/praise/night/three', 'PraiseNightThree')->name('praise_night_three');
        Route::get('/praise/night/four', 'PraiseNightFour')->name('praise_night_four');
        Route::get('/praise/night/five', 'PraiseNightFive')->name('praise_night_five');
        Route::get('/praise/night/six', 'PraiseNightSix')->name('praise_night_six');
        Route::get('/praise/night/seven', 'PraiseNightSeven')->name('praise_night_seven');
        Route::get('/praise/night/eight', 'PraiseNightEight')->name('praise_night_eight');
        Route::get('/praise/night/nine', 'PraiseNightNine')->name('praise_night_nine');
        Route::get('/praise/night/ten', 'PraiseNightTen')->name('praise_night_ten');
        Route::get('/praise/night/eleven', 'PraiseNightEleven')->name('praise_night_eleven');
        Route::get('/praise/night/twelve', 'PraiseNightTwelve')->name('praise_night_twelve');
        Route::get('/praise/night/thirteen', 'PraiseNightThirteen')->name('praise_night_thirteen');
        Route::get('/praise/night/fourteen', 'PraiseNightFourteen')->name('praise_night_fourteen');
        Route::get('/praise/night/fifteen', 'PraiseNightFifteen')->name('praise_night_fifteen');
        Route::get('/praise/night/sixteen', 'PraiseNightSixteen')->name('praise_night_sixteen');
        Route::get('/praise/night/seventeen', 'PraiseNightSeventeen')->name('praise_night_seventeen');
        Route::get('/praise/night/eighteen', 'PraiseNightEighteen')->name('praise_night_eighteen');
        Route::get('/praise/night/nineteen', 'PraiseNightNineteen')->name('praise_night_nineteen');
        Route::get('/praise/night/twenty', 'PraiseNightTwenty')->name('praise_night_twenty');
        Route::get('/edit/praise/night/{id}', 'EditPraiseNight')->name('edit.praise.night');
        Route::post('/praise/night/update', 'UpdatePraiseNight')->name('praise.night.update');
        Route::get('/delete/praise/night/{id}', 'DeletePraiseNight')->name('delete.praise.night');
        Route::get('/praise/night/all/content/{id}', 'AllContent')->name('all.content');
        Route::get('/healing/stream/all/content/{id}', 'AllHealingContent')->name('all.healing.content');
        Route::get('/view/doc/{id}', 'ViewDoc')->name('view.doc');
        Route::get('/admin/healing/stream/view', 'HealingStreamView')->name('admin.healing.stream.view');
        Route::post('/admin/add/healing/stream', 'HealingStreamStore')->name('healing.stream.store');
        Route::get('/healing/stream/march', 'HealingStreamMarch')->name('healing_stream_march');
        Route::get('/healing/stream/july', 'HealingStreamJuly')->name('healing_stream_july');
        Route::get('/healing/stream/october', 'HealingStreamOctober')->name('healing_stream_october');
        Route::get('/edit/healing/stream/{id}', 'EditHealingStream')->name('edit.healing.stream');
        Route::post('/healing/stream/update', 'UpdateHealingStream')->name('healing.stream.update');
        Route::get('/delete/healing/stream/{id}', 'DeleteHealingStream')->name('delete.healing.stream');
        Route::get('/admin/christmas/service/view', 'ChristmasServiceView')->name('admin.christmas.service.view');
        Route::post('/admin/add/christmas/service', 'ChristmasServiceStore')->name('christmas.service.store');
        Route::get('/edit/praise/night/{id}', 'EditPraiseNight')->name('edit.praise.night');
        Route::get('/edit/christmas/service/{id}', 'EditChristmasService')->name('christmas.service.edit');
        Route::post('/christmas/service/update', 'UpdateChristmasService')->name('christmas.service.update');
        Route::get('/delete/christmas/service/{id}', 'DeleteChristmasService')->name('christmas.service.delete');
	});

    // Song Controller
    Route::controller(SongController::class)->group(function(){
        Route::get('/admin/add/song', 'AddSong')->name('admin.add.song');
        Route::post('/admin/song/store', 'StoreSong')->name('admin.song.store');
        Route::get('/admin/manage/song', 'ManageSong')->name('admin.manage.song');
        Route::get('/manage/song/edit/{id}', 'EditManageSong')->name('manage.songs.edit');
        Route::post('/song/update', 'UpdateSong')->name('song.update');
        Route::get('/manage/song/delete/{id}', 'DeleteManageSong')->name('manage.song.delete');
    });

    // Lyrics Controller
    Route::controller(LyricsController::class)->group(function(){
        Route::get('/admin/add/lyrics', 'AddLyrics')->name('admin.add.lyrics');
        Route::post('/admin/lyrics/store', 'LyricsStore')->name('admin.lyrics.store');
        Route::get('/admin/manage/lyrics', 'LyricsManage')->name('admin.manage.lyrics');
        Route::get('/admin/lyrics/edit/{id}', 'LyricsEdit')->name('manage.lyrics.edit');
        Route::post('/admin/lyrics/update', 'LyricsUpdate')->name('lyrics.update');
        Route::get('/admin/lyrics/delete/{id}', 'LyricsDelete')->name('manage.lyrics.delete');
    });

    // Leader Controller
    Route::controller(LeaderController::class)->group(function(){
        Route::get('/admin/add/leader', 'AddLeader')->name('admin.add.leader');
        Route::post('/admin/leader/store', 'LeaderStore')->name('admin.leader.store');
        Route::get('/admin/manage/leader', 'ManageLeader')->name('manage.leader');
        Route::get('/admin/edit/leader/{id}', 'EditLeader')->name('manage.leader.edit');
        Route::post('/admin/leader/update', 'LeaderUpdate')->name('leader.update');
        Route::get('/admin/delete/leader/{id}', 'DeleteLeader')->name('manage.leader.delete');
    });

});
// End Admin group middleware

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');