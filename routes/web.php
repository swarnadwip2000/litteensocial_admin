<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PromotionalMailController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\AdvertiserController;
use App\Http\Controllers\SubscriberController;
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

Route::get('/admin', function () {
    return view('admin/login');
});
Route::post('logindb', [AdminController::class, 'logindb']);
Route::get('logout', [AdminController::class, 'logout']);
Route::get('dashboard', [AdminController::class, 'dashboard']);

Route::get('usermanagement', [AdminController::class, 'usermanagement']);
Route::get('list_user', [AdminController::class, 'list_user']);
Route::post('saveusermanagement', [AdminController::class, 'saveusermanagement']);
Route::get('/update_usermanagement', [AdminController::class, 'update_usermanagement']);
Route::get('delete_usermanagement/{id}', [AdminController::class, 'delete_usermanagement']);
Route::get('addusermanagement', [AdminController::class, 'addusermanagement']);

Route::get('addadvertiser', [AdminController::class, 'addadvertiser']);
Route::get('listadvertiser', [AdminController::class, 'listadvertiser']);
Route::get('listadvertisements', [AdminController::class, 'listadvertisements']);
Route::get('advertiserChangeStatus', [AdminController::class, 'advertiserChangeStatus'])->name('admin.advertiser.change-status');
Route::get('admin-advertisment-delete/{id}', [AdminController::class, 'advertismentDelete'])->name('admin.advertisment.delete');



Route::post('saveadvertiser', [AdminController::class, 'saveadvertiser']);
Route::get('/update_advertiser', [AdminController::class, 'update_advertiser']);
Route::get('delete_advertiser/{id}', [AdminController::class, 'delete_advertiser']);
Route::get('/view_usermanagement', [AdminController::class, 'view_usermanagement']);
Route::get('/view_advertiser', [AdminController::class, 'view_advertiser']);

Route::get('addsettings', [AdminController::class, 'addsettings']);
Route::get('listsettings', [AdminController::class, 'listsettings']);
Route::post('savesettings', [AdminController::class, 'savesettings']);
Route::get('/update_settings', [AdminController::class, 'update_settings']);
Route::get('/view_settings', [AdminController::class, 'view_settings']);

Route::get('listinterests', [AdminController::class, 'listinterests']);

Route::post('saveinterests', [AdminController::class, 'saveinterests']);
Route::get('/update_interests', [AdminController::class, 'update_interests']);
Route::get('delete_interests/{id}', [AdminController::class, 'delete_interests']);
Route::get('addinterests', [AdminController::class, 'addinterests']);
Route::get('delete_pic/{id}/{type}', [AdminController::class, 'delete_pic']);
Route::get('settingdelete_pic/{id}/{type}', [AdminController::class, 'settingdelete_pic']);


Route::post('savenewsfeed', [AdminController::class, 'savenewsfeed']);
Route::get('updatenewsfeed', [AdminController::class, 'updatenewsfeed']);
Route::get('deletenewsfeed', [AdminController::class, 'deletenewsfeed']);
Route::get('addnewsfeed', [AdminController::class, 'addnewsfeed']);
Route::get('listnewsfeed', [AdminController::class, 'listnewsfeed']);
Route::get('deletenewsfeedcomment/{id}', [AdminController::class, 'deletenewsfeedcomment']);


Route::post('savestories', [AdminController::class, 'savestories']);
Route::get('updatestories', [AdminController::class, 'updatestories']);
Route::get('deletestories', [AdminController::class, 'deletestories']);
Route::get('addstories', [AdminController::class, 'addstories']);
Route::get('liststories', [AdminController::class, 'liststories']);


Route::post('savesubscribe', [AdminController::class, 'savesubscribe']);
Route::get('updatesubscribe', [AdminController::class, 'updatesubscribe']);
Route::get('deletesubscribe/{id}', [AdminController::class, 'deletesubscribe']);
Route::get('addsubscribe', [AdminController::class, 'addsubscribe']);
Route::get('listsubscribe', [AdminController::class, 'listsubscribe']);

Route::post('saveadvertisements', [AdminController::class, 'saveadvertisements']);
Route::get('updateadvertisements', [AdminController::class, 'updateadvertisements']);
Route::get('deleteadvertisements/{id}', [AdminController::class, 'deleteadvertisements']);
Route::get('addadvertisements', [AdminController::class, 'addadvertisements']);
Route::get('listadvertisements', [AdminController::class, 'listadvertisements']);

Route::get('add_stories_time_duration', [AdminController::class, 'add_stories_time_duration']);
Route::get('list_stories_time_duration', [AdminController::class, 'list_stories_time_duration']);
Route::post('save_stories_time_duration', [AdminController::class, 'save_stories_time_duration']);
Route::get('/update_stories_time_duration', [AdminController::class, 'update_stories_time_duration']);
Route::get('delete_stories_time_duration/{id}', [AdminController::class, 'delete_stories_time_duration']);

Route::get('/email-template-1', [PromotionalMailController::class, 'email_template_1'])->name('email-template-1');
Route::get('/email-template-2', [PromotionalMailController::class, 'email_template_2'])->name('email-template-2');
Route::get('/email-template-3', [PromotionalMailController::class, 'email_template_3'])->name('email-template-3');
Route::get('/send-promotionl-email/{type}', [PromotionalMailController::class, 'send_promotion_email'])->name('send-promotionl-email');

Route::prefix('plans')->name('plans.')->group(function() {
    Route::get('/',[PlanController::class, 'list'])->name('index');
    Route::get('/create',[PlanController::class, 'create'])->name('create');
    Route::post('/store',[PlanController::class, 'store'])->name('store');
    Route::get('/edit/{id}',[PlanController::class, 'edit'])->name('edit');
    Route::post('/update',[PlanController::class, 'update'])->name('update');
});

Route::prefix('subscribers')->name('subscribers.')->group(function() {
    Route::get('/',[SubscriberController::class, 'list'])->name('index');
});

Route::get('/cronsStartToWorkEmailSend', function () {
    Artisan::call('queue:listen');
    return "shedule run succcessfully.";
});

Route::get('/runShedule', function () {
    Artisan::call('schedule:run');
    return "Cron hit perfectly.";
});

/****************************************************Frontend ***************************************************************** */
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login-check', [AuthController::class, 'loginCheck'])->name('login.check');
Route::post('/register-store', [AuthController::class, 'registerStore'])->name('register.store');

Route::group(['prefix'=>'advertiser','middleware'=>'advertiser'], function () {
    Route::get('/', [AdvertiserController::class, 'index'])->name('advertiser.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/add-advertisment', [AdvertiserController::class, 'addAdvertisment'])->name('advertisment.add');
    Route::get('/edit-advertisment/{id}', [AdvertiserController::class, 'editAdvertisment'])->name('advertisment.edit');
    Route::post('/update-advertisment', [AdvertiserController::class, 'updateAdvertisment'])->name('advertisment.update');
    Route::post('/advertiser-stripe-payment', [AdvertiserController::class, 'advertiserStripePayment'])->name('advertiser.stripe.payment');
    Route::get('/advertisment-delete/{id}', [AdvertiserController::class, 'advertismentDelete'])->name('advertisment.delete');

 });
 Route::get('advertiser/fetchPlans', [AdvertiserController::class, 'fetchPlans']);
 Route::get('/show-plan-price', [AdvertiserController::class, 'planPrice'])->name('show.plan-price');
?>
