<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('master_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/countries*") ? "c-show" : "" }} {{ request()->is("admin/provinces*") ? "c-show" : "" }} {{ request()->is("admin/education*") ? "c-show" : "" }} {{ request()->is("admin/employment-statuses*") ? "c-show" : "" }} {{ request()->is("admin/languages*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.master.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('country_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.countries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/countries") || request()->is("admin/countries/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-flag c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.country.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('province_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.provinces.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/provinces") || request()->is("admin/provinces/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.province.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('education_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.education.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/education") || request()->is("admin/education/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.education.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employment_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employment-statuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employment-statuses") || request()->is("admin/employment-statuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employmentStatus.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('language_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.languages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/languages") || request()->is("admin/languages/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.language.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('administration_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/company-structures*") ? "c-show" : "" }} {{ request()->is("admin/job-titles*") ? "c-show" : "" }} {{ request()->is("admin/periodes*") ? "c-show" : "" }} {{ request()->is("admin/appraisal-periodes*") ? "c-show" : "" }} {{ request()->is("admin/employees*") ? "c-show" : "" }} {{ request()->is("admin/leave-types*") ? "c-show" : "" }} {{ request()->is("admin/leave-periods*") ? "c-show" : "" }} {{ request()->is("admin/leave-starting-balances*") ? "c-show" : "" }} {{ request()->is("admin/employee-history-jobs*") ? "c-show" : "" }} {{ request()->is("admin/courses*") ? "c-show" : "" }} {{ request()->is("admin/training-sessions*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.administration.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('company_structure_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.company-structures.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/company-structures") || request()->is("admin/company-structures/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-building c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.companyStructure.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('job_title_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.job-titles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/job-titles") || request()->is("admin/job-titles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-diagnoses c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.jobTitle.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('periode_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.periodes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/periodes") || request()->is("admin/periodes/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-calendar-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.periode.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('appraisal_periode_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.appraisal-periodes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/appraisal-periodes") || request()->is("admin/appraisal-periodes/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-calendar-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.appraisalPeriode.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employees.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employees") || request()->is("admin/employees/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-user-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employee.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('leave_type_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.leave-types.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/leave-types") || request()->is("admin/leave-types/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.leaveType.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('leave_period_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.leave-periods.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/leave-periods") || request()->is("admin/leave-periods/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.leavePeriod.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('leave_starting_balance_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.leave-starting-balances.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/leave-starting-balances") || request()->is("admin/leave-starting-balances/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.leaveStartingBalance.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_history_job_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-history-jobs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-history-jobs") || request()->is("admin/employee-history-jobs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeHistoryJob.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('course_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.courses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/courses") || request()->is("admin/courses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.course.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('training_session_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.training-sessions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/training-sessions") || request()->is("admin/training-sessions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.trainingSession.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('personal_information_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/employee-educations*") ? "c-show" : "" }} {{ request()->is("admin/employee-dependents*") ? "c-show" : "" }} {{ request()->is("admin/employee-skills*") ? "c-show" : "" }} {{ request()->is("admin/employee-certifications*") ? "c-show" : "" }} {{ request()->is("admin/emergency-contacts*") ? "c-show" : "" }} {{ request()->is("admin/employee-non-formal-educations*") ? "c-show" : "" }} {{ request()->is("admin/employee-organizations*") ? "c-show" : "" }} {{ request()->is("admin/employee-documents*") ? "c-show" : "" }} {{ request()->is("admin/employee-languages*") ? "c-show" : "" }} {{ request()->is("admin/employee-training-sessions*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.personalInformation.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('employee_education_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-educations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-educations") || request()->is("admin/employee-educations/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-book-open c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeEducation.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_dependent_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-dependents.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-dependents") || request()->is("admin/employee-dependents/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-friends c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeDependent.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_skill_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-skills.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-skills") || request()->is("admin/employee-skills/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeSkill.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_certification_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-certifications.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-certifications") || request()->is("admin/employee-certifications/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-bookmark c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeCertification.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('emergency_contact_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.emergency-contacts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/emergency-contacts") || request()->is("admin/emergency-contacts/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-phone-square c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.emergencyContact.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_non_formal_education_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-non-formal-educations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-non-formal-educations") || request()->is("admin/employee-non-formal-educations/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeNonFormalEducation.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_organization_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-organizations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-organizations") || request()->is("admin/employee-organizations/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeOrganization.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_document_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-documents.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-documents") || request()->is("admin/employee-documents/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeDocument.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_language_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-languages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-languages") || request()->is("admin/employee-languages/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeLanguage.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_training_session_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-training-sessions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-training-sessions") || request()->is("admin/employee-training-sessions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeTrainingSession.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('time_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/attendances*") ? "c-show" : "" }} {{ request()->is("admin/tasks*") ? "c-show" : "" }} {{ request()->is("admin/overtimes*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-hourglass-half c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.timeManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('attendance_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.attendances.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/attendances") || request()->is("admin/attendances/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-clock c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.attendance.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('task_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.tasks.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tasks") || request()->is("admin/tasks/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-tasks c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.task.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('overtime_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.overtimes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/overtimes") || request()->is("admin/overtimes/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-calendar-plus c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.overtime.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('leave_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/leave-managements*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.leave.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('leave_management_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.leave-managements.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/leave-managements") || request()->is("admin/leave-managements/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.leaveManagement.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('performance_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/employee-appraisals*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.performance.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('employee_appraisal_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-appraisals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-appraisals") || request()->is("admin/employee-appraisals/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeAppraisal.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
