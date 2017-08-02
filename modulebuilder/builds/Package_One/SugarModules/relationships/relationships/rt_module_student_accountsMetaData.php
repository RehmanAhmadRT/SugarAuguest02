<?php
// created: 2017-07-26 12:59:14
$dictionary["rt_module_student_accounts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'rt_module_student_accounts' => 
    array (
      'lhs_module' => 'rt_Module_Student',
      'lhs_table' => 'rt_module_student',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rt_module_student_accounts_c',
      'join_key_lhs' => 'rt_module_student_accountsrt_module_student_ida',
      'join_key_rhs' => 'rt_module_student_accountsaccounts_idb',
    ),
  ),
  'table' => 'rt_module_student_accounts_c',
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
    'rt_module_student_accountsrt_module_student_ida' => 
    array (
      'name' => 'rt_module_student_accountsrt_module_student_ida',
      'type' => 'id',
    ),
    'rt_module_student_accountsaccounts_idb' => 
    array (
      'name' => 'rt_module_student_accountsaccounts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rt_module_student_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rt_module_student_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rt_module_student_accountsrt_module_student_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rt_module_student_accounts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rt_module_student_accountsaccounts_idb',
      ),
    ),
  ),
);