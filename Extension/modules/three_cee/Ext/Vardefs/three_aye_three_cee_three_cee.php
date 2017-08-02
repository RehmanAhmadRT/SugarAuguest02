<?php
// created: 2017-07-28 12:08:31
$dictionary["three_cee"]["fields"]["three_aye_three_cee"] = array (
  'name' => 'three_aye_three_cee',
  'type' => 'link',
  'relationship' => 'three_aye_three_cee',
  'source' => 'non-db',
  'module' => 'three_aye',
  'bean_name' => 'three_aye',
  'vname' => 'LBL_THREE_AYE_THREE_CEE_FROM_THREE_AYE_TITLE',
  'id_name' => 'three_aye_three_ceethree_aye_ida',
);
$dictionary["three_cee"]["fields"]["three_aye_three_cee_name"] = array (
  'name' => 'three_aye_three_cee_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_AYE_THREE_CEE_FROM_THREE_AYE_TITLE',
  'save' => true,
  'id_name' => 'three_aye_three_ceethree_aye_ida',
  'link' => 'three_aye_three_cee',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'name',
);
$dictionary["three_cee"]["fields"]["three_aye_three_ceethree_aye_ida"] = array (
  'name' => 'three_aye_three_ceethree_aye_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_AYE_THREE_CEE_FROM_THREE_AYE_TITLE_ID',
  'id_name' => 'three_aye_three_ceethree_aye_ida',
  'link' => 'three_aye_three_cee',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
