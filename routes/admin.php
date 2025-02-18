<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PostTagController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ShippingController;
use App\Http\Controllers\Admin\UserRelationshipController;
use App\Http\Controllers\Admin\VendorController;



use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PermissionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\Auth\RolePermissionController;
use App\Http\Controllers\Auth\UserRoleController;
use App\Http\Controllers\Client\ContactUsController;
use App\Http\Controllers\Client\ProductReviewController;
    // CACHE CLEAR ROUTE
    Route::get('cache-clear', function () {
        Artisan::call('optimize:clear');
        return redirect()->back()->with ('success','Successfully cache cleared.');
    })->name('cache.clear');
    // STORAGE LINKED ROUTE
    Route::get('storage-link',[DashboardController::class,'storageLink'])->name('storage.link');

Route::middleware(['check_login'])->group(
    function () {
        Route::prefix('admin')->name('admin.')->group(function () {

            Route::get('/notification/{id}', [NotificationController::class, 'show'])->name('notification');
            Route::get('/notifications', [NotificationController::class, 'index'])->name('all.notification');
            Route::delete('/notification/{id}', [NotificationController::class, 'delete'])->name('notification.delete');
            Route::prefix('review')->controller(ProductReviewController::class)->name('review.')->group(function () {
                Route::get('index', 'index')->name('index');

            });
            Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
            Route::prefix('setting')->controller(SettingController::class)->name('setting.')->group(function () {
                Route::get('index', 'settings')->name('index');
                Route::post('update', 'settingsUpdate')->name('update');
            });
            Route::prefix('category')->controller(CategoryController::class)->name('category.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('banner')->controller(BannerController::class)->name('banner.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');

                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('shipping')->controller(ShippingController::class)->name('shipping.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');

                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('message')->controller(ContactUsController::class)->name('message.')->group(function () {
                Route::get('show/{id}', 'show')->name('show');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('sub_category')->controller(SubCategoryController::class)->name('sub_category.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('show/{id}', 'show')->name('show');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('product')->controller(ProductController::class)->name('product.')->group(function () {
                Route::get('create', 'create')->name('create');
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::get('show/{id}', 'show')->name('show');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
                Route::post('getSubcategories', 'getSubcategories')->name('getSubcategories');
            });
            Route::prefix('user_relationship')->controller(UserRelationshipController::class)->name('user_relationship.')->group(function () {
                Route::get('create', 'create')->name('create');
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::get('show/{id}', 'show')->name('show');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('brand')->controller(BrandController::class)->name('brand.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('show/{id}', 'show')->name('show');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('user')->controller(UserController::class)->name('user.')->group(function () {
                Route::get('create', 'create')->name('create');
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::get('show/{id}', 'show')->name('show');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('vendor')->controller(VendorController::class)->name('vendor.')->group(function () {
                Route::get('create', 'create')->name('create');
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::get('show/{id}', 'show')->name('show');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('admin')->controller(AdminController::class)->name('admin.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('message_contact', 'message_contact')->name('message_contact');
            });
            Route::prefix('customer')->controller(CustomerController::class)->name('customer.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
            });
            // ? Route Post
            Route::prefix('post')->controller(PostController::class)->name('post.')->group(function () {
                Route::get('create', 'create')->name('create');
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::get('show/{id}', 'show')->name('show');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('post-tag')->controller(PostTagController::class)->name('post-tag.')->group(function () {
                Route::get('create', 'create')->name('create');
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::get('show/{id}', 'show')->name('show');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('post-category')->controller(PostCategoryController::class)->name('post-category.')->group(function () {
                Route::get('create', 'create')->name('create');
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::get('show/{id}', 'show')->name('show');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            // ? Route phân quyền

            Route::prefix('role')->controller(RoleController::class)->name('role.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('permission')->controller(PermissionController::class)->name('permission.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('order')->controller(OrderController::class)->name('order.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('show/{id}', 'show')->name('show');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('edit/{id}', 'edit')->name('edit');

            });
            Route::prefix('role_permission')->controller(RolePermissionController::class)->name('role_permission.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });
            Route::prefix('user_role')->controller(UserRoleController::class)->name('user_role.')->group(function () {
                Route::get('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('destroy/{id}', 'destroy')->name('destroy');
            });


            //?Route thông báo
            Route::patch('markAsRead/{notificationId}', [NotificationController::class, 'markAsRead'])
                ->name('markAsRead');
        });
    }
);
// ? Route đăng nhập
Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

// ? Route 404
Route::fallback(function () {
    return view('error.error');
});
