<?php

use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\NotesController;
use App\Http\Controllers\Backend\SportController;
use App\Http\Controllers\Backend\OlympaidController;
use App\Http\Controllers\Frontend\FrontendSportController;
use App\Http\Controllers\Frontend\FrontendNotesController;
use App\Http\Controllers\Frontend\FrontendOlympaidController;
use App\Http\Controllers\Frontend\FrontendNewsController;
use App\Http\Controllers\Backend\FacultyController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\TeacherController;
use App\Http\Controllers\Backend\AnnouncementController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Frontend\FrontendFacultyController;
use App\Http\Controllers\Frontend\FrontendDepartmentController;
use App\Http\Controllers\Frontend\FrontendAnnouncementController;
use App\Http\Controllers\Frontend\FrontendSliderController;
use App\Http\Controllers\Frontend\FrontendContactController;
use App\Http\Controllers\Frontend\FrontendPageController;
use App\Http\Controllers\Backend\UcurumlarController;
use App\Http\Controllers\Backend\UstunluklerController;
use App\Http\Controllers\Backend\YolbashcylarController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\FacilitiesController;
use App\Http\Controllers\Backend\DalahgarController;
use App\Http\Controllers\Backend\KitaphanaController;
use App\Http\Controllers\Backend\OkuwbolumiController;
use App\Http\Controllers\Backend\StructureController;
use App\Http\Controllers\Backend\DashboardController;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SetLocale;

