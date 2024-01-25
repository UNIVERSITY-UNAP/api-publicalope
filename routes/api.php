<?php

use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PharIo\Version\OrVersionConstraintGroup;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::resource('users', UserController::class);
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::match(['patch', 'put'], 'users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

Route::get('user-sessions', [UserSessionController::class, 'index']);
Route::post('user-sessions', [UserSessionController::class, 'store']);
Route::get('user-sessions/{id}', [UserSessionController::class, 'show']);
Route::match(['patch', 'put'], 'user-sessions/{id}', [UserSessionController::class, 'update']);
Route::delete('user-sessions/{id}', [UserSessionController::class, 'destroy']);

// Route::resource('roles', RoleController::class);
Route::get('roles', [RoleController::class, 'index']);
Route::post('roles', [RoleController::class, 'store']);
Route::get('roles/{id}', [RoleController::class, 'show']);
Route::match(['patch', 'put'], 'roles/{id}', [RoleController::class, 'update']);
Route::delete('roles/{id}', [RoleController::class, 'destroy']);

// Route::resource('organizers', OrganizerController::class);
Route::get('organizers/{id_organizer}/events', [OrganizerController::class, 'events']);
Route::get('organizers', [OrganizerController::class, 'index']);
Route::post('organizers', [OrganizerController::class, 'store']);
Route::get('organizers/{id}', [OrganizerController::class, 'show']);
Route::match(['patch', 'put'], 'organizers/{id}', [OrganizerController::class, 'update']);
Route::delete('organizers/{id}', [OrganizerController::class, 'destroy']);

// Route::resource('event-categories', EventCategoryController::class);
Route::get('event-categories', [EventCategoryController::class, 'index']);
Route::post('event-categories', [EventCategoryController::class, 'store']);
Route::get('event-categories/{id}', [EventCategoryController::class, 'show']);
Route::match(['patch', 'put'], 'event-categories/{id}', [EventCategoryController::class, 'update']);
Route::delete('event-categories/{id}', [EventCategoryController::class, 'destroy']);

// Route::resource('events', EventController::class);
Route::get('event', [EventController::class, 'index']);
Route::post('event', [EventController::class, 'store']);
Route::get('event/{id}', [EventController::class, 'show']);
Route::match(['patch', 'put'], 'event/{id}', [EventController::class, 'update']);
Route::delete('event/{id}', [EventController::class, 'destroy']);

// Route::resource('tickets', TicketController::class);
Route::get('tickets', [TicketController::class, 'index']);
Route::post('tickets', [TicketController::class, 'store']);
Route::get('tickets/{id}', [TicketController::class, 'show']);
Route::match(['patch', 'put'], 'tickets/{id}', [TicketController::class, 'update']);
Route::delete('tickets/{id}', [TicketController::class, 'destroy']);

// Route::resource('payments', PaymentController::class);
Route::get('payments', [PaymentController::class, 'index']);
Route::post('payments', [PaymentController::class, 'store']);
Route::get('payments/{id}', [PaymentController::class, 'show']);
Route::match(['patch', 'put'], 'payments/{id}', [PaymentController::class, 'update']);
Route::delete('payments/{id}', [PaymentController::class, 'destroy']);

// Route::resource('registrations', RegistrationController::class);
Route::get('registrations', [RegistrationController::class, 'index']);
Route::post('registrations', [RegistrationController::class, 'store']);
Route::get('registrations/{id}', [RegistrationController::class, 'show']);
Route::match(['patch', 'put'], 'registrations/{id}', [EventCategoryController::class, 'update']);
Route::delete('registrations/{id}', [RegistrationController::class, 'destroy']);


Route::get('permissions', [PermissionController::class, 'index']);
Route::post('permissions', [PermissionController::class, 'store']);
Route::get('permissions/{id}', [PermissionController::class, 'show']);
Route::match(['patch', 'put'], 'permissions/{id}', [PermissionController::class, 'update']);
Route::delete('permissions/{id}', [PermissionController::class, 'destroy']);


Route::get('role-permissions', [RolePermissionController::class, 'index']);
Route::post('role-permissions', [RolePermissionController::class, 'store']);
Route::get('role-permissions/{id}', [RolePermissionController::class, 'show']);
Route::match(['patch', 'put'], 'role-permissions/{id}', [RolePermissionController::class, 'update']);
Route::delete('role-permissions/{id}', [RolePermissionController::class, 'destroy']);