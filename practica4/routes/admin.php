<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfessorsController;

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
    Route::get('/professorat', [ProfessorsController::class, 'index'])->name('professor.index');

    // Ruta per mostrar el formulari de creació d'un nou alumne
    Route::get('/professorat/create', [ProfessorsController::class, 'create'])->name('professor.create');

    // Ruta per emmagatzemar un nou alumne creat a la base de dades
    Route::post('/professorat', [ProfessorsController::class, 'store'])->name('professor.store');

    // Ruta per mostrar els detalls d'un alumne específic
    Route::get('/professorat/{professor}', [ProfessorsController::class, 'show'])->name('professor.show');

    // Ruta per mostrar el formulari d'edició d'un alumne específic
    Route::get('/professorat/{professor}/edit', [ProfessorsController::class, 'edit'])->name('professor.edit');

    // Ruta per actualitzar les dades d'un alumne específic a la base de dades
    Route::put('/professorat/{professor}', [ProfessorsController::class, 'update'])->name('professor.update');

    // Ruta per eliminar un alumne específic de la base de dades
    Route::delete('/professorat/{professor}', [ProfessorsController::class, 'destroy'])->name('professor.destroy');

    // Ruta GET per mostrar la vista de gestió del professorat
    Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');
});