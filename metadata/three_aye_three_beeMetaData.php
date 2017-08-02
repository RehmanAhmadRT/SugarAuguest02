<?php
// created: 2017-07-28 12:08:31
$dictionary["three_aye_three_bee"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'three_aye_three_bee' => 
    array (
      'lhs_module' => 'three_aye',
      'lhs_table' => 'three_aye',
      'lhs_key' => 'id',
      'rhs_module' => 'three_bee',
      'rhs_table' => 'three_bee',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'three_aye_three_bee_c',
      'join_key_lhs' => 'three_aye_three_beethree_aye_ida',
      'join_key_rhs' => 'three_aye_three_beethree_bee_idb',
    ),
  ),
  'table' => 'three_aye_three_bee_c',
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
    'three_aye_three_beethree_aye_ida' => 
    array (
      'name' => 'three_aye_three_beethree_aye_ida',
      'type' => 'id',
    ),
    'three_aye_three_beethree_bee_idb' => 
    array (
      'name' => 'three_aye_three_beethree_bee_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'three_aye_three_beespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'three_aye_three_bee_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'three_aye_three_beethree_aye_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'three_aye_three_bee_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'three_aye_three_beethree_bee_idb',
      ),
    ),
  ),
);