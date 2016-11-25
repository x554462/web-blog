<?php
use Test\Test;

/**
 * \HomeController
 */
class HomeController extends BaseController {
    public function home() {
        var_dump((new \Test\Test())->test());
//         var_dump(\Test\Test::first());
        Log::debug('First Debug Info.');
//         return View::make('home')->with('article', Article::first())->withTitle('TinyLara :-D')->withFooBar('foo_bar');
        
        return 'Hello TinyLara!';
    }
}