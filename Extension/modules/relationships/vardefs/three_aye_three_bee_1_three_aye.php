<?php
// created: 2017-07-28 12:01:19
$dictionary["three_aye"]["fields"]["three_aye_three_bee_1"] = array (
  'name' => 'three_aye_three_bee_1',
  'type' => 'link',
  'relationship' => 'three_aye_three_bee_1',
  'source' => 'non-db',
  'module' => 'three_bee',
  'bean_name' => 'three_bee',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_1_FROM_THREE_BEE_TITLE',
  'id_name' => 'three_aye_three_bee_1three_bee_idb',
);
$dictionary["three_aye"]["fields"]["three_aye_three_bee_1_name"] = array (
  'name' => 'three_aye_three_bee_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_1_FROM_THREE_BEE_TITLE',
  'save' => true,
  'id_name' => 'three_aye_three_bee_1three_bee_idb',
  'link' => 'three_aye_three_bee_1',
  'table' => 'three_bee',
  'module' => 'three_bee',
  'rname' => 'name',
);
$dictionary["three_aye"]["fields"]["three_aye_three_bee_1three_bee_idb"] = array (
  'name' => 'three_aye_three_bee_1three_bee_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_1_FROM_THREE_BEE_TITLE_ID',
  'id_name' => 'three_aye_three_bee_1three_bee_idb',
  'link' => 'three_aye_three_bee_1',
  'table' => 'three_bee',
  'module' => 'three_bee',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
