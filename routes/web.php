<?php

use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
 
Volt::route('/', 'homepage');
Volt::route('/volttest', 'volttest');
Route::get('/welcome', Welcome::class);
