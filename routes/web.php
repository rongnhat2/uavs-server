<?php

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

Route::get('/', 'Customer\DisplayController@index')->name('customer.index');
Route::get('about', 'Customer\DisplayController@about')->name('customer.about');
Route::get('event', 'Customer\DisplayController@event')->name('customer.event');
Route::get('sponsor', 'Customer\DisplayController@sponsor')->name('customer.sponsor');
Route::get('blog', 'Customer\DisplayController@blog')->name('customer.blog');
Route::get('contact', 'Customer\DisplayController@contact')->name('customer.contact'); 
Route::get('register', 'Customer\DisplayController@register')->name('customer.register'); 


Route::get('news', 'Customer\DisplayController@news')->name('customer.news');
Route::get('news-detail', 'Customer\DisplayController@news_detail')->name('customer.news_detail');

Route::prefix('customer')->group(function () {
    Route::prefix('apip')->group(function () {
        Route::prefix('testimonials')->group(function () {
            Route::get('/get', 'Admin\TestimonialsController@customer_get')->name('admin.testimonials.get');
        });
        Route::prefix('information')->group(function () {
            Route::get('/get', 'Admin\AboutController@get')->name('admin.information.get');
        });
        Route::prefix('event')->group(function () {
            Route::get('/get', 'Admin\NewsController@customer_get')->name('admin.event.get');
        });
        Route::prefix('partner')->group(function () {
            Route::get('/get', 'Admin\PartnersController@get')->name('admin.partners.get');
        });
        Route::prefix('executive')->group(function () {
            Route::get('/get', 'Admin\ExecutiveController@get')->name('admin.executive.get');
        });

        Route::prefix('news')->group(function () {
            Route::get('/get', 'Admin\NewsController@get')->name('admin.news.get'); 
        });

        Route::prefix('news-category')->group(function () {
            Route::get('/get', 'Admin\NewsController@category_get')->name('admin.news.get'); 
        });
        

        Route::prefix('future')->group(function () {
            Route::get('/get', 'Admin\FutureController@get')->name('admin.future.get'); 
        });

        Route::prefix('future-category')->group(function () {
            Route::get('/get', 'Admin\FutureController@category_get')->name('admin.future.get'); 
        });

        Route::prefix('current')->group(function () {
            Route::get('/get', 'Admin\CurrentController@get')->name('admin.current.get'); 
        });

        Route::prefix('current-category')->group(function () {
            Route::get('/get', 'Admin\CurrentController@category_get')->name('admin.current.get'); 
        });

        Route::prefix('community')->group(function () {
            Route::get('/get', 'Admin\CommunityController@get')->name('admin.community.get');
        });

        Route::prefix('message')->group(function () {
            Route::post('/store', 'Admin\MessageController@store')->name('admin.message.store'); 
        });

    });
});

Route::middleware(['AuthAdmin:auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/login', 'Admin\DisplayController@login')->name('admin.login');
        Route::post('/login', 'Admin\AuthController@login')->name('admin.login');
    });
});

