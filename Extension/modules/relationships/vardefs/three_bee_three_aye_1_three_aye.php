<?php
// created: 2017-07-28 12:05:46
$dictionary["three_aye"]["fields"]["three_bee_three_aye_1"] = array (
  'name' => 'three_bee_three_aye_1',
  'type' => 'link',
  'relationship' => 'three_bee_three_aye_1',
  'source' => 'non-db',
  'module' => 'three_bee',
  'bean_name' => 'three_bee',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_1_FROM_THREE_BEE_TITLE',
  'id_name' => 'three_bee_three_aye_1three_bee_ida',
);
$dictionary["three_aye"]["fields"]["three_bee_three_aye_1_name"] = array (
  'name' => 'three_bee_three_aye_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_1_FROM_THREE_BEE_TITLE',
  'save' => true,
  'id_name' => 'three_bee_three_aye_1three_bee_ida',
  'link' => 'three_bee_three_aye_1',
  'table' => 'three_bee',
  'module' => 'three_bee',
  'rname' => 'name',
);
$dictionary["three_aye"]["fields"]["three_bee_three_aye_1three_bee_ida"] = array (
  'name' => 'three_bee_three_aye_1three_bee_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_1_FROM_THREE_BEE_TITLE_ID',
  'id_name' => 'three_bee_three_aye_1three_bee_ida',
  'link' => 'three_bee_three_aye_1',
  'table' => 'three_bee',
  'module' => 'three_bee',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
