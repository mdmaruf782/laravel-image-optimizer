<?php
use Laravel\ImageOptimizer\ImageOptimizer;


Route::get('/checkopti', function() {
	
   return ImageOptimizer::optimize('uploads/2.png',9,false);
});