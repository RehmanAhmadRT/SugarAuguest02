<?php
// created: 2017-07-28 12:05:46
$dictionary["three_bee"]["fields"]["three_bee_three_aye_1"] = array (
  'name' => 'three_bee_three_aye_1',
  'type' => 'link',
  'relationship' => 'three_bee_three_aye_1',
  'source' => 'non-db',
  'module' => 'three_aye',
  'bean_name' => 'three_aye',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_1_FROM_THREE_AYE_TITLE',
  'id_name' => 'three_bee_three_aye_1three_aye_idb',
);
$dictionary["three_bee"]["fields"]["three_bee_three_aye_1_name"] = array (
  'name' => 'three_bee_three_aye_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_1_FROM_THREE_AYE_TITLE',
  'save' => true,
  'id_name' => 'three_bee_three_aye_1three_aye_idb',
  'link' => 'three_bee_three_aye_1',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'name',
);
$dictionary["three_bee"]["fields"]["three_bee_three_aye_1three_aye_idb"] = array (
  'name' => 'three_bee_three_aye_1three_aye_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_1_FROM_THREE_AYE_TITLE_ID',
  'id_name' => 'three_bee_three_aye_1three_aye_idb',
  'link' => 'three_bee_three_aye_1',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
