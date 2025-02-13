<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('index');
});

Route::get('/papers', [PaperController::class, 'papers'])->name('papers');
Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/download-pdf/{filename}', function ($filename) {
    $filePath = public_path('pdfs/' . $filename);

    // Ensure file exists
    if (file_exists($filePath)) {
        return response()->download($filePath, $filename);
    }

    return abort(404, 'File not found');
})->where('filename', '.*'); // Allows filenames with spaces, dots, etc.


