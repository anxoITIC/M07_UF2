<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumnatController;

// Agrupar les rutes amb el middleware 'admin_db'
Route::middleware(['admin_db'])->group(function () {

    // Ruta POST per gestionar les dades d'usuaris
    Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');

    // Ruta GET per mostrar la vista de l'administrador
    Route::get('/admin_view', [AdminController::class, 'showAdminView'])->name('admin_view');

    // Ruta GET per mostrar la vista de gestió de centres
    Route::get('/centres', [AdminController::class, 'centres'])->name('centres');

    // Ruta GET per mostrar la vista de gestió de l'alumnat
    //Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');

    // Ruta per mostrar la llista d'alumnes
    Route::get('/alumnat', [AlumnatController::class, 'index'])->name('alumnat.index');

    // Ruta per mostrar el formulari de creació d'un nou alumne
    Route::get('/alumnat/create', [AlumnatController::class, 'create'])->name('alumnat.create');

    // Ruta per emmagatzemar un nou alumne creat a la base de dades
    Route::post('/alumnat', [AlumnatController::class, 'store'])->name('alumnat.store');

    // Ruta per mostrar els detalls d'un alumne específic
    Route::get('/alumnat/{alumne}', [AlumnatController::class, 'show'])->name('alumnat.show');

    // Ruta per mostrar el formulari d'edició d'un alumne específic
    Route::get('/alumnat/{alumne}/edit', [AlumnatController::class, 'edit'])->name('alumnat.edit');

    // Ruta per actualitzar les dades d'un alumne específic a la base de dades
    Route::put('/alumnat/{alumne}', [AlumnatController::class, 'update'])->name('alumnat.update');

    // Ruta per eliminar un alumne específic de la base de dades
    Route::delete('/alumnat/{alumne}', [AlumnatController::class, 'destroy'])->name('alumnat.destroy');

    // Ruta GET per mostrar la vista de gestió del professorat
    Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');
});