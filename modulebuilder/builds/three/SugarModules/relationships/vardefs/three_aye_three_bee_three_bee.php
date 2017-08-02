<?php
// created: 2017-07-28 12:08:31
$dictionary["three_bee"]["fields"]["three_aye_three_bee"] = array (
  'name' => 'three_aye_three_bee',
  'type' => 'link',
  'relationship' => 'three_aye_three_bee',
  'source' => 'non-db',
  'module' => 'three_aye',
  'bean_name' => 'three_aye',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_FROM_THREE_AYE_TITLE',
  'id_name' => 'three_aye_three_beethree_aye_ida',
);
$dictionary["three_bee"]["fields"]["three_aye_three_bee_name"] = array (
  'name' => 'three_aye_three_bee_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_FROM_THREE_AYE_TITLE',
  'save' => true,
  'id_name' => 'three_aye_three_beethree_aye_ida',
  'link' => 'three_aye_three_bee',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'name',
);
$dictionary["three_bee"]["fields"]["three_aye_three_beethree_aye_ida"] = array (
  'name' => 'three_aye_three_beethree_aye_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_AYE_THREE_BEE_FROM_THREE_AYE_TITLE_ID',
  'id_name' => 'three_aye_three_beethree_aye_ida',
  'link' => 'three_aye_three_bee',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
