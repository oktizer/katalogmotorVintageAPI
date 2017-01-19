<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/motorcycle','MotorCycleController@viewAllCategory');
$app->get('/motorcycle/list/{id}','MotorCycleController@viewListMotorCycle');
$app->get('/motorcycle/list/detail/{id}','MotorCycleController@viewDetailMotorCycle');
$app->get('/motorcycle/list/detail/spec/{id}','MotorCycleController@viewSpecificationMotorCycle');
$app->get('/motorcycle/list/detail/feat/{id}','MotorCycleController@viewFeatureMotorCycle');
$app->get('/motorcycle/list/detail/acc/{id}','MotorCycleController@viewAccesoriesMotorCycle');
$app->get('/motorcycle/list/detail/srvc/{id}','MotorCycleController@viewServiceInfoMotorCycles');

$app->get('/news','NewsController@viewAllNews');
$app->get('/news/detail/{id}','NewsController@viewDetailNews');

$app->get('/events/detail/{id}','EventController@getDetailEvents');
$app->get('/events/calendar/{id}','EventController@sendEventToCalendar');
$app->get('/events/{lat}/{lng}','EventController@getAllEventRadius10km');


