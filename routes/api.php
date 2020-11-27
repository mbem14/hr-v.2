<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Company Structures
    Route::apiResource('company-structures', 'CompanyStructuresApiController');

    // Job Titles
    Route::apiResource('job-titles', 'JobTitlesApiController');

    // Periodes
    Route::apiResource('periodes', 'PeriodesApiController');

    // Appraisal Periodes
    Route::apiResource('appraisal-periodes', 'AppraisalPeriodesApiController');

    // Employees
    Route::apiResource('employees', 'EmployeesApiController');

    // Countries
    Route::apiResource('countries', 'CountriesApiController');

    // Provinces
    Route::apiResource('provinces', 'ProvincesApiController');

    // Education
    Route::apiResource('education', 'EducationApiController');

    // Employee Educations
    Route::apiResource('employee-educations', 'EmployeeEducationsApiController');

    // Employee Dependents
    Route::apiResource('employee-dependents', 'EmployeeDependentsApiController');

    // Employee Skills
    Route::post('employee-skills/media', 'EmployeeSkillsApiController@storeMedia')->name('employee-skills.storeMedia');
    Route::apiResource('employee-skills', 'EmployeeSkillsApiController');

    // Employee Certifications
    Route::post('employee-certifications/media', 'EmployeeCertificationsApiController@storeMedia')->name('employee-certifications.storeMedia');
    Route::apiResource('employee-certifications', 'EmployeeCertificationsApiController');

    // Emergency Contacts
    Route::apiResource('emergency-contacts', 'EmergencyContactsApiController');

    // Attendances
    Route::apiResource('attendances', 'AttendancesApiController');

    // Employment Statuses
    Route::apiResource('employment-statuses', 'EmploymentStatusApiController');

    // Tasks
    Route::apiResource('tasks', 'TaskApiController');

    // Overtimes
    Route::apiResource('overtimes', 'OvertimeApiController');

    // Leave Managements
    Route::apiResource('leave-managements', 'LeaveManagementApiController');

    // Leave Types
    Route::apiResource('leave-types', 'LeaveTypesApiController');

    // Leave Periods
    Route::apiResource('leave-periods', 'LeavePeriodsApiController');

    // Leave Starting Balances
    Route::apiResource('leave-starting-balances', 'LeaveStartingBalanceApiController');

    // Employee Non Formal Educations
    Route::post('employee-non-formal-educations/media', 'EmployeeNonFormalEducationsApiController@storeMedia')->name('employee-non-formal-educations.storeMedia');
    Route::apiResource('employee-non-formal-educations', 'EmployeeNonFormalEducationsApiController');

    // Employee Organizations
    Route::apiResource('employee-organizations', 'EmployeeOrganizationsApiController');

    // Employee History Jobs
    Route::post('employee-history-jobs/media', 'EmployeeHistoryJobsApiController@storeMedia')->name('employee-history-jobs.storeMedia');
    Route::apiResource('employee-history-jobs', 'EmployeeHistoryJobsApiController');

    // Employee Documents
    Route::post('employee-documents/media', 'EmployeeDocumentsApiController@storeMedia')->name('employee-documents.storeMedia');
    Route::apiResource('employee-documents', 'EmployeeDocumentsApiController');

    // Languages
    Route::apiResource('languages', 'LanguagesApiController');

    // Employee Languages
    Route::apiResource('employee-languages', 'EmployeeLanguagesApiController');

    // Courses
    Route::apiResource('courses', 'CoursesApiController');

    // Training Sessions
    Route::post('training-sessions/media', 'TrainingSessionsApiController@storeMedia')->name('training-sessions.storeMedia');
    Route::apiResource('training-sessions', 'TrainingSessionsApiController');

    // Employee Training Sessions
    Route::post('employee-training-sessions/media', 'EmployeeTrainingSessionsApiController@storeMedia')->name('employee-training-sessions.storeMedia');
    Route::apiResource('employee-training-sessions', 'EmployeeTrainingSessionsApiController');

    // Employee Appraisals
    Route::apiResource('employee-appraisals', 'EmployeeAppraisalsApiController');
});
