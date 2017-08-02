<?php
// created: 2017-07-27 15:35:16
$dictionary["rt2_M1"]["fields"]["rt2_m2_rt2_m1_2"] = array (
  'name' => 'rt2_m2_rt2_m1_2',
  'type' => 'link',
  'relationship' => 'rt2_m2_rt2_m1_2',
  'source' => 'non-db',
  'module' => 'rt2_M2',
  'bean_name' => 'rt2_M2',
  'vname' => 'LBL_RT2_M2_RT2_M1_2_FROM_RT2_M2_TITLE',
  'id_name' => 'rt2_m2_rt2_m1_2rt2_m2_ida',
);
$dictionary["rt2_M1"]["fields"]["rt2_m2_rt2_m1_2_name"] = array (
  'name' => 'rt2_m2_rt2_m1_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT2_M2_RT2_M1_2_FROM_RT2_M2_TITLE',
  'save' => true,
  'id_name' => 'rt2_m2_rt2_m1_2rt2_m2_ida',
  'link' => 'rt2_m2_rt2_m1_2',
  'table' => 'rt2_m2',
  'module' => 'rt2_M2',
  'rname' => 'name',
);
$dictionary["rt2_M1"]["fields"]["rt2_m2_rt2_m1_2rt2_m2_ida"] = array (
  'name' => 'rt2_m2_rt2_m1_2rt2_m2_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RT2_M2_RT2_M1_2_FROM_RT2_M2_TITLE_ID',
  'id_name' => 'rt2_m2_rt2_m1_2rt2_m2_ida',
  'link' => 'rt2_m2_rt2_m1_2',
  'table' => 'rt2_m2',
  'module' => 'rt2_M2',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
