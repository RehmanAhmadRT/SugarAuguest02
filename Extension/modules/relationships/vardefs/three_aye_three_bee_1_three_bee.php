<?php
// created: 2017-07-28 12:01:19
$dictionary["three_bee"]["fields"]["three_aye_three_bee_1"] = array (
  'name' => 'three_aye_three_bee_1',
  'type' => 'link',
  'relationship' => 'three_aye_three_bee_1',
  'source' => 'non-db',
  'module' => 'three_aye',
  'bean_name' => 'three_aye',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_1_FROM_THREE_AYE_TITLE',
  'id_name' => 'three_aye_three_bee_1three_aye_ida',
);
$dictionary["three_bee"]["fields"]["three_aye_three_bee_1_name"] = array (
  'name' => 'three_aye_three_bee_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_1_FROM_THREE_AYE_TITLE',
  'save' => true,
  'id_name' => 'three_aye_three_bee_1three_aye_ida',
  'link' => 'three_aye_three_bee_1',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'name',
);
$dictionary["three_bee"]["fields"]["three_aye_three_bee_1three_aye_ida"] = array (
  'name' => 'three_aye_three_bee_1three_aye_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_1_FROM_THREE_AYE_TITLE_ID',
  'id_name' => 'three_aye_three_bee_1three_aye_ida',
  'link' => 'three_aye_three_bee_1',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
