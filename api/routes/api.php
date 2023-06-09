<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NodeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NamespaceController;
use App\Http\Controllers\PodController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeploymentController;

/* --- [API Routes] -> Users --- */
Route::resource('users', UserController::class);
Route::get('user', [UserController::class, 'showUserLoggedIn'])->middleware('auth:api');

/* --- [API Routes] -> Auth --- */
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');

/* --- [API Routes] -> Nodes --- */
Route::get('nodes', [NodeController::class, 'getAllNodes']);
Route::get('nodes/master', [NodeController::class, 'getMasterNodes']);
Route::get('nodes/download-script', [NodeController::class, 'downloadScript']);
Route::post('nodes/create', [NodeController::class, 'registerMasterNode']);
Route::delete('nodes/delete/{id}', [NodeController::class, 'deleteMasterNode']);
Route::delete('nodes/delete/{id}', [NodeController::class, 'deleteMasterNode']);

/* --- [API Routes] -> Namespaces --- */
Route::get('namespaces', [NamespaceController::class, 'getNamespaces']);
Route::post('namespaces/create', [NamespaceController::class, 'registerNamespace']);
Route::delete('namespaces/delete/{name}', [NamespaceController::class, 'deleteNamespace']);

/* --- [API Routes] -> Pods --- */
Route::get('pods', [PodController::class, 'getPods']);
Route::post('pods/create', [PodController::class, 'createPod']);
Route::delete('pods/delete/{name}', [PodController::class, 'deletePod']);

/* --- [API Routes] -> Services --- */
Route::get('services', [ServiceController::class, 'getServices']);
Route::post('services/create', [ServiceController::class, 'createService']);
Route::delete('services/delete/{name}', [ServiceController::class, 'deleteService']);

/* --- [API Routes] -> Deployments --- */
Route::get('deployments', [DeploymentController::class, 'getDeployments']);
Route::post('deployments/create', [DeploymentController::class, 'registerDeployment']);
Route::delete('deployments/delete/{name}', [DeploymentController::class, 'deleteDeployment']);

/* --- [API Routes] -> Dashboard --- */
Route::get('metrics', [DashboardController::class, 'metrics']);
Route::get('logs', [DashboardController::class, 'logs']);
Route::get('resources', [DashboardController::class, 'resourceUsages']);
