<?php

use App\Http\Controllers\MinutesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\LyricsController;
use App\Http\Controllers\OtherMinistryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserChristmasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserHealingStreamController;
use App\Http\Controllers\UserLyricsController;
use App\Http\Controllers\UserPraiseNightController;
use App\Http\Controllers\UserSearchController;
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


Route::get('/dashboard', function () {
    return view('frontend.user_dashboard');
})->middleware(['auth', 'verified'])->name('user.dashboard');

Route::middleware(['auth', 'roles:user'])->group(function(){
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

    // Praise Night
    Route::get('/user/praise/night/select', [UserPraiseNightController::class, 'PraiseNightSelect'])->name('praise_night_select');
    Route::get('/user/praise/night/1', [UserPraiseNightController::class, 'PraiseNight1'])->name('praise.night.1');
    Route::get('/user/praise/night/2', [UserPraiseNightController::class, 'PraiseNight2'])->name('praise.night.2');
    Route::get('/user/praise/night/3', [UserPraiseNightController::class, 'PraiseNight3'])->name('praise.night.3');
    Route::get('/user/praise/night/4', [UserPraiseNightController::class, 'PraiseNight4'])->name('praise.night.4');
    Route::get('/user/praise/night/5', [UserPraiseNightController::class, 'PraiseNight5'])->name('praise.night.5');
    Route::get('/user/praise/night/6', [UserPraiseNightController::class, 'PraiseNight6'])->name('praise.night.6');
    Route::get('/user/praise/night/7', [UserPraiseNightController::class, 'PraiseNight7'])->name('praise.night.7');
    Route::get('/user/praise/night/8', [UserPraiseNightController::class, 'PraiseNight8'])->name('praise.night.8');
    Route::get('/user/praise/night/9', [UserPraiseNightController::class, 'PraiseNight9'])->name('praise.night.9');
    Route::get('/user/praise/night/10', [UserPraiseNightController::class, 'PraiseNight10'])->name('praise.night.10');
    Route::get('/user/praise/night/11', [UserPraiseNightController::class, 'PraiseNight11'])->name('praise.night.11');
    Route::get('/user/praise/night/12', [UserPraiseNightController::class, 'PraiseNight12'])->name('praise.night.12');
    Route::get('/viewpdf/doc/{id}', [UserPraiseNightController::class, 'ViewPdf'])->name('view.pdf');
    Route::get('/praise/night/full/content/{id}', [UserPraiseNightController::class, 'FullContent'])->name('full.content2');

    // Healing Stream
    Route::get('/user/healing/stream/select', [UserHealingStreamController::class, 'HealingStreamSelect'])->name('healing_stream_select');
    Route::get('/user/healing/stream/2020', [UserHealingStreamController::class, 'HealingStream2020'])->name('healing.stream.2020');
    Route::get('/user/healing/stream/2021', [UserHealingStreamController::class, 'HealingStream2021'])->name('healing.stream.2021');
    Route::get('/user/healing/stream/2022', [UserHealingStreamController::class, 'HealingStream2022'])->name('healing.stream.2022');
    Route::get('/user/healing/stream/2023', [UserHealingStreamController::class, 'HealingStream2023'])->name('healing.stream.2023');
    Route::get('/user/healing/stream/2024', [UserHealingStreamController::class, 'HealingStream2024'])->name('healing.stream.2024');
    Route::get('/user/healing/stream/2025', [UserHealingStreamController::class, 'HealingStream2025'])->name('healing.stream.2025');
    Route::get('/user/healing/stream/2026', [UserHealingStreamController::class, 'HealingStream2026'])->name('healing.stream.2026');
    Route::get('/user/healing/stream/2027', [UserHealingStreamController::class, 'HealingStream2027'])->name('healing.stream.2027');
    Route::get('/user/healing/stream/2028', [UserHealingStreamController::class, 'HealingStream2028'])->name('healing.stream.2028');
    Route::get('/user/healing/stream/2029', [UserHealingStreamController::class, 'HealingStream2029'])->name('healing.stream.2029');
    Route::get('/user/healing/stream/month', [UserHealingStreamController::class, 'HealingStreamMonth'])->name('healing.stream.month');
    Route::get('/user/healing/stream/march', [UserHealingStreamController::class, 'HealingStreamMarch'])->name('healing.stream.march');
    Route::get('/user/healing/stream/july', [UserHealingStreamController::class, 'HealingStreamJuly'])->name('healing.stream.july');
    Route::get('/user/healing/stream/october', [UserHealingStreamController::class, 'HealingStreamOctober'])->name('healing.stream.october');
    Route::get('/view/pdf/doc/{id}', [UserHealingStreamController::class, 'ViewPdf2'])->name('view2.pdf');
    Route::get('/healing/stream/full/content/{id}', [UserHealingStreamController::class, 'FullContent2'])->name('full.content');

    // Lyrics
    Route::get('/user/lyrics', [UserLyricsController::class, 'LyricsSelect'])->name('lyrics');
    Route::get('/lyrics/content/view/{id}', [UserLyricsController::class, 'LyricsContent'])->name('lyrics.content.user');
    Route::get('/lyrics/full/content/{id}', [UserLyricsController::class, 'FullContent3'])->name('full.content3');
    Route::get('/single/lyrics/{title}', [UserLyricsController::class, 'SingleLyrics'])->name('single.lyrics');

    // Christmas 
    Route::get('/user/christmas/select', [UserChristmasController::class, 'ChristmasSelect'])->name('christmas_select_user');
    Route::get('/viewpdfchristmas/doc/{id}', [UserChristmasController::class, 'ViewPdfChristmas'])->name('view4.pdf');
    Route::get('/christmas/full/content/{id}', [UserChristmasController::class, 'FullContent4'])->name('full.content4');

    // Other Ministry Programs
    Route::get('/user/other/ministry', [OtherMinistryController::class, 'OtherMinistrySelect'])->name('other_ministry_select_user');
    Route::get('/viewpdfotherministry/doc/{id}', [OtherMinistryController::class, 'ViewPdfOtherMinistry'])->name('view5.pdf');
    Route::get('/other/ministry/full/content/{id}', [OtherMinistryController::class, 'FullContent5'])->name('full.content5');

    // Dashboard
    Route::get('/user/dashboard/minutes', [UserDashboardController::class, 'UserDirectory'])->name('user_directory');

    
    // Search 
    Route::get('/user/search/directory', [UserSearchController::class, 'SearchDirectory'])->name('user.search');
    Route::post('/user/search/directory/item', [UserSearchController::class, 'SearchDirectoryItem'])->name('search_directory_item');
    Route::get('/viewpdfdoc/doc/{id}', [UserSearchController::class, 'ViewPdfDoc'])->name('view.pdfdoc');
    Route::get('/praise/night/full/content/doc/{id}', [UserSearchController::class, 'FullContentDoc'])->name('full.content.doc');
});

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
    Route::post('/admin/profile/store/update', [AdminController::class, 'AdminProfileStore2'])->name('admin.profile.store2');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/profile/update', [AdminController::class, 'AdminProfileUpdate'])->name('admin.profile.update');


    // Search Controller
    Route::controller(SearchController::class)->group(function(){
        Route::get('/search/directory', 'SearchDirectory')->name('search.directory');
        Route::post('/add/search/directory', 'SearchDirectoryStore')->name('search.directory.store');
        Route::get('/search/manage', 'SearchManage')->name('search.manage');
        Route::get('/search/directory/{id}', 'AllContent')->name('all.content3');
        Route::post('/search/directory/item', 'SearchDirectoryItem')->name('search.directory.item');
        Route::get('/edit/search/directory/{id}', 'EditSearch')->name('edit.search');
        Route::post('/update/search/directory', 'UpdateSearch')->name('search.update');
        Route::get('/delete/search/directory/{id}', 'DeleteSearch')->name('delete.search');
        Route::get('/view/search/doc/{id}', 'ViewDoc4')->name('view.doc4');
    });


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
        Route::get('/christmas/all/content/{id}', 'AllContent5')->name('all.content5');
        Route::get('/other/ministry/all/content/{id}', 'AllContent7')->name('all.content7');
        Route::get('/healing/stream/all/content/{id}', 'AllHealingContent')->name('all.healing.content');
        Route::get('/view/doc/{id}', 'ViewDoc')->name('view.doc');
        Route::get('/view/doc2/{id}', 'ViewDoc2')->name('view.doc2');
        Route::get('/view/doc6/{id}', 'ViewDoc6')->name('view.doc6');
        Route::get('/view/doc3/{id}', 'ViewDoc3')->name('view.doc3');
        Route::get('/view/doc2/{id}', 'ViewDoc4')->name('view.doc4');
        Route::get('/admin/healing/stream/view', 'HealingStreamView')->name('admin.healing.stream.view');
        Route::post('/admin/add/healing/stream', 'HealingStreamStore')->name('healing.stream.store');
        Route::get('/healing/stream/march', 'HealingStreamMarch')->name('healing_stream_march');
        Route::get('/healing/stream/july', 'HealingStreamJuly')->name('healing_stream_july');
        Route::get('/healing/stream/october', 'HealingStreamOctober')->name('healing_stream_october');
        Route::get('/edit/healing/stream/{id}', 'EditHealingStream')->name('edit.healing.stream');
        Route::post('/healing/stream/update', 'UpdateHealingStream')->name('healing.stream.update');
        Route::get('/delete/healing/stream/{id}', 'DeleteHealingStream')->name('delete.healing.stream');
        Route::get('/admin/christmas/service/view', 'ChristmasServiceView')->name('admin.christmas.service.view');
        Route::get('/admin/other/ministry/view', 'OtherMinistryView')->name('admin.other.ministry.view');
        Route::post('/admin/add/christmas/service', 'ChristmasServiceStore')->name('christmas.service.store');
        Route::post('/admin/add/other/ministry', 'OtherMinistryStore')->name('other.ministry.store');
        Route::get('/edit/praise/night/{id}', 'EditPraiseNight')->name('edit.praise.night');
        Route::get('/edit/christmas/service/{id}', 'EditChristmasService')->name('christmas.service.edit');
        Route::get('/edit/other/ministry/{id}', 'EditOtherMinistry')->name('other.ministry.edit');
        Route::post('/christmas/service/update', 'UpdateChristmasService')->name('christmas.service.update');
        Route::post('/other/ministry/update', 'UpdateOtherMinistry')->name('other.ministry.update');
        Route::get('/delete/christmas/service/{id}', 'DeleteChristmasService')->name('delete.christmas.service');
        Route::get('/delete/other/ministry/{id}', 'DeleteOtherMinistry')->name('delete.other.ministry');
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
        Route::get('/lyrics/content/{id}', 'LyricsContent')->name('lyrics.content');
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