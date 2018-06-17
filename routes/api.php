<?php

Route::apiResource('/question', 'QuestionController');

Route::apiResource('/category', 'CategoryController');

Route::apiResource('/question/{question}/reply', 'ReplyController');

Route::post('/like/{replay}', 'LikeController@likeit');
Route::delete('/like/{replay}', 'LikeController@unlikeit');