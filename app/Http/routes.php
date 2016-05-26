<?php

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
use App\Task;
use Illuminate\Http\Request;

/*  Default code
Route::get('/', function () {
	$people = ['Abby', 'Hsu'];
	return view('welcome',['people' => $people]);
});
*/

Route::group(['middleware' => ['web']], function () {
     /**
     * Show Task Dashboard
     */
     Route::get('/', function () {
         'tasks' => Task::orderBy('created_at', 'asc')->get();
         return view('tasks', [ 'task' => $tasks ]);
     });
     
     /**
     * Show all tasks.
     */

	/**
 	* Add a new task
    * 驗證輸入的部分：
    * 要讓name欄位為必填，且要少於255字元。
    * 如果驗證失敗，我們會將使用者導回 / URL，並將舊的輸入和錯誤訊息輸入至session
 	*/
	Route::post('/task', function(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
        ]);

        if($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
	});


	/**
	 * Delete an exited task.
	 */
	Route::delete('task/{task}', function(Task $task){
        //
	});
});
