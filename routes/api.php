<?php

Route::get('user_address/{user_id}', 'UserController@user_address');
Route::get('user_articles/{user_id}', 'UserController@user_articles');
Route::get('user_roles/{user_id}', 'UserController@user_roles');
Route::get('country_posts/{country_id}', 'UserController@country_posts');