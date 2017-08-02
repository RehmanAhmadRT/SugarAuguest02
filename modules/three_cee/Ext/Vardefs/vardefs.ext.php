<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/three_cee/Ext/Vardefs/three_cee_three_aye_three_cee.php

// created: 2017-07-28 12:08:31
$dictionary["three_cee"]["fields"]["three_cee_three_aye"] = array (
  'name' => 'three_cee_three_aye',
  'type' => 'link',
  'relationship' => 'three_cee_three_aye',
  'source' => 'non-db',
  'module' => 'three_aye',
  'bean_name' => 'three_aye',
  'vname' => 'LBL_THREE_CEE_THREE_AYE_FROM_THREE_AYE_TITLE',
  'id_name' => 'three_cee_three_ayethree_aye_idb',
);
$dictionary["three_cee"]["fields"]["three_cee_three_aye_name"] = array (
  'name' => 'three_cee_three_aye_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_CEE_THREE_AYE_FROM_THREE_AYE_TITLE',
  'save' => true,
  'id_name' => 'three_cee_three_ayethree_aye_idb',
  'link' => 'three_cee_three_aye',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'name',
);
$dictionary["three_cee"]["fields"]["three_cee_three_ayethree_aye_idb"] = array (
  'name' => 'three_cee_three_ayethree_aye_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_THREE_CEE_THREE_AYE_FROM_THREE_AYE_TITLE_ID',
  'id_name' => 'three_cee_three_ayethree_aye_idb',
  'link' => 'three_cee_three_aye',
  'table' => 'three_aye',
  'module' => 'three_aye',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/three_cee/Ext/Vardefs/three_aye_three_cee_three_cee.php

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

?>
