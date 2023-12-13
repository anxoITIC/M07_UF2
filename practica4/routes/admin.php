<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// Agrupar les rutes amb el middleware 'admin_db'
Route::middleware(['admin_db'])->group(function () {

    // Ruta POST per gestionar les dades d'usuaris
    Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');

    // Ruta GET per mostrar la vista de l'administrador
    Route::get('/admin_view', [AdminController::class, 'showAdminView'])->name('admin_view');

    // Ruta GET per mostrar la vista de gestió de centres
    Route::get('/centres', [AdminController::class, 'centres'])->name('centres');

    // Ruta GET per mostrar la vista de gestió de l'alumnat
    Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');

    // Ruta GET per mostrar la vista de gestió del professorat
    Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');
});