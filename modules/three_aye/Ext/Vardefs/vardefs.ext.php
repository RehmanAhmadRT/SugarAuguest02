<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/three_aye/Ext/Vardefs/three_aye_three_bee_three_aye.php

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

?>
<?php
// Merged from custom/Extension/modules/three_aye/Ext/Vardefs/three_bee_three_aye_three_aye.php

// created: 2017-07-28 12:08:31
$dictionary["three_aye"]["fields"]["three_bee_three_aye"] = array (
  'name' => 'three_bee_three_aye',
  'type' => 'link',
  'relationship' => 'three_bee_three_aye',
  'source' => 'non-db',
  'module' => 'three_bee',
  'bean_name' => 'three_bee',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_FROM_THREE_BEE_TITLE',
  'id_name' => 'three_bee_three_ayethree_bee_ida',
);
$dictionary["three_aye"]["fields"]["three_bee_three_aye_name"] = array (
  'name' => 'three_bee_three_aye_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_FROM_THREE_BEE_TITLE',
  'save' => true,
  'id_name' => 'three_bee_three_ayethree_bee_ida',
  'link' => 'three_bee_three_aye',
  'table' => 'three_bee',
  'module' => 'three_bee',
  'rname' => 'name',
);
$dictionary["three_aye"]["fields"]["three_bee_three_ayethree_bee_ida"] = array (
  'name' => 'three_bee_three_ayethree_bee_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_BEE_THREE_AYE_FROM_THREE_BEE_TITLE_ID',
  'id_name' => 'three_bee_three_ayethree_bee_ida',
  'link' => 'three_bee_three_aye',
  'table' => 'three_bee',
  'module' => 'three_bee',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
