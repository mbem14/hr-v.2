<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>

				<li>
					<a href="{{ route("user.home") }}"><i class="la la-dashboard"></i> <span>{{ trans('global.dashboard') }}</span></a>
				</li>
				@can('personal_information_access')
				<li class="submenu {{ request()->is("user/employee-educations*") ? "active subdrop" : "" }} {{ request()->is("user/employee-dependents*") ? "active subdrop" : "" }} {{ request()->is("user/employee-skills*") ? "active subdrop" : "" }} {{ request()->is("user/employee-certifications*") ? "active subdrop" : "" }} {{ request()->is("user/emergency-contacts*") ? "active subdrop" : "" }} {{ request()->is("user/employee-non-formal-educations*") ? "active subdrop" : "" }} {{ request()->is("user/employee-organizations*") ? "active subdrop" : "" }} {{ request()->is("user/employee-documents*") ? "active subdrop" : "" }} {{ request()->is("user/employee-languages*") ? "active subdrop" : "" }} {{ request()->is("user/employee-training-sessions*") ? "active subdrop" : "" }}">
					<a href="#"><i class="la la-money"></i> <span> {{ trans('cruds.personalInformation.title') }} </span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("user/employee-educations*") ? "block" : "" }} {{ request()->is("user/employee-dependents*") ? "block" : "" }} {{ request()->is("user/employee-skills*") ? "block" : "" }} {{ request()->is("user/employee-certifications*") ? "block" : "" }} {{ request()->is("user/emergency-contacts*") ? "block" : "" }} {{ request()->is("user/employee-non-formal-educations*") ? "block" : "" }} {{ request()->is("user/employee-organizations*") ? "block" : "" }} {{ request()->is("user/employee-documents*") ? "block" : "" }} {{ request()->is("user/employee-languages*") ? "block" : "" }} {{ request()->is("user/employee-training-sessions*") ? "block" : "" }};">
						@can('employee_education_access')
						<li class="">
							<a href="{{ route("user.employee-educations.index") }}" class="{{ request()->is("user/employee-educations") || request()->is("user/employee-educations/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-book-open">

								</i>
								{{ trans('cruds.employeeEducation.title') }}
							</a>
						</li>
						@endcan
						@can('employee_dependent_access')
						<li class="">
							<a href="{{ route("user.employee-dependents.index") }}" class="{{ request()->is("user/employee-dependents") || request()->is("user/employee-dependents/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-user-friends">

								</i>
								{{ trans('cruds.employeeDependent.title') }}
							</a>
						</li>
						@endcan
						@can('employee_skill_access')
						<li class="">
							<a href="{{ route("user.employee-skills.index") }}" class="{{ request()->is("user/employee-skills") || request()->is("user/employee-skills/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeSkill.title') }}
							</a>
						</li>
						@endcan
						@can('employee_certification_access')
						<li class="">
							<a href="{{ route("user.employee-certifications.index") }}" class="{{ request()->is("user/employee-certifications") || request()->is("user/employee-certifications/*") ? "active" : "" }}">
								<i class="fa-fw far fa-bookmark">

								</i>
								{{ trans('cruds.employeeCertification.title') }}
							</a>
						</li>
						@endcan
						@can('emergency_contact_access')
						<li class="">
							<a href="{{ route("user.emergency-contacts.index") }}" class="{{ request()->is("user/emergency-contacts") || request()->is("user/emergency-contacts/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-phone-square">

								</i>
								{{ trans('cruds.emergencyContact.title') }}
							</a>
						</li>
						@endcan
						@can('employee_non_formal_education_access')
						<li class="">
							<a href="{{ route("user.employee-non-formal-educations.index") }}" class="{{ request()->is("user/employee-non-formal-educations") || request()->is("user/employee-non-formal-educations/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeNonFormalEducation.title') }}
							</a>
						</li>
						@endcan
						@can('employee_organization_access')
						<li class="">
							<a href="{{ route("user.employee-organizations.index") }}" class="{{ request()->is("user/employee-organizations") || request()->is("user/employee-organizations/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeOrganization.title') }}
							</a>
						</li>
						@endcan
						@can('employee_document_access')
						<li class="">
							<a href="{{ route("user.employee-documents.index") }}" class="{{ request()->is("user/employee-documents") || request()->is("user/employee-documents/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeDocument.title') }}
							</a>
						</li>
						@endcan
						@can('employee_language_access')
						<li class="">
							<a href="{{ route("user.employee-languages.index") }}" class="{{ request()->is("user/employee-languages") || request()->is("user/employee-languages/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-cogs">

								</i>
								{{ trans('cruds.employeeLanguage.title') }}
							</a>
						</li>
						@endcan
						@can('employee_training_session_access')
						<li class="">
							<a href="{{ route("user.employee-training-sessions.index") }}" class="{{ request()->is("user/employee-training-sessions") || request()->is("user/employee-training-sessions/*") ? "active" : "" }}">
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
				<li class="submenu {{ request()->is("user/attendances*") ? "active subdrop" : "" }} {{ request()->is("user/tasks*") ? "active subdrop" : "" }} {{ request()->is("user/overtimes*") ? "active subdrop" : "" }}">
					<a href="#"><i class="la la-pie-chart"></i> <span> {{ trans('cruds.timeManagement.title') }} </span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("user/attendances*") ? "block" : "" }} {{ request()->is("user/tasks*") ? "block" : "" }} {{ request()->is("user/overtimes*") ? "block" : "" }};">
						@can('attendance_access')
						<li class="">
							<a href="{{ route("user.attendances.index") }}" class="c-sidebar-nav-link {{ request()->is("user/attendances") || request()->is("user/attendances/*") ? "active" : "" }}">
								<i class="fa-fw far fa-clock">

								</i>
								{{ trans('cruds.attendance.title') }}
							</a>
						</li>
						@endcan
						@can('task_access')
						<li class="">
							<a href="{{ route("user.tasks.index") }}" class="c-sidebar-nav-link {{ request()->is("user/tasks") || request()->is("user/tasks/*") ? "active" : "" }}">
								<i class="fa-fw fas fa-tasks">

								</i>
								{{ trans('cruds.task.title') }}
							</a>
						</li>
						@endcan
						@can('overtime_access')
						<li class="">
							<a href="{{ route("user.overtimes.index") }}" class="c-sidebar-nav-link {{ request()->is("user/overtimes") || request()->is("user/overtimes/*") ? "active" : "" }}">
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
				<li class="submenu {{ request()->is("user/leave-managements*") ? "active subdrop" : "" }}">
					<a href="#"><i class="la la-graduation-cap"></i> <span> {{ trans('cruds.leave.title') }} </span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("user/leave-managements*") ? "block" : "" }};">
						@can('leave_management_access')
						<li class="">
							<a href="{{ route("user.leave-managements.index") }}" class="c-sidebar-nav-link {{ request()->is("user/leave-managements") || request()->is("user/leave-managements/*") ? "active" : "" }}">
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
				<li class="submenu {{ request()->is("user/employee-appraisals*") ? "active subdrop" : "" }}">
					<a href="#"><i class="la la-crosshairs"></i> <span> {{ trans('cruds.performance.title') }} </span> <span class="menu-arrow"></span></a>
					<ul style="display: {{ request()->is("user/employee-appraisals*") ? "block" : "" }};">
						@can('employee_appraisal_access')
						<li class="">
							<a href="{{ route("user.employee-appraisals.index") }}" class="c-sidebar-nav-link {{ request()->is("user/employee-appraisals") || request()->is("user/employee-appraisals/*") ? "active" : "" }}">
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