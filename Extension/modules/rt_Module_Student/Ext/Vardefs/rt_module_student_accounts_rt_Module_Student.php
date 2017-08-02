<?php
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
