<?php
// created: 2017-07-28 12:01:19
$dictionary["three_aye_three_bee_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'three_aye_three_bee_1' => 
    array (
      'lhs_module' => 'three_aye',
      'lhs_table' => 'three_aye',
      'lhs_key' => 'id',
      'rhs_module' => 'three_bee',
      'rhs_table' => 'three_bee',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'three_aye_three_bee_1_c',
      'join_key_lhs' => 'three_aye_three_bee_1three_aye_ida',
      'join_key_rhs' => 'three_aye_three_bee_1three_bee_idb',
    ),
  ),
  'table' => 'three_aye_three_bee_1_c',
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
    'three_aye_three_bee_1three_aye_ida' => 
    array (
      'name' => 'three_aye_three_bee_1three_aye_ida',
      'type' => 'id',
    ),
    'three_aye_three_bee_1three_bee_idb' => 
    array (
      'name' => 'three_aye_three_bee_1three_bee_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'three_aye_three_bee_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'three_aye_three_bee_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'three_aye_three_bee_1three_aye_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'three_aye_three_bee_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'three_aye_three_bee_1three_bee_idb',
      ),
    ),
  ),
);