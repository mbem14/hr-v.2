<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'personal_information_access',
            ],
            [
                'id'    => 18,
                'title' => 'administration_access',
            ],
            [
                'id'    => 19,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 20,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 21,
                'title' => 'company_structure_create',
            ],
            [
                'id'    => 22,
                'title' => 'company_structure_edit',
            ],
            [
                'id'    => 23,
                'title' => 'company_structure_show',
            ],
            [
                'id'    => 24,
                'title' => 'company_structure_delete',
            ],
            [
                'id'    => 25,
                'title' => 'company_structure_access',
            ],
            [
                'id'    => 26,
                'title' => 'job_title_create',
            ],
            [
                'id'    => 27,
                'title' => 'job_title_edit',
            ],
            [
                'id'    => 28,
                'title' => 'job_title_show',
            ],
            [
                'id'    => 29,
                'title' => 'job_title_delete',
            ],
            [
                'id'    => 30,
                'title' => 'job_title_access',
            ],
            [
                'id'    => 31,
                'title' => 'periode_create',
            ],
            [
                'id'    => 32,
                'title' => 'periode_edit',
            ],
            [
                'id'    => 33,
                'title' => 'periode_show',
            ],
            [
                'id'    => 34,
                'title' => 'periode_delete',
            ],
            [
                'id'    => 35,
                'title' => 'periode_access',
            ],
            [
                'id'    => 36,
                'title' => 'appraisal_periode_create',
            ],
            [
                'id'    => 37,
                'title' => 'appraisal_periode_edit',
            ],
            [
                'id'    => 38,
                'title' => 'appraisal_periode_show',
            ],
            [
                'id'    => 39,
                'title' => 'appraisal_periode_delete',
            ],
            [
                'id'    => 40,
                'title' => 'appraisal_periode_access',
            ],
            [
                'id'    => 41,
                'title' => 'employee_create',
            ],
            [
                'id'    => 42,
                'title' => 'employee_edit',
            ],
            [
                'id'    => 43,
                'title' => 'employee_show',
            ],
            [
                'id'    => 44,
                'title' => 'employee_delete',
            ],
            [
                'id'    => 45,
                'title' => 'employee_access',
            ],
            [
                'id'    => 46,
                'title' => 'master_access',
            ],
            [
                'id'    => 47,
                'title' => 'country_create',
            ],
            [
                'id'    => 48,
                'title' => 'country_edit',
            ],
            [
                'id'    => 49,
                'title' => 'country_show',
            ],
            [
                'id'    => 50,
                'title' => 'country_delete',
            ],
            [
                'id'    => 51,
                'title' => 'country_access',
            ],
            [
                'id'    => 52,
                'title' => 'province_create',
            ],
            [
                'id'    => 53,
                'title' => 'province_edit',
            ],
            [
                'id'    => 54,
                'title' => 'province_show',
            ],
            [
                'id'    => 55,
                'title' => 'province_delete',
            ],
            [
                'id'    => 56,
                'title' => 'province_access',
            ],
            [
                'id'    => 57,
                'title' => 'education_create',
            ],
            [
                'id'    => 58,
                'title' => 'education_edit',
            ],
            [
                'id'    => 59,
                'title' => 'education_show',
            ],
            [
                'id'    => 60,
                'title' => 'education_delete',
            ],
            [
                'id'    => 61,
                'title' => 'education_access',
            ],
            [
                'id'    => 62,
                'title' => 'employee_education_create',
            ],
            [
                'id'    => 63,
                'title' => 'employee_education_edit',
            ],
            [
                'id'    => 64,
                'title' => 'employee_education_show',
            ],
            [
                'id'    => 65,
                'title' => 'employee_education_delete',
            ],
            [
                'id'    => 66,
                'title' => 'employee_education_access',
            ],
            [
                'id'    => 67,
                'title' => 'employee_dependent_create',
            ],
            [
                'id'    => 68,
                'title' => 'employee_dependent_edit',
            ],
            [
                'id'    => 69,
                'title' => 'employee_dependent_show',
            ],
            [
                'id'    => 70,
                'title' => 'employee_dependent_delete',
            ],
            [
                'id'    => 71,
                'title' => 'employee_dependent_access',
            ],
            [
                'id'    => 72,
                'title' => 'employee_skill_create',
            ],
            [
                'id'    => 73,
                'title' => 'employee_skill_edit',
            ],
            [
                'id'    => 74,
                'title' => 'employee_skill_show',
            ],
            [
                'id'    => 75,
                'title' => 'employee_skill_delete',
            ],
            [
                'id'    => 76,
                'title' => 'employee_skill_access',
            ],
            [
                'id'    => 77,
                'title' => 'employee_certification_create',
            ],
            [
                'id'    => 78,
                'title' => 'employee_certification_edit',
            ],
            [
                'id'    => 79,
                'title' => 'employee_certification_show',
            ],
            [
                'id'    => 80,
                'title' => 'employee_certification_delete',
            ],
            [
                'id'    => 81,
                'title' => 'employee_certification_access',
            ],
            [
                'id'    => 82,
                'title' => 'emergency_contact_create',
            ],
            [
                'id'    => 83,
                'title' => 'emergency_contact_edit',
            ],
            [
                'id'    => 84,
                'title' => 'emergency_contact_show',
            ],
            [
                'id'    => 85,
                'title' => 'emergency_contact_delete',
            ],
            [
                'id'    => 86,
                'title' => 'emergency_contact_access',
            ],
            [
                'id'    => 87,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 88,
                'title' => 'attendance_create',
            ],
            [
                'id'    => 89,
                'title' => 'attendance_edit',
            ],
            [
                'id'    => 90,
                'title' => 'attendance_show',
            ],
            [
                'id'    => 91,
                'title' => 'attendance_delete',
            ],
            [
                'id'    => 92,
                'title' => 'attendance_access',
            ],
            [
                'id'    => 93,
                'title' => 'employment_status_create',
            ],
            [
                'id'    => 94,
                'title' => 'employment_status_edit',
            ],
            [
                'id'    => 95,
                'title' => 'employment_status_show',
            ],
            [
                'id'    => 96,
                'title' => 'employment_status_delete',
            ],
            [
                'id'    => 97,
                'title' => 'employment_status_access',
            ],
            [
                'id'    => 98,
                'title' => 'task_create',
            ],
            [
                'id'    => 99,
                'title' => 'task_edit',
            ],
            [
                'id'    => 100,
                'title' => 'task_show',
            ],
            [
                'id'    => 101,
                'title' => 'task_delete',
            ],
            [
                'id'    => 102,
                'title' => 'task_access',
            ],
            [
                'id'    => 103,
                'title' => 'overtime_create',
            ],
            [
                'id'    => 104,
                'title' => 'overtime_edit',
            ],
            [
                'id'    => 105,
                'title' => 'overtime_show',
            ],
            [
                'id'    => 106,
                'title' => 'overtime_delete',
            ],
            [
                'id'    => 107,
                'title' => 'overtime_access',
            ],
            [
                'id'    => 108,
                'title' => 'leave_access',
            ],
            [
                'id'    => 109,
                'title' => 'leave_management_create',
            ],
            [
                'id'    => 110,
                'title' => 'leave_management_edit',
            ],
            [
                'id'    => 111,
                'title' => 'leave_management_show',
            ],
            [
                'id'    => 112,
                'title' => 'leave_management_delete',
            ],
            [
                'id'    => 113,
                'title' => 'leave_management_access',
            ],
            [
                'id'    => 114,
                'title' => 'leave_type_create',
            ],
            [
                'id'    => 115,
                'title' => 'leave_type_edit',
            ],
            [
                'id'    => 116,
                'title' => 'leave_type_show',
            ],
            [
                'id'    => 117,
                'title' => 'leave_type_delete',
            ],
            [
                'id'    => 118,
                'title' => 'leave_type_access',
            ],
            [
                'id'    => 119,
                'title' => 'leave_period_create',
            ],
            [
                'id'    => 120,
                'title' => 'leave_period_edit',
            ],
            [
                'id'    => 121,
                'title' => 'leave_period_show',
            ],
            [
                'id'    => 122,
                'title' => 'leave_period_delete',
            ],
            [
                'id'    => 123,
                'title' => 'leave_period_access',
            ],
            [
                'id'    => 124,
                'title' => 'leave_starting_balance_create',
            ],
            [
                'id'    => 125,
                'title' => 'leave_starting_balance_edit',
            ],
            [
                'id'    => 126,
                'title' => 'leave_starting_balance_show',
            ],
            [
                'id'    => 127,
                'title' => 'leave_starting_balance_delete',
            ],
            [
                'id'    => 128,
                'title' => 'leave_starting_balance_access',
            ],
            [
                'id'    => 129,
                'title' => 'employee_non_formal_education_create',
            ],
            [
                'id'    => 130,
                'title' => 'employee_non_formal_education_edit',
            ],
            [
                'id'    => 131,
                'title' => 'employee_non_formal_education_show',
            ],
            [
                'id'    => 132,
                'title' => 'employee_non_formal_education_delete',
            ],
            [
                'id'    => 133,
                'title' => 'employee_non_formal_education_access',
            ],
            [
                'id'    => 134,
                'title' => 'employee_organization_create',
            ],
            [
                'id'    => 135,
                'title' => 'employee_organization_edit',
            ],
            [
                'id'    => 136,
                'title' => 'employee_organization_show',
            ],
            [
                'id'    => 137,
                'title' => 'employee_organization_delete',
            ],
            [
                'id'    => 138,
                'title' => 'employee_organization_access',
            ],
            [
                'id'    => 139,
                'title' => 'employee_history_job_create',
            ],
            [
                'id'    => 140,
                'title' => 'employee_history_job_edit',
            ],
            [
                'id'    => 141,
                'title' => 'employee_history_job_show',
            ],
            [
                'id'    => 142,
                'title' => 'employee_history_job_delete',
            ],
            [
                'id'    => 143,
                'title' => 'employee_history_job_access',
            ],
            [
                'id'    => 144,
                'title' => 'employee_document_create',
            ],
            [
                'id'    => 145,
                'title' => 'employee_document_edit',
            ],
            [
                'id'    => 146,
                'title' => 'employee_document_show',
            ],
            [
                'id'    => 147,
                'title' => 'employee_document_delete',
            ],
            [
                'id'    => 148,
                'title' => 'employee_document_access',
            ],
            [
                'id'    => 149,
                'title' => 'performance_access',
            ],
            [
                'id'    => 150,
                'title' => 'language_create',
            ],
            [
                'id'    => 151,
                'title' => 'language_edit',
            ],
            [
                'id'    => 152,
                'title' => 'language_show',
            ],
            [
                'id'    => 153,
                'title' => 'language_delete',
            ],
            [
                'id'    => 154,
                'title' => 'language_access',
            ],
            [
                'id'    => 155,
                'title' => 'employee_language_create',
            ],
            [
                'id'    => 156,
                'title' => 'employee_language_edit',
            ],
            [
                'id'    => 157,
                'title' => 'employee_language_show',
            ],
            [
                'id'    => 158,
                'title' => 'employee_language_delete',
            ],
            [
                'id'    => 159,
                'title' => 'employee_language_access',
            ],
            [
                'id'    => 160,
                'title' => 'course_create',
            ],
            [
                'id'    => 161,
                'title' => 'course_edit',
            ],
            [
                'id'    => 162,
                'title' => 'course_show',
            ],
            [
                'id'    => 163,
                'title' => 'course_delete',
            ],
            [
                'id'    => 164,
                'title' => 'course_access',
            ],
            [
                'id'    => 165,
                'title' => 'training_session_create',
            ],
            [
                'id'    => 166,
                'title' => 'training_session_edit',
            ],
            [
                'id'    => 167,
                'title' => 'training_session_show',
            ],
            [
                'id'    => 168,
                'title' => 'training_session_delete',
            ],
            [
                'id'    => 169,
                'title' => 'training_session_access',
            ],
            [
                'id'    => 170,
                'title' => 'employee_training_session_create',
            ],
            [
                'id'    => 171,
                'title' => 'employee_training_session_edit',
            ],
            [
                'id'    => 172,
                'title' => 'employee_training_session_show',
            ],
            [
                'id'    => 173,
                'title' => 'employee_training_session_delete',
            ],
            [
                'id'    => 174,
                'title' => 'employee_training_session_access',
            ],
            [
                'id'    => 175,
                'title' => 'employee_appraisal_create',
            ],
            [
                'id'    => 176,
                'title' => 'employee_appraisal_edit',
            ],
            [
                'id'    => 177,
                'title' => 'employee_appraisal_show',
            ],
            [
                'id'    => 178,
                'title' => 'employee_appraisal_delete',
            ],
            [
                'id'    => 179,
                'title' => 'employee_appraisal_access',
            ],
            [
                'id'    => 180,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
