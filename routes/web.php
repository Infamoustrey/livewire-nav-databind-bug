<?php

use App\Livewire\Page1Component;
use App\Livewire\Page2Component;
use Illuminate\Support\Facades\Route;

Route::get('/', Page1Component::class);
Route::get('/page-2', Page2Component::class);
