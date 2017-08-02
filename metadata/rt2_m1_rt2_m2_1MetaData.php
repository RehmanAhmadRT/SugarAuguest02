<?php
// created: 2017-07-27 15:27:51
$dictionary["rt2_m1_rt2_m2_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'rt2_m1_rt2_m2_1' => 
    array (
      'lhs_module' => 'rt2_M1',
      'lhs_table' => 'rt2_m1',
      'lhs_key' => 'id',
      'rhs_module' => 'rt2_M2',
      'rhs_table' => 'rt2_m2',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rt2_m1_rt2_m2_1_c',
      'join_key_lhs' => 'rt2_m1_rt2_m2_1rt2_m1_ida',
      'join_key_rhs' => 'rt2_m1_rt2_m2_1rt2_m2_idb',
    ),
  ),
  'table' => 'rt2_m1_rt2_m2_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'rt2_m1_rt2_m2_1rt2_m1_ida' => 
    array (
      'name' => 'rt2_m1_rt2_m2_1rt2_m1_ida',
      'type' => 'id',
    ),
    'rt2_m1_rt2_m2_1rt2_m2_idb' => 
    array (
      'name' => 'rt2_m1_rt2_m2_1rt2_m2_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rt2_m1_rt2_m2_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rt2_m1_rt2_m2_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rt2_m1_rt2_m2_1rt2_m1_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rt2_m1_rt2_m2_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rt2_m1_rt2_m2_1rt2_m2_idb',
      ),
    ),
  ),
);