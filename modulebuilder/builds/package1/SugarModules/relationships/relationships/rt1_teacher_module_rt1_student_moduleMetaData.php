<?php
// created: 2017-07-25 18:37:37
$dictionary["rt1_teacher_module_rt1_student_module"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'rt1_teacher_module_rt1_student_module' => 
    array (
      'lhs_module' => 'rt1_Teacher_Module',
      'lhs_table' => 'rt1_teacher_module',
      'lhs_key' => 'id',
      'rhs_module' => 'rt1_Student_Module',
      'rhs_table' => 'rt1_student_module',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rt1_teacher_module_rt1_student_module_c',
      'join_key_lhs' => 'rt1_teacher_module_rt1_student_modulert1_teacher_module_ida',
      'join_key_rhs' => 'rt1_teacher_module_rt1_student_modulert1_student_module_idb',
    ),
  ),
  'table' => 'rt1_teacher_module_rt1_student_module_c',
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
    'rt1_teacher_module_rt1_student_modulert1_teacher_module_ida' => 
    array (
      'name' => 'rt1_teacher_module_rt1_student_modulert1_teacher_module_ida',
      'type' => 'id',
    ),
    'rt1_teacher_module_rt1_student_modulert1_student_module_idb' => 
    array (
      'name' => 'rt1_teacher_module_rt1_student_modulert1_student_module_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rt1_teacher_module_rt1_student_modulespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rt1_teacher_module_rt1_student_module_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rt1_teacher_module_rt1_student_modulert1_teacher_module_ida',
        1 => 'rt1_teacher_module_rt1_student_modulert1_student_module_idb',
      ),
    ),
  ),
);