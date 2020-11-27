<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Company Structures
    Route::delete('company-structures/destroy', 'CompanyStructuresController@massDestroy')->name('company-structures.massDestroy');
    Route::resource('company-structures', 'CompanyStructuresController');

    // Job Titles
    Route::delete('job-titles/destroy', 'JobTitlesController@massDestroy')->name('job-titles.massDestroy');
    Route::resource('job-titles', 'JobTitlesController');

    // Periodes
    Route::delete('periodes/destroy', 'PeriodesController@massDestroy')->name('periodes.massDestroy');
    Route::resource('periodes', 'PeriodesController');

    // Appraisal Periodes
    Route::delete('appraisal-periodes/destroy', 'AppraisalPeriodesController@massDestroy')->name('appraisal-periodes.massDestroy');
    Route::resource('appraisal-periodes', 'AppraisalPeriodesController');

    // Employees
    Route::delete('employees/destroy', 'EmployeesController@massDestroy')->name('employees.massDestroy');
    Route::resource('employees', 'EmployeesController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Provinces
    Route::delete('provinces/destroy', 'ProvincesController@massDestroy')->name('provinces.massDestroy');
    Route::resource('provinces', 'ProvincesController');

    // Education
    Route::delete('education/destroy', 'EducationController@massDestroy')->name('education.massDestroy');
    Route::resource('education', 'EducationController');

    // Employee Educations
    Route::delete('employee-educations/destroy', 'EmployeeEducationsController@massDestroy')->name('employee-educations.massDestroy');
    Route::resource('employee-educations', 'EmployeeEducationsController');

    // Employee Dependents
    Route::delete('employee-dependents/destroy', 'EmployeeDependentsController@massDestroy')->name('employee-dependents.massDestroy');
    Route::resource('employee-dependents', 'EmployeeDependentsController');

    // Employee Skills
    Route::delete('employee-skills/destroy', 'EmployeeSkillsController@massDestroy')->name('employee-skills.massDestroy');
    Route::post('employee-skills/media', 'EmployeeSkillsController@storeMedia')->name('employee-skills.storeMedia');
    Route::post('employee-skills/ckmedia', 'EmployeeSkillsController@storeCKEditorImages')->name('employee-skills.storeCKEditorImages');
    Route::resource('employee-skills', 'EmployeeSkillsController');

    // Employee Certifications
    Route::delete('employee-certifications/destroy', 'EmployeeCertificationsController@massDestroy')->name('employee-certifications.massDestroy');
    Route::post('employee-certifications/media', 'EmployeeCertificationsController@storeMedia')->name('employee-certifications.storeMedia');
    Route::post('employee-certifications/ckmedia', 'EmployeeCertificationsController@storeCKEditorImages')->name('employee-certifications.storeCKEditorImages');
    Route::resource('employee-certifications', 'EmployeeCertificationsController');

    // Emergency Contacts
    Route::delete('emergency-contacts/destroy', 'EmergencyContactsController@massDestroy')->name('emergency-contacts.massDestroy');
    Route::resource('emergency-contacts', 'EmergencyContactsController');

    // Attendances
    Route::delete('attendances/destroy', 'AttendancesController@massDestroy')->name('attendances.massDestroy');
    Route::resource('attendances', 'AttendancesController');

    // Employment Statuses
    Route::delete('employment-statuses/destroy', 'EmploymentStatusController@massDestroy')->name('employment-statuses.massDestroy');
    Route::resource('employment-statuses', 'EmploymentStatusController');

    // Tasks
    Route::delete('tasks/destroy', 'TaskController@massDestroy')->name('tasks.massDestroy');
    Route::resource('tasks', 'TaskController');

    // Overtimes
    Route::delete('overtimes/destroy', 'OvertimeController@massDestroy')->name('overtimes.massDestroy');
    Route::resource('overtimes', 'OvertimeController');

    // Leave Managements
    Route::delete('leave-managements/destroy', 'LeaveManagementController@massDestroy')->name('leave-managements.massDestroy');
    Route::resource('leave-managements', 'LeaveManagementController');

    // Leave Types
    Route::delete('leave-types/destroy', 'LeaveTypesController@massDestroy')->name('leave-types.massDestroy');
    Route::resource('leave-types', 'LeaveTypesController');

    // Leave Periods
    Route::delete('leave-periods/destroy', 'LeavePeriodsController@massDestroy')->name('leave-periods.massDestroy');
    Route::resource('leave-periods', 'LeavePeriodsController');

    // Leave Starting Balances
    Route::delete('leave-starting-balances/destroy', 'LeaveStartingBalanceController@massDestroy')->name('leave-starting-balances.massDestroy');
    Route::resource('leave-starting-balances', 'LeaveStartingBalanceController');

    // Employee Non Formal Educations
    Route::delete('employee-non-formal-educations/destroy', 'EmployeeNonFormalEducationsController@massDestroy')->name('employee-non-formal-educations.massDestroy');
    Route::post('employee-non-formal-educations/media', 'EmployeeNonFormalEducationsController@storeMedia')->name('employee-non-formal-educations.storeMedia');
    Route::post('employee-non-formal-educations/ckmedia', 'EmployeeNonFormalEducationsController@storeCKEditorImages')->name('employee-non-formal-educations.storeCKEditorImages');
    Route::resource('employee-non-formal-educations', 'EmployeeNonFormalEducationsController');

    // Employee Organizations
    Route::delete('employee-organizations/destroy', 'EmployeeOrganizationsController@massDestroy')->name('employee-organizations.massDestroy');
    Route::resource('employee-organizations', 'EmployeeOrganizationsController');

    // Employee History Jobs
    Route::delete('employee-history-jobs/destroy', 'EmployeeHistoryJobsController@massDestroy')->name('employee-history-jobs.massDestroy');
    Route::post('employee-history-jobs/media', 'EmployeeHistoryJobsController@storeMedia')->name('employee-history-jobs.storeMedia');
    Route::post('employee-history-jobs/ckmedia', 'EmployeeHistoryJobsController@storeCKEditorImages')->name('employee-history-jobs.storeCKEditorImages');
    Route::resource('employee-history-jobs', 'EmployeeHistoryJobsController');

    // Employee Documents
    Route::delete('employee-documents/destroy', 'EmployeeDocumentsController@massDestroy')->name('employee-documents.massDestroy');
    Route::post('employee-documents/media', 'EmployeeDocumentsController@storeMedia')->name('employee-documents.storeMedia');
    Route::post('employee-documents/ckmedia', 'EmployeeDocumentsController@storeCKEditorImages')->name('employee-documents.storeCKEditorImages');
    Route::resource('employee-documents', 'EmployeeDocumentsController');

    // Languages
    Route::delete('languages/destroy', 'LanguagesController@massDestroy')->name('languages.massDestroy');
    Route::resource('languages', 'LanguagesController');

    // Employee Languages
    Route::delete('employee-languages/destroy', 'EmployeeLanguagesController@massDestroy')->name('employee-languages.massDestroy');
    Route::resource('employee-languages', 'EmployeeLanguagesController');

    // Courses
    Route::delete('courses/destroy', 'CoursesController@massDestroy')->name('courses.massDestroy');
    Route::resource('courses', 'CoursesController');

    // Training Sessions
    Route::delete('training-sessions/destroy', 'TrainingSessionsController@massDestroy')->name('training-sessions.massDestroy');
    Route::post('training-sessions/media', 'TrainingSessionsController@storeMedia')->name('training-sessions.storeMedia');
    Route::post('training-sessions/ckmedia', 'TrainingSessionsController@storeCKEditorImages')->name('training-sessions.storeCKEditorImages');
    Route::resource('training-sessions', 'TrainingSessionsController');

    // Employee Training Sessions
    Route::delete('employee-training-sessions/destroy', 'EmployeeTrainingSessionsController@massDestroy')->name('employee-training-sessions.massDestroy');
    Route::post('employee-training-sessions/media', 'EmployeeTrainingSessionsController@storeMedia')->name('employee-training-sessions.storeMedia');
    Route::post('employee-training-sessions/ckmedia', 'EmployeeTrainingSessionsController@storeCKEditorImages')->name('employee-training-sessions.storeCKEditorImages');
    Route::resource('employee-training-sessions', 'EmployeeTrainingSessionsController');

    // Employee Appraisals
    Route::delete('employee-appraisals/destroy', 'EmployeeAppraisalsController@massDestroy')->name('employee-appraisals.massDestroy');
    Route::resource('employee-appraisals', 'EmployeeAppraisalsController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
