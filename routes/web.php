<?php



Route::group(array('middleware' => ['auth']), function () {
    Route::group(array('prefix' => 'admin'), function () {
        Route::get("/admin", "AdminController@index");


        Route::get("/coach/{id}/print", "CoachController@print")->name('coach.{id}.print');
        Route::get("/coach/delete", "CoachController@destroy")->name('coach.destroy.new');
        Route::resource('coach', 'CoachController');

        Route::get("/courses/{id}/print", "CoursesController@print")->name('courses.{id}.print');
        Route::get("/courses/delete", "CoursesController@destroy")->name('courses.destroy.new');
        Route::resource('courses', 'CoursesController');

        Route::get("/student/{id}/print", "StudentController@print")->name('student.{id}.print');
        Route::get("/student/delete", "StudentController@destroy")->name('student.destroy.new');
        Route::resource('student', 'StudentController');

        Route::group(array('middleware' => ['editor']), function () {
            Route::get("/advertisement/delete", "AdvertisementController@destroy")->name('advertisement.destroy.new');
            Route::resource('advertisement', 'AdvertisementController');

            Route::get("/slider/delete", "SliderController@destroy")->name('slider.destroy.new');
            Route::resource('slider', 'SliderController');

            Route::get("/news/delete", "NewsController@destroy")->name('news.destroy.new');
            Route::resource('news', 'NewsController');
        });

        Route::get("/suggested/delete", "SuggestedController@destroy")->name('suggested.courses.destroy.new');
        Route::get("/suggested", "SuggestedController@index")->name('suggested.courses.index');

        Route::get('get/coach/from/courses', 'StudentController@getCoachFromCourse')->name('get.coach.from.courses');

        Route::get("report1","AdminController@report1")->name('report1');
        Route::get("report2","AdminController@report2")->name('report2');

    });
});
Route::post("/homepage","HomePageController@suggested")->name('home.page.suggested');
Route::get("/homepage/registration","HomePageController@registration")->name('home.page.registration');
Route::post("/homepage/registration","HomePageController@registrationCreate")->name('home.page.registration');

Route::get("/homepage","HomePageController@pagHome")->name('home.page.pagHome');
Route::get("/homepage/about","HomePageController@about")->name('home.page.about');

Route::get("/homepage/read/more","HomePageController@readMore")->name('home.page.read.more');
Route::get("/homepage/news","HomePageController@news")->name('home.page.news');

//Route::get('/logout', 'Auth\LoginController@logout');
//Auth::routes();

Auth::routes(['register' => false]);
Route::get("logout","Auth\LoginController@logout")->name('home.logout');
