<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/rt_Module_Instructor/Ext/Vardefs/rt_module_manager_rt_module_instructor_rt_Module_Instructor.php

// created: 2017-07-26 12:59:14
$dictionary["rt_Module_Instructor"]["fields"]["rt_module_manager_rt_module_instructor"] = array (
  'name' => 'rt_module_manager_rt_module_instructor',
  'type' => 'link',
  'relationship' => 'rt_module_manager_rt_module_instructor',
  'source' => 'non-db',
  'module' => 'rt_Module_Manager',
  'bean_name' => false,
  'vname' => 'LBL_RT_MODULE_MANAGER_RT_MODULE_INSTRUCTOR_FROM_RT_MODULE_MANAGER_TITLE',
  'id_name' => 'rt_module_manager_rt_module_instructorrt_module_manager_ida',
);

?>
<?php
// Merged from custom/Extension/modules/rt_Module_Instructor/Ext/Vardefs/rt_module_instructor_rt_module_student_rt_Module_Instructor.php

// created: 2017-07-26 12:59:14
$dictionary["rt_Module_Instructor"]["fields"]["rt_module_instructor_rt_module_student"] = array (
  'name' => 'rt_module_instructor_rt_module_student',
  'type' => 'link',
  'relationship' => 'rt_module_instructor_rt_module_student',
  'source' => 'non-db',
  'module' => 'rt_Module_Student',
  'bean_name' => 'rt_Module_Student',
  'vname' => 'LBL_RT_MODULE_INSTRUCTOR_RT_MODULE_STUDENT_FROM_RT_MODULE_STUDENT_TITLE',
  'id_name' => 'rt_module_instructor_rt_module_studentrt_module_student_idb',
);
$dictionary["rt_Module_Instructor"]["fields"]["rt_module_instructor_rt_module_student_name"] = array (
  'name' => 'rt_module_instructor_rt_module_student_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_MODULE_INSTRUCTOR_RT_MODULE_STUDENT_FROM_RT_MODULE_STUDENT_TITLE',
  'save' => true,
  'id_name' => 'rt_module_instructor_rt_module_studentrt_module_student_idb',
  'link' => 'rt_module_instructor_rt_module_student',
  'table' => 'rt_module_student',
  'module' => 'rt_Module_Student',
  'rname' => 'name',
);
$dictionary["rt_Module_Instructor"]["fields"]["rt_module_instructor_rt_module_studentrt_module_student_idb"] = array (
  'name' => 'rt_module_instructor_rt_module_studentrt_module_student_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RT_MODULE_INSTRUCTOR_RT_MODULE_STUDENT_FROM_RT_MODULE_STUDENT_TITLE_ID',
  'id_name' => 'rt_module_instructor_rt_module_studentrt_module_student_idb',
  'link' => 'rt_module_instructor_rt_module_student',
  'table' => 'rt_module_student',
  'module' => 'rt_Module_Student',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
