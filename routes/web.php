<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\SkillsController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ResumeController::class,'index']);

Route::get('/web', [ResumeController::class,'index']);

Route::prefix('/admin/about')->group(function(){
    Route::get('/{id}/edit', [AboutController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [AboutController::class, 'update'])->name('update');
    Route::get('/{id}/delete', [AboutController::class, 'destroy'])->name('delete');
    Route::get('/', [AboutController::class, 'index'])->name('index');
    Route::get('/create', [AboutController::class, 'create'])->name('create');
    Route::post('/store', [AboutController::class, 'store'])->name('store');
});

Route::prefix('/admin/experience')->group(function(){
    Route::get('/{id}/experienceEdit', [ExperienceController::class, 'edit'])->name('experienceEdit');
    Route::put('/{id}/experienceUpdate', [ExperienceController::class, 'update'])->name('experienceUpdate');
    Route::get('/{id}/experienceDelete', [ExperienceController::class, 'destroy'])->name('experienceDelete');
    Route::get('/', [ExperienceController::class, 'index'])->name('experienceIndex');
    Route::get('/experienceCreate', [ExperienceController::class, 'create'])->name('experienceCreate');
    Route::post('/experienceStore', [ExperienceController::class, 'store'])->name('experienceStore');
});

Route::prefix('/admin/education')->group(function(){
    Route::get('/{id}/educationEdit', [EducationController::class, 'edit'])->name('educationEdit');
    Route::put('/{id}/educationUpdate', [EducationController::class, 'update'])->name('educationUpdate');
    Route::get('/{id}/educationDelete', [EducationController::class, 'destroy'])->name('educationDelete');
    Route::get('/', [EducationController::class, 'index'])->name('educationIndex');
    Route::get('/educationCreate', [EducationController::class, 'create'])->name('educationCreate');
    Route::post('/educationStore', [EducationController::class, 'store'])->name('educationStore');
});

Route::prefix('/admin/skills')->group(function(){
    Route::get('/{id}/skillsEdit', [SkillsController::class, 'edit'])->name('skillsEdit');
    Route::put('/{id}/skillsUpdate', [SkillsController::class, 'update'])->name('skillsUpdate');
    Route::get('/{id}/skillsDelete', [SkillsController::class, 'destroy'])->name('skillsDelete');
    Route::get('/', [SkillsController::class, 'index'])->name('skillsIndex');
    Route::get('/skillsCreate', [SkillsController::class, 'create'])->name('skillsCreate');
    Route::post('/skillsStore', [SkillsController::class, 'store'])->name('skillsStore');
});

Route::prefix('/admin/contact')->group(function(){
    Route::get('/{id}/contactEdit', [ContactController::class, 'edit'])->name('contactEdit');
    Route::put('/{id}/contactUpdate', [ContactController::class, 'update'])->name('contactUpdate');
    Route::get('/{id}/contactDelete', [ContactController::class, 'destroy'])->name('contactDelete');
    Route::get('/', [ContactController::class, 'index'])->name('contactIndex');
    Route::get('/contactCreate', [ContactController::class, 'create'])->name('contactCreate');
    Route::post('/contactStore', [ContactController::class, 'store'])->name('contactStore');
});

