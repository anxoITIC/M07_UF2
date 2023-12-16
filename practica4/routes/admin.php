<?php
use App\Http\Controllers\CentresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// Agrupar les rutes amb el middleware 'admin_db'
Route::middleware(['admin_db'])->group(function () {

    // Ruta POST per gestionar les dades d'usuaris
    Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');

    // Ruta GET per mostrar la vista de l'administrador
    Route::get('/admin_view', [AdminController::class, 'showAdminView'])->name('admin_view');

    // Ruta GET per mostrar la vista de gestió de centres
    Route::get('/centres', [CentresController::class, 'index'])->name('centres');

    // Ruta GET per mostrar la vista de gestió de l'alumnat
    Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');

    // Ruta GET per mostrar la vista de gestió del professorat
    Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');

    // Ruta per eliminar un registre de la taula 'centres' a partir de la seva ID
    Route::delete('/delete_centre/{centre}', [CentresController::class, 'destroy'])->name('delete_centre');

    // Ruta per mostrar el registre a editar de la taula 'centres' a partir de la seva ID
    Route::get('/edit_centre/{centre}', [CentresController::class, 'show'])->name('show_centre');

    // Ruta per editar un registre de la taula 'centres' a partir de la seva ID
    Route::put('/edit_centre/{centre}/edit', [CentresController::class, 'edit'])->name('edit_centre');

    // Ruta per afegir un registre a la taula 'centres'
    Route::get('/create_centre', [CentresController::class, 'create'])->name('create_centre');

    // Ruta per afegir un registre a la taula 'centres'
    Route::post('/store_centre', [CentresController::class, 'store'])->name('store_centre');
});