Route::middleware(['AuthAdmin:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::post('logout', 'Admin\AuthController@logout')->name('admin.logout');
        
        Route::get('/', 'Admin\DisplayController@index')->name('admin.index');

        Route::prefix('message')->group(function () {
            Route::get('/', 'Admin\MessageController@index')->name('admin.message.index');
        });
        Route::prefix('about')->group(function () {
            Route::get('/', 'Admin\AboutController@index')->name('admin.about.index');
        });
        Route::prefix('executive')->group(function () {
            Route::get('/', 'Admin\ExecutiveController@index')->name('admin.executive.index');
        });
        Route::prefix('testimonials')->group(function () {
            Route::get('/', 'Admin\TestimonialsController@index')->name('admin.testimonials.index');
        });
        Route::prefix('partners')->group(function () {
            Route::get('/', 'Admin\PartnersController@index')->name('admin.partners.index');
        });
        Route::prefix('community')->group(function () {
            Route::get('/', 'Admin\CommunityController@index')->name('admin.community.index');
        });
        Route::prefix('future')->group(function () {
            Route::get('/', 'Admin\FutureController@index')->name('admin.future.index');
        });
        Route::prefix('current')->group(function () {
            Route::get('/', 'Admin\CurrentController@index')->name('admin.current.index');
        });
        Route::prefix('news')->group(function () {
            Route::get('/', 'Admin\NewsController@index')->name('admin.news.index');
        });


    });

    Route::prefix('apip')->group(function () {
        Route::post('post-image', 'Admin\DisplayController@image')->name('admin.image.post');

        Route::prefix('about')->group(function () {
            Route::get('/get', 'Admin\AboutController@get')->name('admin.about.get'); 
            Route::post('/update', 'Admin\AboutController@update')->name('admin.about.update'); 
        });

        Route::prefix('testimonials')->group(function () {
            Route::get('/get', 'Admin\TestimonialsController@get')->name('admin.testimonials.get');
            Route::post('/store', 'Admin\TestimonialsController@store')->name('admin.testimonials.store');
            Route::get('/get-one/{id}', 'Admin\TestimonialsController@get_one')->name('admin.testimonials.get_one');
            Route::post('/update', 'Admin\TestimonialsController@update')->name('admin.testimonials.update');
            Route::get('/delete/{id}', 'Admin\TestimonialsController@delete')->name('admin.testimonials.delete');
        });

        Route::prefix('partners')->group(function () {
            Route::get('/get', 'Admin\PartnersController@get')->name('admin.partners.get');
            Route::post('/store', 'Admin\PartnersController@store')->name('admin.partners.store');
            Route::get('/get-one/{id}', 'Admin\PartnersController@get_one')->name('admin.partners.get_one');
            Route::post('/update', 'Admin\PartnersController@update')->name('admin.partners.update');
            Route::get('/delete/{id}', 'Admin\PartnersController@delete')->name('admin.partners.delete');
        });

        Route::prefix('community')->group(function () {
            Route::get('/get', 'Admin\CommunityController@get')->name('admin.community.get');
            Route::post('/store', 'Admin\CommunityController@store')->name('admin.community.store');
            Route::get('/get-one/{id}', 'Admin\CommunityController@get_one')->name('admin.community.get_one');
            Route::post('/update', 'Admin\CommunityController@update')->name('admin.community.update');
            Route::get('/delete/{id}', 'Admin\CommunityController@delete')->name('admin.community.delete');
        });

        Route::prefix('future')->group(function () {
            Route::get('/get', 'Admin\FutureController@get')->name('admin.future.get');
            Route::post('/store', 'Admin\FutureController@store')->name('admin.future.store');
            Route::get('/get-one/{id}', 'Admin\FutureController@get_one')->name('admin.future.get_one');
            Route::post('/update', 'Admin\FutureController@update')->name('admin.future.update');
            Route::get('/delete/{id}', 'Admin\FutureController@delete')->name('admin.future.delete');
        });

        Route::prefix('future-category')->group(function () {
            Route::get('/get', 'Admin\FutureController@category_get')->name('admin.future.get');
            Route::post('/store', 'Admin\FutureController@category_store')->name('admin.future.store');
            Route::get('/get-one/{id}', 'Admin\FutureController@category_get_one')->name('admin.future.get_one');
            Route::post('/update', 'Admin\FutureController@category_update')->name('admin.future.update');
            Route::get('/delete/{id}', 'Admin\FutureController@category_delete')->name('admin.future.delete');
        });

        Route::prefix('current')->group(function () {
            Route::get('/get', 'Admin\CurrentController@get')->name('admin.current.get');
            Route::post('/store', 'Admin\CurrentController@store')->name('admin.current.store');
            Route::get('/get-one/{id}', 'Admin\CurrentController@get_one')->name('admin.current.get_one');
            Route::post('/update', 'Admin\CurrentController@update')->name('admin.current.update');
            Route::get('/delete/{id}', 'Admin\CurrentController@delete')->name('admin.current.delete');
        });

        Route::prefix('current-category')->group(function () {
            Route::get('/get', 'Admin\CurrentController@category_get')->name('admin.current.get');
            Route::post('/store', 'Admin\CurrentController@category_store')->name('admin.current.store');
            Route::get('/get-one/{id}', 'Admin\CurrentController@category_get_one')->name('admin.current.get_one');
            Route::post('/update', 'Admin\CurrentController@category_update')->name('admin.current.update');
            Route::get('/delete/{id}', 'Admin\CurrentController@category_delete')->name('admin.current.delete');
        });

        Route::prefix('news')->group(function () {
            Route::get('/get', 'Admin\NewsController@get')->name('admin.news.get');
            Route::post('/store', 'Admin\NewsController@store')->name('admin.news.store');
            Route::get('/get-one/{id}', 'Admin\NewsController@get_one')->name('admin.news.get_one');
            Route::post('/update', 'Admin\NewsController@update')->name('admin.news.update');
            Route::get('/delete/{id}', 'Admin\NewsController@delete')->name('admin.news.delete');
        });

        Route::prefix('news-category')->group(function () {
            Route::get('/get', 'Admin\NewsController@category_get')->name('admin.news.get');
            Route::post('/store', 'Admin\NewsController@category_store')->name('admin.news.store');
            Route::get('/get-one/{id}', 'Admin\NewsController@category_get_one')->name('admin.news.get_one');
            Route::post('/update', 'Admin\NewsController@category_update')->name('admin.news.update');
            Route::get('/delete/{id}', 'Admin\NewsController@category_delete')->name('admin.news.delete');
        });

        Route::prefix('executive')->group(function () {
            Route::get('/get', 'Admin\ExecutiveController@get')->name('admin.executive.get');
            Route::post('/store', 'Admin\ExecutiveController@store')->name('admin.executive.store');
            Route::get('/get-one/{id}', 'Admin\ExecutiveController@get_one')->name('admin.executive.get_one');
            Route::post('/update', 'Admin\ExecutiveController@update')->name('admin.executive.update');
            Route::get('/delete/{id}', 'Admin\ExecutiveController@delete')->name('admin.executive.delete');
        });

        Route::prefix('message')->group(function () {
            Route::get('/get', 'Admin\MessageController@get')->name('admin.message.get');
            Route::post('/store', 'Admin\MessageController@store')->name('admin.message.store');
            Route::get('/get-one/{id}', 'Admin\MessageController@get_one')->name('admin.message.get_one');
            Route::post('/update', 'Admin\MessageController@update')->name('admin.message.update');
            Route::get('/delete/{id}', 'Admin\MessageController@delete')->name('admin.message.delete');
        });
    });
});