<?php
// created: 2017-07-28 12:08:31
$dictionary["three_aye"]["fields"]["three_aye_three_bee"] = array (
  'name' => 'three_aye_three_bee',
  'type' => 'link',
  'relationship' => 'three_aye_three_bee',
  'source' => 'non-db',
  'module' => 'three_bee',
  'bean_name' => 'three_bee',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_FROM_THREE_BEE_TITLE',
  'id_name' => 'three_aye_three_beethree_bee_idb',
);
$dictionary["three_aye"]["fields"]["three_aye_three_bee_name"] = array (
  'name' => 'three_aye_three_bee_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_FROM_THREE_BEE_TITLE',
  'save' => true,
  'id_name' => 'three_aye_three_beethree_bee_idb',
  'link' => 'three_aye_three_bee',
  'table' => 'three_bee',
  'module' => 'three_bee',
  'rname' => 'name',
);
$dictionary["three_aye"]["fields"]["three_aye_three_beethree_bee_idb"] = array (
  'name' => 'three_aye_three_beethree_bee_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_FROM_THREE_BEE_TITLE_ID',
  'id_name' => 'three_aye_three_beethree_bee_idb',
  'link' => 'three_aye_three_bee',
  'table' => 'three_bee',
  'module' => 'three_bee',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
