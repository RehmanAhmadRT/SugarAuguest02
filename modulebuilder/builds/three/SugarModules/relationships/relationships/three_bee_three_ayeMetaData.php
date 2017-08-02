<?php
// created: 2017-07-28 12:08:31
$dictionary["three_bee_three_aye"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'three_bee_three_aye' => 
    array (
      'lhs_module' => 'three_bee',
      'lhs_table' => 'three_bee',
      'lhs_key' => 'id',
      'rhs_module' => 'three_aye',
      'rhs_table' => 'three_aye',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'three_bee_three_aye_c',
      'join_key_lhs' => 'three_bee_three_ayethree_bee_ida',
      'join_key_rhs' => 'three_bee_three_ayethree_aye_idb',
    ),
  ),
  'table' => 'three_bee_three_aye_c',
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
    'three_bee_three_ayethree_bee_ida' => 
    array (
      'name' => 'three_bee_three_ayethree_bee_ida',
      'type' => 'id',
    ),
    'three_bee_three_ayethree_aye_idb' => 
    array (
      'name' => 'three_bee_three_ayethree_aye_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'three_bee_three_ayespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'three_bee_three_aye_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'three_bee_three_ayethree_bee_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'three_bee_three_aye_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'three_bee_three_ayethree_aye_idb',
      ),
    ),
  ),
);