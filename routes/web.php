<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogCategoryController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\FaqsController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\PartnerController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ProcessController;
use App\Http\Controllers\admin\ProjectCategoryController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\ProjectMultiImageController;
use App\Http\Controllers\admin\ServiceMultiImageController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\SuccessController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\WhyUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeFaqsController;
use App\Http\Controllers\HomeGalleryController;
use App\Http\Controllers\HomeProjectController;
use App\Http\Controllers\HomeServicesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LetsTalkController;
use App\Http\Controllers\ProcessessController;
use App\Http\Controllers\ProfileController;
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
// User route
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/categories/{id}', [BlogController::class, 'category'])->name('blog.categories');
Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::get('about-us', AboutUsController::class)->name('about.us');
Route::resource('/all-services', HomeServicesController::class)->only(['index', 'show']);
Route::resource('/all-projects', HomeProjectController::class)->only(['index', 'show', 'edit']);
Route::get('/faqs', HomeFaqsController::class)->name('home.faq');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact.us');
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact.us.store');
Route::post('/lets-talk', [LetsTalkController::class, 'store'])->name('lets.talk.store');
Route::resource('galleries', HomeGalleryController::class)->only(['index']);
Route::get('/processes', ProcessessController::class)->name('processes.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Routes
Route::prefix('/admin')->group(function () {
    Route::resource('/dashboard', AdminController::class);
    Route::resource('/slider', SliderController::class);
    Route::resource('/services', ServicesController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/why-us', WhyUsController::class);
    Route::resource('/team', TeamController::class);
    Route::resource('/faqs', FaqsController::class);
    Route::resource('/testimonial', TestimonialController::class);
    Route::resource('/partners', PartnerController::class);
    Route::resource('/success-story', SuccessController::class);
    Route::resource('/project-category', ProjectCategoryController::class);
    Route::resource('/projects', ProjectController::class);
    Route::resource('/blog-category', BlogCategoryController::class);
    Route::resource('/blog/posts', PostController::class);
    Route::resource('/project/multi-image', ProjectMultiImageController::class);
    Route::resource('/Services/multiple-image', ServiceMultiImageController::class);
    Route::resource('/contact', ContactController::class);
    Route::get('/contact-us', [ContactUsController::class, 'show'])->name('contact.us.show');
    Route::get('/contact-us/{id}', [ContactUsController::class, 'edit'])->name('contact.us.edit');
    Route::delete('/contact-us/{id}', [ContactUsController::class, 'destroy'])->name('contact.us.destroy');
    Route::get('/lets-talk', [LetsTalkController::class, 'show'])->name('lets.talk.show');
    Route::get('/lets-talk/{id}', [LetsTalkController::class, 'edit'])->name('lets.talk.edit');
    Route::delete('/lets-talk/{id}', [LetsTalkController::class, 'destroy'])->name('lets.talk.destroy');
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/process', ProcessController::class);
});
