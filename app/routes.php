<?php defined('DS') or die('No direct script access.');

/*
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

View::share('prout', 'some data');

Route::get('home', function(){

    return View::make('home');

});

Route::any('page', array('sample-page', function()
{
    $inputs = Input::all();

    $values = Validator::multiple($inputs, array(
        'acteur'    => array('min:5'),
        'director'  => array('email')
    ));

    return View::make('pages.sample', array('inputs' => $values));
}));
