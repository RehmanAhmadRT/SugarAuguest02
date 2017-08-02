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
  'rt2_m2_rt2_m1_1' => 
  array (
    'name' => 'rt2_m2_rt2_m1_1',
    'true_relationship_type' => 'one-to-one',
    'from_studio' => true,
    'relationships' => 
    array (
      'rt2_m2_rt2_m1_1' => 
      array (
        'lhs_module' => 'rt2_M2',
        'lhs_table' => 'rt2_m2',
        'lhs_key' => 'id',
        'rhs_module' => 'rt2_M1',
        'rhs_table' => 'rt2_m1',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'rt2_m2_rt2_m1_1_c',
        'join_key_lhs' => 'rt2_m2_rt2_m1_1rt2_m2_ida',
        'join_key_rhs' => 'rt2_m2_rt2_m1_1rt2_m1_idb',
      ),
    ),
    'table' => 'rt2_m2_rt2_m1_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'rt2_m2_rt2_m1_1rt2_m2_ida' => 
      array (
        'name' => 'rt2_m2_rt2_m1_1rt2_m2_ida',
        'type' => 'id',
      ),
      'rt2_m2_rt2_m1_1rt2_m1_idb' => 
      array (
        'name' => 'rt2_m2_rt2_m1_1rt2_m1_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'rt2_m2_rt2_m1_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'rt2_m2_rt2_m1_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'rt2_m2_rt2_m1_1rt2_m2_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'rt2_m2_rt2_m1_1_idb2',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'rt2_m2_rt2_m1_1rt2_m1_idb',
        ),
      ),
    ),
    'lhs_module' => 'rt2_M2',
    'lhs_table' => 'rt2_m2',
    'lhs_key' => 'id',
    'rhs_module' => 'rt2_M1',
    'rhs_table' => 'rt2_m1',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'rt2_m2_rt2_m1_1_c',
    'join_key_lhs' => 'rt2_m2_rt2_m1_1rt2_m2_ida',
    'join_key_rhs' => 'rt2_m2_rt2_m1_1rt2_m1_idb',
    'readonly' => true,
    'relationship_name' => 'rt2_m2_rt2_m1_1',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
  ),
  'rt2_m2_modified_user' => 
  array (
    'name' => 'rt2_m2_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'rt2_M2',
    'rhs_table' => 'rt2_m2',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'rt2_m2_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'rt2_m2_created_by' => 
  array (
    'name' => 'rt2_m2_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'rt2_M2',
    'rhs_table' => 'rt2_m2',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'rt2_m2_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'rt2_m2_activities' => 
  array (
    'name' => 'rt2_m2_activities',
    'lhs_module' => 'rt2_M2',
    'lhs_table' => 'rt2_m2',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rt2_M2',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'rt2_m2_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'rt2_m2_following' => 
  array (
    'name' => 'rt2_m2_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'rt2_M2',
    'rhs_table' => 'rt2_m2',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rt2_M2',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'rt2_m2_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'rt2_m2_favorite' => 
  array (
    'name' => 'rt2_m2_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'rt2_M2',
    'rhs_table' => 'rt2_m2',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'rt2_M2',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'rt2_m2_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'rt2_m2_assigned_user' => 
  array (
    'name' => 'rt2_m2_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'rt2_M2',
    'rhs_table' => 'rt2_m2',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'rt2_m2_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'rt2_m2_rt2_m1_2' => 
  array (
    'lhs_module' => 'rt2_M2',
    'rhs_module' => 'rt2_M1',
    'relationship_type' => 'one-to-one',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'rt2_m2_rt2_m1_2',
  ),
);