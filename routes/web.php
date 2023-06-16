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

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('view.home');

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
})->name('view.about');




Route::get('/blog', function () {
    $blog = [
        [
            'title' => "Judul Pertama",
            'slug' => 'judul-pertama',
            'author' => 'Lisman Arsilo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus repellat veritatis cupiditate ex! 
        Beatae vitae architecto, a esse vel amet inventore recusandae distinctio porro blanditiis enim consequuntur, libero quasi totam non sit ea impedit optio repellat 
        excepturi eum sunt fuga quis error. In cumque a aspernatur consequatur natus ullam sequi, quibusdam numquam minus illo sed reprehenderit dolorem provident vel suscipit, quis commodi, alias praesentium consequuntur at quia exercitationem? Labore explicabo dignissimos quibusdam iure molestiae omnis. Fugit, optio in, 
        sequi numquam beatae vel perferendis id suscipit ipsum, qui unde est. Optio consequatur nisi, fuga obcaecati aspernatur totam animi voluptas sunt? Ad?'
        ],
        [
            'title' => "Judul Kedua",
            'slug' => 'judul-kedua',
            'author' => 'Luluk Fitri',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus repellat veritatis cupiditate ex! 
        Beatae vitae architecto, a esse vel amet inventore recusandae distinctio porro blanditiis enim consequuntur, libero quasi totam non sit ea impedit optio repellat 
        excepturi eum sunt fuga quis error. In cumque a aspernatur consequatur natus ullam sequi, quibusdam numquam minus illo sed reprehenderit dolorem provident vel suscipit, quis commodi, alias praesentium consequuntur at quia exercitationem? Labore explicabo dignissimos quibusdam iure molestiae omnis. Fugit, optio in, 
        sequi numquam beatae vel perferendis id suscipit ipsum, qui unde est. Optio consequatur nisi, fuga obcaecati aspernatur totam animi voluptas sunt? Ad?'
        ]
    ];
    return view('posts.posts', ['title' => 'Posts', 'posts' => $blog]);
})->name('view.blog');

Route::get('/blog/{slug}', function ($slug) {
    $blog = [
        [
            'title' => "Judul Pertama",
            'slug' => 'judul-pertama',
            'author' => 'Lisman Arsilo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus repellat veritatis cupiditate ex! 
        Beatae vitae architecto, a esse vel amet inventore recusandae distinctio porro blanditiis enim consequuntur, libero quasi totam non sit ea impedit optio repellat 
        excepturi eum sunt fuga quis error. In cumque a aspernatur consequatur natus ullam sequi, quibusdam numquam minus illo sed reprehenderit dolorem provident vel suscipit, quis commodi, alias praesentium consequuntur at quia exercitationem? Labore explicabo dignissimos quibusdam iure molestiae omnis. Fugit, optio in, 
        sequi numquam beatae vel perferendis id suscipit ipsum, qui unde est. Optio consequatur nisi, fuga obcaecati aspernatur totam animi voluptas sunt? Ad?'
        ],
        [
            'title' => "Judul Kedua",
            'slug' => 'judul-kedua',
            'author' => 'Luluk Fitri',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus repellat veritatis cupiditate ex! 
        Beatae vitae architecto, a esse vel amet inventore recusandae distinctio porro blanditiis enim consequuntur, libero quasi totam non sit ea impedit optio repellat 
        excepturi eum sunt fuga quis error. In cumque a aspernatur consequatur natus ullam sequi, quibusdam numquam minus illo sed reprehenderit dolorem provident vel suscipit, quis commodi, alias praesentium consequuntur at quia exercitationem? Labore explicabo dignissimos quibusdam iure molestiae omnis. Fugit, optio in, 
        sequi numquam beatae vel perferendis id suscipit ipsum, qui unde est. Optio consequatur nisi, fuga obcaecati aspernatur totam animi voluptas sunt? Ad?'
        ]
    ];

    $newPost = [];
    foreach ($blog as $post) {
        if ($post['slug'] === $slug) $newPost = $post;
    }
    return view('posts.post', ['title' => 'Single Post', 'post' => $newPost]);
})->name('view.blog.slug');
