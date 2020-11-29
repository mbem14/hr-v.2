<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>

				<li>
					<a href="{{ route("admin.home") }}"><i class="la la-dashboard"></i> <span>{{ trans('global.dashboard') }}</span></a>
				</li>
				@can('master_access')
				<li class="submenu">
					<a href="#" class="{{ request()->is("admin/countries*") ? "active subdrop" : "" }} {{ request()->is("admin/provinces*") ? "active subdrop" : "" }} {{ request()->is("admin/education*") ? "active subdrop" : "" }} {{ request()->is("admin/employment-statuses*") ? "active subdrop" : "" }} {{ request()->is("admin/languages*") ? "active subdrop" : "" }}"><i class="la la-user"></i> <span> {{ trans('cruds.master.title') }}</span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("admin/countries*") ? "block" : "" }} {{ request()->is("admin/provinces*") ? "block" : "" }} {{ request()->is("admin/education*") ? "block" : "" }} {{ request()->is("admin/employment-statuses*") ? "block" : "" }} {{ request()->is("admin/languages*") ? "block" : "" }};">
						@can('country_access')
						<li>
							<a href="{{ route("admin.countries.index") }}" class="{{ request()->is("admin/countries") || request()->is("admin/countries/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-flag">

								</i>
								{{ trans('cruds.country.title') }}</a>
						</li>
						@endcan
						@can('province_access')
						<li>
							<a href="{{ route("admin.provinces.index") }}" class="{{ request()->is("admin/provinces") || request()->is("admin/provinces/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.province.title') }}
							</a>
						</li>
						@endcan
						@can('education_access')
						<li>
							<a href="{{ route("admin.education.index") }}" class="{{ request()->is("admin/education") || request()->is("admin/education/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.education.title') }}
							</a>
						</li>
						@endcan
						@can('employment_status_access')
						<li>
							<a href="{{ route("admin.employment-statuses.index") }}" class="{{ request()->is("admin/employment-statuses") || request()->is("admin/employment-statuses/*") ? "active" : "" }}">
								<i class="la la-user">

								</i>
								{{ trans('cruds.employmentStatus.title') }}
							</a>
						</li>
						@endcan
						@can('language_access')
						<li>
							<a href="{{ route("admin.languages.index") }}" class="{{ request()->is("admin/languages") || request()->is("admin/languages/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.language.title') }}
							</a>
						</li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('user_management_access')
				<li class="submenu {{ request()->is("admin/permissions*") ? "active subdrop" : "" }} {{ request()->is("admin/roles*") ? "active subdrop" : "" }} {{ request()->is("admin/users*") ? "active subdrop" : "" }} {{ request()->is("admin/audit-logs*") ? "active subdrop" : "" }}">
					<a href="#"><i class="la la-rocket"></i> <span> {{ trans('cruds.userManagement.title') }} </span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("admin/permissions*") ? "block" : "" }} {{ request()->is("admin/roles*") ? "block" : "" }} {{ request()->is("admin/users*") ? "block" : "" }} {{ request()->is("admin/audit-logs*") ? "block" : "" }}; ">
						@can('permission_access')
						<li class="">
							<a href="{{ route("admin.permissions.index") }}" class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-unlock-alt ">

								</i>
								{{ trans('cruds.permission.title') }}
							</a>
						</li>
						@endcan
						@can('role_access')
						<li class="">
							<a href="{{ route("admin.roles.index") }}" class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-briefcase ">

								</i>
								{{ trans('cruds.role.title') }}
							</a>
						</li>
						@endcan
						@can('user_access')
						<li class="">
							<a href="{{ route("admin.users.index") }}" class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-user ">

								</i>
								{{ trans('cruds.user.title') }}
							</a>
						</li>
						@endcan
						@can('audit_log_access')
						<li class="">
							<a href="{{ route("admin.audit-logs.index") }}" class="{{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
								<i class="la la-user">

								</i>
								{{ trans('cruds.auditLog.title') }}
							</a>
						</li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('administration_access')
				<li class="submenu {{ request()->is("admin/company-structures*") ? "active subdrop" : "" }} {{ request()->is("admin/job-titles*") ? "active subdrop" : "" }} {{ request()->is("admin/periodes*") ? "active subdrop" : "" }} {{ request()->is("admin/appraisal-periodes*") ? "active subdrop" : "" }} {{ request()->is("admin/employees*") ? "active subdrop" : "" }} {{ request()->is("admin/leave-types*") ? "active subdrop" : "" }} {{ request()->is("admin/leave-periods*") ? "active subdrop" : "" }} {{ request()->is("admin/leave-starting-balances*") ? "active subdrop" : "" }} {{ request()->is("admin/employee-history-jobs*") ? "active subdrop" : "" }} {{ request()->is("admin/courses*") ? "active subdrop" : "" }} {{ request()->is("admin/training-sessions*") ? "active subdrop" : "" }}">
					<a href="#"><i class="la la-files-o"></i> <span> {{ trans('cruds.administration.title') }} </span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("admin/company-structures*") ? "block" : "" }} {{ request()->is("admin/job-titles*") ? "block" : "" }} {{ request()->is("admin/periodes*") ? "block" : "" }} {{ request()->is("admin/appraisal-periodes*") ? "block" : "" }} {{ request()->is("admin/employees*") ? "block" : "" }} {{ request()->is("admin/leave-types*") ? "block" : "" }} {{ request()->is("admin/leave-periods*") ? "block" : "" }} {{ request()->is("admin/leave-starting-balances*") ? "block" : "" }} {{ request()->is("admin/employee-history-jobs*") ? "block" : "" }} {{ request()->is("admin/courses*") ? "block" : "" }} {{ request()->is("admin/training-sessions*") ? "block" : "" }} ; ">
						@can('company_structure_access')
						<li class="">
							<a href="{{ route("admin.company-structures.index") }}" class="{{ request()->is("admin/company-structures") || request()->is("admin/company-structures/*") ? "active" : "" }}">
								<i class="fa-fw far fa-building ">

								</i>
								{{ trans('cruds.companyStructure.title') }}
							</a>
						</li>
						@endcan
						@can('job_title_access')
						<li class="">
							<a href="{{ route("admin.job-titles.index") }}" class="{{ request()->is("admin/job-titles") || request()->is("admin/job-titles/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-diagnoses ">

								</i>
								{{ trans('cruds.jobTitle.title') }}
							</a>
						</li>
						@endcan
						@can('periode_access')
						<li class="">
							<a href="{{ route("admin.periodes.index") }}" class="{{ request()->is("admin/periodes") || request()->is("admin/periodes/*") ? "active" : "" }}">
								<i class="fa-fw far fa-calendar-alt ">

								</i>
								{{ trans('cruds.periode.title') }}
							</a>
						</li>
						@endcan
						@can('appraisal_periode_access')
						<li class="">
							<a href="{{ route("admin.appraisal-periodes.index") }}" class="{{ request()->is("admin/appraisal-periodes") || request()->is("admin/appraisal-periodes/*") ? "active" : "" }}">
								<i class="fa-fw far fa-calendar-alt ">

								</i>
								{{ trans('cruds.appraisalPeriode.title') }}
							</a>
						</li>
						@endcan
						@can('employee_access')
						<li class="">
							<a href="{{ route("admin.employees.index") }}" class="{{ request()->is("admin/employees") || request()->is("admin/employees/*") ? "active" : "" }}">
								<i class="fa-fw far fa-user-circle ">

								</i>
								{{ trans('cruds.employee.title') }}
							</a>
						</li>
						@endcan
						@can('leave_type_access')
						<li class="">
							<a href="{{ route("admin.leave-types.index") }}" class="{{ request()->is("admin/leave-types") || request()->is("admin/leave-types/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs ">

								</i>
								{{ trans('cruds.leaveType.title') }}
							</a>
						</li>
						@endcan
						@can('leave_period_access')
						<li class="">
							<a href="{{ route("admin.leave-periods.index") }}" class="{{ request()->is("admin/leave-periods") || request()->is("admin/leave-periods/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs ">

								</i>
								{{ trans('cruds.leavePeriod.title') }}
							</a>
						</li>
						@endcan
						@can('leave_starting_balance_access')
						<li class="">
							<a href="{{ route("admin.leave-starting-balances.index") }}" class="{{ request()->is("admin/leave-starting-balances") || request()->is("admin/leave-starting-balances/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs ">

								</i>
								{{ trans('cruds.leaveStartingBalance.title') }}
							</a>
						</li>
						@endcan
						@can('employee_history_job_access')
						<li class="">
							<a href="{{ route("admin.employee-history-jobs.index") }}" class="{{ request()->is("admin/employee-history-jobs") || request()->is("admin/employee-history-jobs/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs ">

								</i>
								{{ trans('cruds.employeeHistoryJob.title') }}
							</a>
						</li>
						@endcan
						@can('course_access')
						<li class="">
							<a href="{{ route("admin.courses.index") }}" class="{{ request()->is("admin/courses") || request()->is("admin/courses/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs ">

								</i>
								{{ trans('cruds.course.title') }}
							</a>
						</li>
						@endcan
						@can('training_session_access')
						<li class="">
							<a href="{{ route("admin.training-sessions.index") }}" class="{{ request()->is("admin/training-sessions") || request()->is("admin/training-sessions/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs ">

								</i>
								{{ trans('cruds.trainingSession.title') }}
							</a>
						</li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('personal_information_access')
				<li class="submenu {{ request()->is("admin/employee-educations*") ? "active subdrop" : "" }} {{ request()->is("admin/employee-dependents*") ? "active subdrop" : "" }} {{ request()->is("admin/employee-skills*") ? "active subdrop" : "" }} {{ request()->is("admin/employee-certifications*") ? "active subdrop" : "" }} {{ request()->is("admin/emergency-contacts*") ? "active subdrop" : "" }} {{ request()->is("admin/employee-non-formal-educations*") ? "active subdrop" : "" }} {{ request()->is("admin/employee-organizations*") ? "active subdrop" : "" }} {{ request()->is("admin/employee-documents*") ? "active subdrop" : "" }} {{ request()->is("admin/employee-languages*") ? "active subdrop" : "" }} {{ request()->is("admin/employee-training-sessions*") ? "active subdrop" : "" }}">
					<a href="#"><i class="la la-money"></i> <span> {{ trans('cruds.personalInformation.title') }} </span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("admin/employee-educations*") ? "block" : "" }} {{ request()->is("admin/employee-dependents*") ? "block" : "" }} {{ request()->is("admin/employee-skills*") ? "block" : "" }} {{ request()->is("admin/employee-certifications*") ? "block" : "" }} {{ request()->is("admin/emergency-contacts*") ? "block" : "" }} {{ request()->is("admin/employee-non-formal-educations*") ? "block" : "" }} {{ request()->is("admin/employee-organizations*") ? "block" : "" }} {{ request()->is("admin/employee-documents*") ? "block" : "" }} {{ request()->is("admin/employee-languages*") ? "block" : "" }} {{ request()->is("admin/employee-training-sessions*") ? "block" : "" }};">
						@can('employee_education_access')
						<li class="">
							<a href="{{ route("admin.employee-educations.index") }}" class="{{ request()->is("admin/employee-educations") || request()->is("admin/employee-educations/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-book-open">

								</i>
								{{ trans('cruds.employeeEducation.title') }}
							</a>
						</li>
						@endcan
						@can('employee_dependent_access')
						<li class="">
							<a href="{{ route("admin.employee-dependents.index") }}" class="{{ request()->is("admin/employee-dependents") || request()->is("admin/employee-dependents/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-user-friends">

								</i>
								{{ trans('cruds.employeeDependent.title') }}
							</a>
						</li>
						@endcan
						@can('employee_skill_access')
						<li class="">
							<a href="{{ route("admin.employee-skills.index") }}" class="{{ request()->is("admin/employee-skills") || request()->is("admin/employee-skills/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeSkill.title') }}
							</a>
						</li>
						@endcan
						@can('employee_certification_access')
						<li class="">
							<a href="{{ route("admin.employee-certifications.index") }}" class="{{ request()->is("admin/employee-certifications") || request()->is("admin/employee-certifications/*") ? "active" : "" }}">
								<i class="fa-fw far fa-bookmark">

								</i>
								{{ trans('cruds.employeeCertification.title') }}
							</a>
						</li>
						@endcan
						@can('emergency_contact_access')
						<li class="">
							<a href="{{ route("admin.emergency-contacts.index") }}" class="{{ request()->is("admin/emergency-contacts") || request()->is("admin/emergency-contacts/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-phone-square">

								</i>
								{{ trans('cruds.emergencyContact.title') }}
							</a>
						</li>
						@endcan
						@can('employee_non_formal_education_access')
						<li class="">
							<a href="{{ route("admin.employee-non-formal-educations.index") }}" class="{{ request()->is("admin/employee-non-formal-educations") || request()->is("admin/employee-non-formal-educations/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeNonFormalEducation.title') }}
							</a>
						</li>
						@endcan
						@can('employee_organization_access')
						<li class="">
							<a href="{{ route("admin.employee-organizations.index") }}" class="{{ request()->is("admin/employee-organizations") || request()->is("admin/employee-organizations/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeOrganization.title') }}
							</a>
						</li>
						@endcan
						@can('employee_document_access')
						<li class="">
							<a href="{{ route("admin.employee-documents.index") }}" class="{{ request()->is("admin/employee-documents") || request()->is("admin/employee-documents/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeDocument.title') }}
							</a>
						</li>
						@endcan
						@can('employee_language_access')
						<li class="">
							<a href="{{ route("admin.employee-languages.index") }}" class="{{ request()->is("admin/employee-languages") || request()->is("admin/employee-languages/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeLanguage.title') }}
							</a>
						</li>
						@endcan
						@can('employee_training_session_access')
						<li class="">
							<a href="{{ route("admin.employee-training-sessions.index") }}" class="{{ request()->is("admin/employee-training-sessions") || request()->is("admin/employee-training-sessions/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeTrainingSession.title') }}
							</a>
						</li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('time_management_access')
				<li class="submenu {{ request()->is("admin/attendances*") ? "active subdrop" : "" }} {{ request()->is("admin/tasks*") ? "active subdrop" : "" }} {{ request()->is("admin/overtimes*") ? "active subdrop" : "" }}">
					<a href="#"><i class="la la-pie-chart"></i> <span> {{ trans('cruds.timeManagement.title') }} </span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("admin/attendances*") ? "block" : "" }} {{ request()->is("admin/tasks*") ? "block" : "" }} {{ request()->is("admin/overtimes*") ? "block" : "" }};">
						@can('attendance_access')
						<li class="">
							<a href="{{ route("admin.attendances.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/attendances") || request()->is("admin/attendances/*") ? "active" : "" }}">
								<i class="fa-fw far fa-clock">

								</i>
								{{ trans('cruds.attendance.title') }}
							</a>
						</li>
						@endcan
						@can('task_access')
						<li class="">
							<a href="{{ route("admin.tasks.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tasks") || request()->is("admin/tasks/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-tasks">

								</i>
								{{ trans('cruds.task.title') }}
							</a>
						</li>
						@endcan
						@can('overtime_access')
						<li class="">
							<a href="{{ route("admin.overtimes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/overtimes") || request()->is("admin/overtimes/*") ? "active" : "" }}">
								<i class="fa-fw far fa-calendar-plus">

								</i>
								{{ trans('cruds.overtime.title') }}
							</a>
						</li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('leave_access')
				<li class="submenu {{ request()->is("admin/leave-managements*") ? "active subdrop" : "" }}">
					<a href="#"><i class="la la-graduation-cap"></i> <span> {{ trans('cruds.leave.title') }} </span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("admin/leave-managements*") ? "block" : "" }};">
						@can('leave_management_access')
						<li class="">
							<a href="{{ route("admin.leave-managements.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/leave-managements") || request()->is("admin/leave-managements/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.leaveManagement.title') }}
							</a>
						</li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('performance_access')
				<li class="submenu {{ request()->is("admin/employee-appraisals*") ? "active subdrop" : "" }}">
					<a href="#"><i class="la la-crosshairs"></i> <span> {{ trans('cruds.performance.title') }} </span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("admin/employee-appraisals*") ? "block" : "" }};">
						@can('employee_appraisal_access')
						<li class="">
							<a href="{{ route("admin.employee-appraisals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-appraisals") || request()->is("admin/employee-appraisals/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeAppraisal.title') }}
							</a>
						</li>
						@endcan
					</ul>
				</li>
				@endcan

			</ul>
		</div>
	</div>
</div>