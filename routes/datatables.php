<?php

use App\Livewire\Backend\{
    Volunteer\Datatables as VolunteerDatatables,
};
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Datatables Routes
|--------------------------------------------------------------------------
|
| Here is where you can register datatable routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "datatable" middleware group. Make something great!
|
*/

// Grouping datatable routes
Route::prefix('livewire/backend/')->group(function () {
    // Route for list what i dos page
    Route::get('volunteer/getDatatable', [VolunteerDatatables::class, 'getDatatable'])
        ->name('volunteer.getDatatable');
});
