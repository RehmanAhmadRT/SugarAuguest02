<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/rt_module_student_accounts_Accounts.php

// created: 2017-07-26 12:59:14
$dictionary["Account"]["fields"]["rt_module_student_accounts"] = array (
  'name' => 'rt_module_student_accounts',
  'type' => 'link',
  'relationship' => 'rt_module_student_accounts',
  'source' => 'non-db',
  'module' => 'rt_Module_Student',
  'bean_name' => 'rt_Module_Student',
  'vname' => 'LBL_RT_MODULE_STUDENT_ACCOUNTS_FROM_RT_MODULE_STUDENT_TITLE',
  'id_name' => 'rt_module_student_accountsrt_module_student_ida',
);
$dictionary["Account"]["fields"]["rt_module_student_accounts_name"] = array (
  'name' => 'rt_module_student_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_MODULE_STUDENT_ACCOUNTS_FROM_RT_MODULE_STUDENT_TITLE',
  'save' => true,
  'id_name' => 'rt_module_student_accountsrt_module_student_ida',
  'link' => 'rt_module_student_accounts',
  'table' => 'rt_module_student',
  'module' => 'rt_Module_Student',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["rt_module_student_accountsrt_module_student_ida"] = array (
  'name' => 'rt_module_student_accountsrt_module_student_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RT_MODULE_STUDENT_ACCOUNTS_FROM_RT_MODULE_STUDENT_TITLE_ID',
  'id_name' => 'rt_module_student_accountsrt_module_student_ida',
  'link' => 'rt_module_student_accounts',
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