use App\Http\Controllers\Backend\AdminFileManagerController;
use App\Http\Controllers\Frontend\FrontendAboutController;

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', function () {
        return view('front.index'); // Assuming front.home is the homepage view
    })->name('front.home');
    Route::any('elfinder/connector', '\Barryvdh\Elfinder\ElfinderController@showConnector')->name('elfinder.connector');
    Route::get('elfinder/popup/{input_id}', '\Barryvdh\Elfinder\ElfinderController@showPopup');
    Route::get('elfinder/filepicker/{input_id}', '\Barryvdh\Elfinder\ElfinderController@showFilePicker');
    Route::get('elfinder/tinymce', '\Barryvdh\Elfinder\ElfinderController@showTinyMCE');
    Route::get('elfinder/ckeditor', '\Barryvdh\Elfinder\ElfinderController@showCKeditor4');

    Route::get('/sadi-50',  [LoginController::class, 'showLoginForm'])->name('loginse');
    Route::post('/sadi-50', [LoginController::class, 'login'])->name('login');
    Route::post('/sadi-66', [LoginController::class, 'logout'])->name('logoutse');

    Route::get('locale/{locale}', [App\Http\Controllers\LocaleController::class, 'switch'])->name('locale.switch');

    // Frontend routes
    Route::get('/sport', [FrontendSportController::class, 'index'])->name('front.sport');
    Route::get('/notes', [FrontendNotesController::class, 'index'])->name('front.notes');
    Route::get('/olympaid', [FrontendOlympaidController::class, 'index'])->name('front.olympaid');

    Route::get('/faculty', [FrontendFacultyController::class, 'index'])->name('front.faculty');
    Route::get('/department', [FrontendDepartmentController::class, 'index'])->name('front.department');
    Route::get('/news', [FrontendNewsController::class, 'index'])->name('front.news');
    Route::get('/announcements', [FrontendAnnouncementController::class, 'index'])->name('front.announcements');
    Route::get('/slider', [FrontendSliderController::class, 'index'])->name('front.slider');
    Route::get('/contact', [FrontendContactController::class, 'index'])->name('front.contact');
    Route::post('/contact', [FrontendContactController::class, 'store'])->name('front.contact.store');
    Route::get('/pages', [FrontendPageController::class, 'index'])->name('front.pages');


    Route::middleware('auth')->prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('main');

        Route::get('filemanager', [AdminFileManagerController::class, 'index'])->name('filemanager.index');
        Route::get('backup', [DashboardController::class, 'backup'])->name('backup');

        Route::get('about', [FrontendAboutController::class, 'index'])->name('front.about');

        Route::controller(UserController::class)->group(function () {
            Route::get('/users/main', 'index')->name('users.index');
            Route::get('/users/main/search', 'search')->name('users.search');
            Route::get('/users/create', 'create')->name('users.create');
            Route::post('/users/create', 'store')->name('users.store');
            Route::get('/users/edit', 'edit')->name('users.edit');
            Route::patch('/users/edit', 'patch')->name('users.update');
            Route::delete('/users/delete', 'delete')->name('users.delete');
        });

        Route::controller(RoleController::class)->group(function () {
            Route::get('/roles/main', 'index')->name('roles.index');
            Route::get('/roles/main/search', 'search')->name('roles.search');
            Route::get('/roles/create', 'create')->name('roles.create');
            Route::post('/roles/create', 'store')->name('roles.store');
            Route::get('/roles/edit/{id}', 'edit')->name('roles.edit');
            Route::patch('/roles/edit/{id}', 'patch')->name('roles.update');
            Route::get('/roles/edit-permission/{id}', 'editPermission')->name('roles.edit_permission');
            Route::post('/roles/edit-permission/{id}', 'updatePermission')->name('roles.update_permission');
            Route::delete('/roles/delete/{id}', 'delete')->name('roles.delete');
        });

        Route::controller(NotesController::class)->group(function () {
            Route::get('/notes/main', 'index')->name('notes.index');
            Route::get('/notes/main/search', 'search')->name('notes.search');
            Route::get('/notes/create', 'create')->name('notes.create');
            Route::post('/notes/create', 'store')->name('notes.store');
            Route::get('/notes/edit/{id}', 'edit')->name('notes.edit');
            Route::patch('/notes/edit/{id}', 'patch')->name('notes.update');
            Route::delete('/notes/delete/{id}', 'delete')->name('notes.delete');
        });

        Route::controller(SportController::class)->group(function () {
            Route::get('/sport/main', 'index')->name('sport.index');
            Route::get('/sport/main/search', 'search')->name('sport.search');
            Route::get('/sport/create', 'create')->name('sport.create');
            Route::post('/sport/create', 'store')->name('sport.store');
            Route::get('/sport/edit/{id}', 'edit')->name('sport.edit');
            Route::patch('/sport/edit/{id}', 'patch')->name('sport.update');
            Route::delete('/sport/delete/{id}', 'delete')->name('sport.delete');
        });

        Route::controller(FacultyController::class)->group(function () {
            Route::get('/faculty/main', 'index')->name('faculty.index');
            Route::get('/faculty/main/search', 'search')->name('faculty.search');
            Route::get('/faculty/create', 'create')->name('faculty.create');
            Route::post('/faculty/create', 'store')->name('faculty.store');
            Route::get('/faculty/edit/{id}', 'edit')->name('faculty.edit');
            Route::patch('/faculty/edit/{id}', 'patch')->name('faculty.update');
            Route::delete('/faculty/delete/{id}', 'delete')->name('faculty.delete');
        });

        Route::controller(DepartmentController::class)->group(function () {
            Route::get('/department/main', 'index')->name('department.index');
            Route::get('/department/main/search', 'search')->name('department.search');
            Route::get('/department/create', 'create')->name('department.create');
            Route::post('/department/create', 'store')->name('department.store');
            Route::get('/department/edit/{id}', 'edit')->name('department.edit');
            Route::patch('/department/edit/{id}', 'patch')->name('department.update');
            Route::delete('/department/delete/{id}', 'delete')->name('department.delete');
        });

        Route::controller(DalahgarController::class)->group(function () {
            Route::get('/dalashgar/main', 'index')->name('dalashgar.index');
            Route::get('/dalashgar/main/search', 'search')->name('dalashgar.search');
            Route::get('/dalashgar/create', 'create')->name('dalashgar.create');
            Route::post('/dalashgar/create', 'store')->name('dalashgar.store');
            Route::get('/dalashgar/edit/{id}', 'edit')->name('dalashgar.edit');
            Route::patch('/dalashgar/edit/{id}', 'patch')->name('dalashgar.update');
            Route::delete('/dalashgar/delete/{id}', 'delete')->name('dalashgar.delete');
        });

        Route::controller(FacilitiesController::class)->group(function () {
            Route::get('/facilities/main', 'index')->name('facilities.index');
            Route::get('/facilities/main/search', 'search')->name('facilities.search');
            Route::get('/facilities/create', 'create')->name('facilities.create');
            Route::post('/facilities/create', 'store')->name('facilities.store');
            Route::get('/facilities/edit/{id}', 'edit')->name('facilities.edit');
            Route::patch('/facilities/edit/{id}', 'patch')->name('facilities.update');
            Route::delete('/facilities/delete/{id}', 'delete')->name('facilities.delete');
        });

        Route::controller(KitaphanaController::class)->group(function () {
            Route::get('/kitaphana/main', 'index')->name('kitaphana.index');
            Route::get('/kitaphana/main/search', 'search')->name('kitaphana.search');
            Route::get('/kitaphana/create', 'create')->name('kitaphana.create');
            Route::post('/kitaphana/create', 'store')->name('kitaphana.store');
            Route::get('/kitaphana/edit/{id}', 'edit')->name('kitaphana.edit');
            Route::patch('/kitaphana/edit/{id}', 'patch')->name('kitaphana.update');
            Route::delete('/kitaphana/delete/{id}', 'delete')->name('kitaphana.delete');
        });

        Route::controller(OkuwbolumiController::class)->group(function () {
            Route::get('/okuwbolumi/main', 'index')->name('okuwbolumi.index');
            Route::get('/okuwbolumi/main/search', 'search')->name('okuwbolumi.search');
            Route::get('/okuwbolumi/create', 'create')->name('okuwbolumi.create');
            Route::post('/okuwbolumi/create', 'store')->name('okuwbolumi.store');
            Route::get('/okuwbolumi/edit/{id}', 'edit')->name('okuwbolumi.edit');
            Route::patch('/okuwbolumi/edit/{id}', 'patch')->name('okuwbolumi.update');
            Route::delete('/okuwbolumi/delete/{id}', 'delete')->name('okuwbolumi.delete');
        });

        Route::controller(StructureController::class)->group(function () {
            Route::get('/structure/main', 'index')->name('structure.index');
            Route::get('/structure/main/search', 'search')->name('structure.search');
            Route::get('/structure/create', 'create')->name('structure.create');
            Route::post('/structure/create', 'store')->name('structure.store');
            Route::get('/structure/edit/{id}', 'edit')->name('structure.edit');
            Route::patch('/structure/edit/{id}', 'patch')->name('structure.update');
            Route::delete('/structure/delete/{id}', 'delete')->name('structure.delete');
        });

        Route::controller(TeacherController::class)->group(function () {
            Route::get('/teacher/main', 'index')->name('teacher.index');
            Route::get('/teacher/main/search', 'search')->name('teacher.search');
            Route::get('/teacher/create', 'create')->name('teacher.create');
            Route::post('/teacher/create', 'store')->name('teacher.store');
            Route::get('/teacher/edit/{id}', 'edit')->name('teacher.edit');
            Route::patch('/teacher/edit/{id}', 'patch')->name('teacher.update');
            Route::delete('/teacher/delete/{id}', 'delete')->name('teacher.delete');
        });

        Route::controller(NewsController::class)->group(function () {
            Route::get('/news/main', 'index')->name('news.index');
            Route::get('/news/main/search', 'search')->name('news.search');
            Route::get('/news/create', 'create')->name('news.create');
            Route::post('/news/create', 'store')->name('news.store');
            Route::get('/news/edit/{id}', 'edit')->name('news.edit');
            Route::patch('/news/edit/{id}', 'patch')->name('news.update');
            Route::delete('/news/delete/{id}', 'delete')->name('news.delete');
        });

        Route::controller(AnnouncementController::class)->group(function () {
            Route::get('/announcement/main', 'index')->name('announcement.index');
            Route::get('/announcement/main/search', 'search')->name('announcement.search');
            Route::get('/announcement/create', 'create')->name('announcement.create');
            Route::post('/announcement/create', 'store')->name('announcement.store');
            Route::get('/announcement/edit/{id}', 'edit')->name('announcement.edit');
            Route::patch('/announcement/edit/{id}', 'patch')->name('announcement.update');
            Route::delete('/announcement/delete/{id}', 'delete')->name('announcement.delete');
        });

        Route::controller(SliderController::class)->group(function () {
            Route::get('/slider/main', 'index')->name('slider.index');
            Route::get('/slider/main/search', 'search')->name('slider.search');
            Route::get('/slider/create', 'create')->name('slider.create');
            Route::post('/slider/create', 'store')->name('slider.store');
            Route::get('/slider/edit/{id}', 'edit')->name('slider.edit');
            Route::patch('/slider/edit/{id}', 'patch')->name('slider.update');
            Route::delete('/slider/delete/{id}', 'delete')->name('slider.delete');
        });

        Route::controller(ContactController::class)->group(function () {
            Route::get('/contact/main', 'index')->name('contact.index');
            Route::get('/contact/main/search', 'search')->name('contact.search');
            Route::get('/contact/create', 'create')->name('contact.create');
            Route::post('/contact/create', 'store')->name('contact.store');
            Route::get('/contact/edit/{id}', 'edit')->name('contact.edit');
            Route::patch('/contact/edit/{id}', 'patch')->name('contact.update');
            Route::delete('/contact/delete/{id}', 'delete')->name('contact.delete');
        });

        Route::controller(PageController::class)->group(function () {
            Route::get('/page/main', 'index')->name('page.index');
            Route::get('/page/main/search', 'search')->name('page.search');
            Route::get('/page/create', 'create')->name('page.create');
            Route::post('/page/create', 'store')->name('page.store');
            Route::get('/page/edit/{id}', 'edit')->name('page.edit');
            Route::patch('/page/edit/{id}', 'patch')->name('page.update');
            Route::delete('/page/delete/{id}', 'delete')->name('page.delete');
        });

        Route::controller(OlympaidController::class)->group(function () {
            Route::get('/olympaid/main', 'index')->name('olympaid.index');
            Route::get('/olympaid/main/search', 'search')->name('olympaid.search');
            Route::get('/olympaid/create', 'create')->name('olympaid.create');
            Route::post('/olympaid/create', 'store')->name('olympaid.store');
            Route::get('/olympaid/edit/{id}', 'edit')->name('olympaid.edit');
            Route::patch('/olympaid/edit/{id}', 'patch')->name('olympaid.update');
            Route::delete('/olympaid/delete/{id}', 'delete')->name('olympaid.delete');
        });

        Route::controller(UcurumlarController::class)->group(function () {
            Route::get('/uchurumlar/main', 'index')->name('uchurumlar.index');
            Route::get('/uchurumlar/main/search', 'search')->name('uchurumlar.search');
            Route::get('/uchurumlar/create', 'create')->name('uchurumlar.create');
            Route::post('/uchurumlar/create', 'store')->name('uchurumlar.store');
            Route::get('/uchurumlar/edit/{id}', 'edit')->name('uchurumlar.edit');
            Route::patch('/uchurumlar/edit/{id}', 'patch')->name('uchurumlar.update');
            Route::delete('/uchurumlar/delete/{id}', 'delete')->name('uchurumlar.delete');
        });

        Route::controller(UstunluklerController::class)->group(function () {
            Route::get('/ustunlukler/main', 'index')->name('ustunlukler.index');
            Route::get('/ustunlukler/main/search', 'search')->name('ustunlukler.search');
            Route::get('/ustunlukler/create', 'create')->name('ustunlukler.create');
            Route::post('/ustunlukler/create', 'store')->name('ustunlukler.store');
            Route::get('/ustunlukler/edit/{id}', 'edit')->name('ustunlukler.edit');
            Route::patch('/ustunlukler/edit/{id}', 'patch')->name('ustunlukler.update');
            Route::delete('/ustunlukler/delete/{id}', 'delete')->name('ustunlukler.delete');
        });

        Route::controller(YolbashcylarController::class)->group(function () {
            Route::get('/yolbashcylar/main', 'index')->name('yolbashcylar.index');
            Route::get('/yolbashcylar/main/search', 'search')->name('yolbashcylar.search');
            Route::get('/yolbashcylar/create', 'create')->name('yolbashcylar.create');
            Route::post('/yolbashcylar/create', 'store')->name('yolbashcylar.store');
            Route::get('/yolbashcylar/edit/{id}', 'edit')->name('yolbashcylar.edit');
            Route::patch('/yolbashcylar/edit/{id}', 'patch')->name('yolbashcylar.update');
            Route::delete('/yolbashcylar/delete/{id}', 'delete')->name('yolbashcylar.delete');
        });

        Route::controller(AboutController::class)->group(function () {
            Route::get('/about/main', 'index')->name('about.index');
            Route::get('/about/main/search', 'search')->name('about.search');
            Route::get('/about/create', 'create')->name('about.create');
            Route::post('/about/create', 'store')->name('about.store');
            Route::get('/about/edit/{id}', 'edit')->name('about.edit');
            Route::patch('/about/edit/{id}', 'patch')->name('about.update');
            Route::delete('/about/delete/{id}', 'delete')->name('about.delete');
        });
    }); // <-- closes Route::middleware('auth')->prefix('admin')->group
}); // <-- closes Route::middleware([SetLocale::class])->group
