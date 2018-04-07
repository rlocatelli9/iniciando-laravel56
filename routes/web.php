<?php
use Illuminate\Http\Request;
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
    return view('welcome');
});

/**
 * quando for necessário criar rotas onde algum argumento seja opcional (colocando ?), 
 * é necessário criar um valor padrão caso o argumento não seja passado.
 */
Route::get('rota/{id}/{name?}', function ($id, $name = "Usuário"){
    return "Cliente $id, $name";
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('client', function(){
   $token = csrf_token();
   $action = route('client.store');
    $html = <<<HTML
    <html>
        <body>
            <form method="POST" action="$action">
                <input type="hidden" name="_token" value="$token" >
                <input type="text" name="value"/>
                <button type="submit">Enviar</submit>
            </form>
        </body>
    </html>
HTML;

    return $html;
});

/**
 * rotas para fazer uma requisição POST
 */

Route::post('cliente', function(Request $request){
    return $request->get('value');
})->name('client.store');