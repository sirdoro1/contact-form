<?php

Route::group(['namespace'=>'Sirdoro\Contact\Http\Controllers','middleware'=>'web'],function(){
  
  Route::get('contact',[
    'uses'=>'ContactController@index',
    'as'=>'contact'
  ]);

  Route::post('contact',[
    'uses'=>'ContactController@send',
    'as'=> 'contact'
  ]);
});
