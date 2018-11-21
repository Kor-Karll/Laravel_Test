<?php
//use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello',function(){
   return 'Hello!';
});

Route::get('hello/world/{name?}',function($name = '기본이름'){
//    $response = new Response('Hello World '.$name , 200);
//    $response->header('Content-Type','text/plain');
    $response = response('Hello World '.$name,200)->header('Content-Type','text/plain');
    return $response;
});

Route::get('hello/json',function(){
   $data = ['name' => 'Iron Man','gender' => 'Man'];

   return response()->json($data);
});

Route::get('hello/html',function(){
   $content = <<<HTML

<!doctype html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>OK</title>
    </head>
    <body>
        <h1>라라벨이란?</h1>
        <h3>라라벨은 가장 모던하고 세련된 PHP 프레임워크이며, 유연하고 세련된 기능을 제공합니다.</h3>
    </body>
</html>
HTML;
   return $content;
});

Route::get('hello/html',function(){
   return View::make('hello.html');
   return view('hello.html');
});

Route::get('task/view',function(){
   $task = ['name'=>'Task 1','due_date'=>'2015-06-01 12:00:11'];
//   return view('task.view',compact('task'));
   return view('task.view')->with('task',$task);
});

Route::get('task/alert',function() {
    $task = ['name' => '라라벨 예제 작성',
        'due_date' => '2015-06-01 11:22:33',
        'comment' => '<script>alert("Welcome");<script>'
    ];
    return view('task/alert')->with('task',$task);
});

Route::get('calc/{num}',function($num){
    return view('calc')->with('num',$num);
});