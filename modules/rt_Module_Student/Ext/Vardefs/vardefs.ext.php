<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/rt_Module_Student/Ext/Vardefs/rt_module_instructor_rt_module_student_rt_Module_Student.php

// created: 2017-07-26 12:59:14
$dictionary["rt_Module_Student"]["fields"]["rt_module_instructor_rt_module_student"] = array (
  'name' => 'rt_module_instructor_rt_module_student',
  'type' => 'link',
  'relationship' => 'rt_module_instructor_rt_module_student',
  'source' => 'non-db',
  'module' => 'rt_Module_Instructor',
  'bean_name' => 'rt_Module_Instructor',
  'vname' => 'LBL_RT_MODULE_INSTRUCTOR_RT_MODULE_STUDENT_FROM_RT_MODULE_INSTRUCTOR_TITLE',
  'id_name' => 'rt_module_instructor_rt_module_studentrt_module_instructor_ida',
);
$dictionary["rt_Module_Student"]["fields"]["rt_module_instructor_rt_module_student_name"] = array (
  'name' => 'rt_module_instructor_rt_module_student_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_MODULE_INSTRUCTOR_RT_MODULE_STUDENT_FROM_RT_MODULE_INSTRUCTOR_TITLE',
  'save' => true,
  'id_name' => 'rt_module_instructor_rt_module_studentrt_module_instructor_ida',
  'link' => 'rt_module_instructor_rt_module_student',
  'table' => 'rt_module_instructor',
  'module' => 'rt_Module_Instructor',
  'rname' => 'name',
);
$dictionary["rt_Module_Student"]["fields"]["rt_module_instructor_rt_module_studentrt_module_instructor_ida"] = array (
  'name' => 'rt_module_instructor_rt_module_studentrt_module_instructor_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RT_MODULE_INSTRUCTOR_RT_MODULE_STUDENT_FROM_RT_MODULE_INSTRUCTOR_TITLE_ID',
  'id_name' => 'rt_module_instructor_rt_module_studentrt_module_instructor_ida',
  'link' => 'rt_module_instructor_rt_module_student',
  'table' => 'rt_module_instructor',
  'module' => 'rt_Module_Instructor',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/rt_Module_Student/Ext/Vardefs/rt_module_student_accounts_rt_Module_Student.php

// created: 2017-07-26 12:59:14
$dictionary["rt_Module_Student"]["fields"]["rt_module_student_accounts"] = array (
  'name' => 'rt_module_student_accounts',
  'type' => 'link',
  'relationship' => 'rt_module_student_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_RT_MODULE_STUDENT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'rt_module_student_accountsaccounts_idb',
);
$dictionary["rt_Module_Student"]["fields"]["rt_module_student_accounts_name"] = array (
  'name' => 'rt_module_student_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_MODULE_STUDENT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'rt_module_student_accountsaccounts_idb',
  'link' => 'rt_module_student_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["rt_Module_Student"]["fields"]["rt_module_student_accountsaccounts_idb"] = array (
  'name' => 'rt_module_student_accountsaccounts_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RT_MODULE_STUDENT_ACCOUNTS_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'rt_module_student_accountsaccounts_idb',
  'link' => 'rt_module_student_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/rt_Module_Student/Ext/Vardefs/rt_module_manager_rt_module_student_rt_Module_Student.php

// created: 2017-07-26 12:59:14
$dictionary["rt_Module_Student"]["fields"]["rt_module_manager_rt_module_student"] = array (
  'name' => 'rt_module_manager_rt_module_student',
  'type' => 'link',
  'relationship' => 'rt_module_manager_rt_module_student',
  'source' => 'non-db',
  'module' => 'rt_Module_Manager',
  'bean_name' => false,
  'vname' => 'LBL_RT_MODULE_MANAGER_RT_MODULE_STUDENT_FROM_RT_MODULE_MANAGER_TITLE',
  'id_name' => 'rt_module_manager_rt_module_studentrt_module_manager_ida',
);

?>
