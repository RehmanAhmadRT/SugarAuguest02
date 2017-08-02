<?php
// created: 2017-07-28 12:08:31
$dictionary["three_bee"]["fields"]["three_bee_three_aye"] = array (
  'name' => 'three_bee_three_aye',
  'type' => 'link',
  'relationship' => 'three_bee_three_aye',
  'source' => 'non-db',
  'module' => 'three_aye',
  'bean_name' => 'three_aye',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_FROM_THREE_AYE_TITLE',
  'id_name' => 'three_bee_three_ayethree_aye_idb',
);
$dictionary["three_bee"]["fields"]["three_bee_three_aye_name"] = array (
  'name' => 'three_bee_three_aye_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_FROM_THREE_AYE_TITLE',
  'save' => true,
  'id_name' => 'three_bee_three_ayethree_aye_idb',
  'link' => 'three_bee_three_aye',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'name',
);
$dictionary["three_bee"]["fields"]["three_bee_three_ayethree_aye_idb"] = array (
  'name' => 'three_bee_three_ayethree_aye_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_FROM_THREE_AYE_TITLE_ID',
  'id_name' => 'three_bee_three_ayethree_aye_idb',
  'link' => 'three_bee_three_aye',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
