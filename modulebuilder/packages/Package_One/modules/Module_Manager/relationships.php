<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$relationships = array (
  'rt_module_manager_rt_module_instructor' => 
  array (
    'rhs_label' => 'Instructors',
    'lhs_label' => 'Managers',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'rt_Module_Manager',
    'rhs_module' => 'rt_Module_Instructor',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'rt_module_manager_rt_module_instructor',
  ),
  'rt_module_manager_rt_module_student' => 
  array (
    'rhs_label' => 'Students',
    'lhs_label' => 'Managers',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'rt_Module_Manager',
    'rhs_module' => 'rt_Module_Student',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'rt_module_manager_rt_module_student',
  ),
);