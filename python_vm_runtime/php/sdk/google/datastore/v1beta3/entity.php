<?php
/**
 * Copyright 2007 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/datastore/v1beta3/entity.proto
//   Date: 2016-02-24 07:12:33

namespace google\datastore\v1beta3 {

  class PartitionId extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $project_id = null;
    
    /**  @var string */
    public $database_id = null;
    
    /**  @var string */
    public $namespace_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.datastore.v1beta3.PartitionId');

      // OPTIONAL STRING project_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "project_id";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING database_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "database_id";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING namespace_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "namespace_id";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <project_id> has a value
     *
     * @return boolean
     */
    public function hasProjectId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <project_id> value
     *
     * @return \google\datastore\v1beta3\PartitionId
     */
    public function clearProjectId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <project_id> value
     *
     * @return string
     */
    public function getProjectId(){
      return $this->_get(2);
    }
    
    /**
     * Set <project_id> value
     *
     * @param string $value
     * @return \google\datastore\v1beta3\PartitionId
     */
    public function setProjectId( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <database_id> has a value
     *
     * @return boolean
     */
    public function hasDatabaseId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <database_id> value
     *
     * @return \google\datastore\v1beta3\PartitionId
     */
    public function clearDatabaseId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <database_id> value
     *
     * @return string
     */
    public function getDatabaseId(){
      return $this->_get(3);
    }
    
    /**
     * Set <database_id> value
     *
     * @param string $value
     * @return \google\datastore\v1beta3\PartitionId
     */
    public function setDatabaseId( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <namespace_id> has a value
     *
     * @return boolean
     */
    public function hasNamespaceId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <namespace_id> value
     *
     * @return \google\datastore\v1beta3\PartitionId
     */
    public function clearNamespaceId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <namespace_id> value
     *
     * @return string
     */
    public function getNamespaceId(){
      return $this->_get(4);
    }
    
    /**
     * Set <namespace_id> value
     *
     * @param string $value
     * @return \google\datastore\v1beta3\PartitionId
     */
    public function setNamespaceId( $value){
      return $this->_set(4, $value);
    }
  }
}

namespace google\datastore\v1beta3\Key {

  class PathElement extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $kind = null;
    
    /**  @var int */
    public $id = null;
    
    /**  @var string */
    public $name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.datastore.v1beta3.Key.PathElement');

      // OPTIONAL STRING kind = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "kind";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <kind> has a value
     *
     * @return boolean
     */
    public function hasKind(){
      return $this->_has(1);
    }
    
    /**
     * Clear <kind> value
     *
     * @return \google\datastore\v1beta3\Key\PathElement
     */
    public function clearKind(){
      return $this->_clear(1);
    }
    
    /**
     * Get <kind> value
     *
     * @return string
     */
    public function getKind(){
      return $this->_get(1);
    }
    
    /**
     * Set <kind> value
     *
     * @param string $value
     * @return \google\datastore\v1beta3\Key\PathElement
     */
    public function setKind( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <id> value
     *
     * @return \google\datastore\v1beta3\Key\PathElement
     */
    public function clearId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(2);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \google\datastore\v1beta3\Key\PathElement
     */
    public function setId( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(3);
    }
    
    /**
     * Clear <name> value
     *
     * @return \google\datastore\v1beta3\Key\PathElement
     */
    public function clearName(){
      return $this->_clear(3);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(3);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \google\datastore\v1beta3\Key\PathElement
     */
    public function setName( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\datastore\v1beta3 {

  class Key extends \DrSlump\Protobuf\Message {

    /**  @var \google\datastore\v1beta3\PartitionId */
    public $partition_id = null;
    
    /**  @var \google\datastore\v1beta3\Key\PathElement[]  */
    public $path = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.datastore.v1beta3.Key');

      // OPTIONAL MESSAGE partition_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "partition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\datastore\v1beta3\PartitionId';
      $descriptor->addField($f);

      // REPEATED MESSAGE path = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "path";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\datastore\v1beta3\Key\PathElement';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <partition_id> has a value
     *
     * @return boolean
     */
    public function hasPartitionId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <partition_id> value
     *
     * @return \google\datastore\v1beta3\Key
     */
    public function clearPartitionId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <partition_id> value
     *
     * @return \google\datastore\v1beta3\PartitionId
     */
    public function getPartitionId(){
      return $this->_get(1);
    }
    
    /**
     * Set <partition_id> value
     *
     * @param \google\datastore\v1beta3\PartitionId $value
     * @return \google\datastore\v1beta3\Key
     */
    public function setPartitionId(\google\datastore\v1beta3\PartitionId $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <path> has a value
     *
     * @return boolean
     */
    public function hasPath(){
      return $this->_has(2);
    }
    
    /**
     * Clear <path> value
     *
     * @return \google\datastore\v1beta3\Key
     */
    public function clearPath(){
      return $this->_clear(2);
    }
    
    /**
     * Get <path> value
     *
     * @param int $idx
     * @return \google\datastore\v1beta3\Key\PathElement
     */
    public function getPath($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <path> value
     *
     * @param \google\datastore\v1beta3\Key\PathElement $value
     * @return \google\datastore\v1beta3\Key
     */
    public function setPath(\google\datastore\v1beta3\Key\PathElement $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <path>
     *
     * @return \google\datastore\v1beta3\Key\PathElement[]
     */
    public function getPathList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <path>
     *
     * @param \google\datastore\v1beta3\Key\PathElement $value
     * @return \google\datastore\v1beta3\Key
     */
    public function addPath(\google\datastore\v1beta3\Key\PathElement $value){
     return $this->_add(2, $value);
    }
  }
}

namespace google\datastore\v1beta3 {

  class ArrayValue extends \DrSlump\Protobuf\Message {

    /**  @var \google\datastore\v1beta3\Value[]  */
    public $values = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.datastore.v1beta3.ArrayValue');

      // REPEATED MESSAGE values = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\datastore\v1beta3\Value';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <values> has a value
     *
     * @return boolean
     */
    public function hasValues(){
      return $this->_has(1);
    }
    
    /**
     * Clear <values> value
     *
     * @return \google\datastore\v1beta3\ArrayValue
     */
    public function clearValues(){
      return $this->_clear(1);
    }
    
    /**
     * Get <values> value
     *
     * @param int $idx
     * @return \google\datastore\v1beta3\Value
     */
    public function getValues($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <values> value
     *
     * @param \google\datastore\v1beta3\Value $value
     * @return \google\datastore\v1beta3\ArrayValue
     */
    public function setValues(\google\datastore\v1beta3\Value $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <values>
     *
     * @return \google\datastore\v1beta3\Value[]
     */
    public function getValuesList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <values>
     *
     * @param \google\datastore\v1beta3\Value $value
     * @return \google\datastore\v1beta3\ArrayValue
     */
    public function addValues(\google\datastore\v1beta3\Value $value){
     return $this->_add(1, $value);
    }
  }
}

namespace google\datastore\v1beta3 {

  class Value extends \DrSlump\Protobuf\Message {

    /**  @var int - \google\protobuf\NullValue */
    public $null_value = null;
    
    /**  @var boolean */
    public $boolean_value = null;
    
    /**  @var int */
    public $integer_value = null;
    
    /**  @var float */
    public $double_value = null;
    
    /**  @var \google\protobuf\Timestamp */
    public $timestamp_value = null;
    
    /**  @var \google\datastore\v1beta3\Key */
    public $key_value = null;
    
    /**  @var string */
    public $string_value = null;
    
    /**  @var string */
    public $blob_value = null;
    
    /**  @var \google\type\LatLng */
    public $geo_point_value = null;
    
    /**  @var \google\datastore\v1beta3\Entity */
    public $entity_value = null;
    
    /**  @var \google\datastore\v1beta3\ArrayValue */
    public $array_value = null;
    
    /**  @var int */
    public $meaning = null;
    
    /**  @var boolean */
    public $exclude_from_indexes = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.datastore.v1beta3.Value');

      // OPTIONAL ENUM null_value = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "null_value";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\NullValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL boolean_value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "boolean_value";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 integer_value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "integer_value";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL DOUBLE double_value = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "double_value";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE timestamp_value = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "timestamp_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Timestamp';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_value = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "key_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\datastore\v1beta3\Key';
      $descriptor->addField($f);

      // OPTIONAL STRING string_value = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "string_value";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BYTES blob_value = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "blob_value";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE geo_point_value = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "geo_point_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\type\LatLng';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE entity_value = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "entity_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\datastore\v1beta3\Entity';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE array_value = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "array_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\datastore\v1beta3\ArrayValue';
      $descriptor->addField($f);

      // OPTIONAL INT32 meaning = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "meaning";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL exclude_from_indexes = 19
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 19;
      $f->name      = "exclude_from_indexes";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <null_value> has a value
     *
     * @return boolean
     */
    public function hasNullValue(){
      return $this->_has(11);
    }
    
    /**
     * Clear <null_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearNullValue(){
      return $this->_clear(11);
    }
    
    /**
     * Get <null_value> value
     *
     * @return int - \google\protobuf\NullValue
     */
    public function getNullValue(){
      return $this->_get(11);
    }
    
    /**
     * Set <null_value> value
     *
     * @param int - \google\protobuf\NullValue $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setNullValue( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <boolean_value> has a value
     *
     * @return boolean
     */
    public function hasBooleanValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <boolean_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearBooleanValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <boolean_value> value
     *
     * @return boolean
     */
    public function getBooleanValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <boolean_value> value
     *
     * @param boolean $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setBooleanValue( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <integer_value> has a value
     *
     * @return boolean
     */
    public function hasIntegerValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <integer_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearIntegerValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <integer_value> value
     *
     * @return int
     */
    public function getIntegerValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <integer_value> value
     *
     * @param int $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setIntegerValue( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <double_value> has a value
     *
     * @return boolean
     */
    public function hasDoubleValue(){
      return $this->_has(3);
    }
    
    /**
     * Clear <double_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearDoubleValue(){
      return $this->_clear(3);
    }
    
    /**
     * Get <double_value> value
     *
     * @return float
     */
    public function getDoubleValue(){
      return $this->_get(3);
    }
    
    /**
     * Set <double_value> value
     *
     * @param float $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setDoubleValue( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <timestamp_value> has a value
     *
     * @return boolean
     */
    public function hasTimestampValue(){
      return $this->_has(10);
    }
    
    /**
     * Clear <timestamp_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearTimestampValue(){
      return $this->_clear(10);
    }
    
    /**
     * Get <timestamp_value> value
     *
     * @return \google\protobuf\Timestamp
     */
    public function getTimestampValue(){
      return $this->_get(10);
    }
    
    /**
     * Set <timestamp_value> value
     *
     * @param \google\protobuf\Timestamp $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setTimestampValue(\google\protobuf\Timestamp $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <key_value> has a value
     *
     * @return boolean
     */
    public function hasKeyValue(){
      return $this->_has(5);
    }
    
    /**
     * Clear <key_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearKeyValue(){
      return $this->_clear(5);
    }
    
    /**
     * Get <key_value> value
     *
     * @return \google\datastore\v1beta3\Key
     */
    public function getKeyValue(){
      return $this->_get(5);
    }
    
    /**
     * Set <key_value> value
     *
     * @param \google\datastore\v1beta3\Key $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setKeyValue(\google\datastore\v1beta3\Key $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <string_value> has a value
     *
     * @return boolean
     */
    public function hasStringValue(){
      return $this->_has(17);
    }
    
    /**
     * Clear <string_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearStringValue(){
      return $this->_clear(17);
    }
    
    /**
     * Get <string_value> value
     *
     * @return string
     */
    public function getStringValue(){
      return $this->_get(17);
    }
    
    /**
     * Set <string_value> value
     *
     * @param string $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setStringValue( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <blob_value> has a value
     *
     * @return boolean
     */
    public function hasBlobValue(){
      return $this->_has(18);
    }
    
    /**
     * Clear <blob_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearBlobValue(){
      return $this->_clear(18);
    }
    
    /**
     * Get <blob_value> value
     *
     * @return string
     */
    public function getBlobValue(){
      return $this->_get(18);
    }
    
    /**
     * Set <blob_value> value
     *
     * @param string $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setBlobValue( $value){
      return $this->_set(18, $value);
    }
    
    /**
     * Check if <geo_point_value> has a value
     *
     * @return boolean
     */
    public function hasGeoPointValue(){
      return $this->_has(8);
    }
    
    /**
     * Clear <geo_point_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearGeoPointValue(){
      return $this->_clear(8);
    }
    
    /**
     * Get <geo_point_value> value
     *
     * @return \google\type\LatLng
     */
    public function getGeoPointValue(){
      return $this->_get(8);
    }
    
    /**
     * Set <geo_point_value> value
     *
     * @param \google\type\LatLng $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setGeoPointValue(\google\type\LatLng $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <entity_value> has a value
     *
     * @return boolean
     */
    public function hasEntityValue(){
      return $this->_has(6);
    }
    
    /**
     * Clear <entity_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearEntityValue(){
      return $this->_clear(6);
    }
    
    /**
     * Get <entity_value> value
     *
     * @return \google\datastore\v1beta3\Entity
     */
    public function getEntityValue(){
      return $this->_get(6);
    }
    
    /**
     * Set <entity_value> value
     *
     * @param \google\datastore\v1beta3\Entity $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setEntityValue(\google\datastore\v1beta3\Entity $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <array_value> has a value
     *
     * @return boolean
     */
    public function hasArrayValue(){
      return $this->_has(9);
    }
    
    /**
     * Clear <array_value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearArrayValue(){
      return $this->_clear(9);
    }
    
    /**
     * Get <array_value> value
     *
     * @return \google\datastore\v1beta3\ArrayValue
     */
    public function getArrayValue(){
      return $this->_get(9);
    }
    
    /**
     * Set <array_value> value
     *
     * @param \google\datastore\v1beta3\ArrayValue $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setArrayValue(\google\datastore\v1beta3\ArrayValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <meaning> has a value
     *
     * @return boolean
     */
    public function hasMeaning(){
      return $this->_has(14);
    }
    
    /**
     * Clear <meaning> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearMeaning(){
      return $this->_clear(14);
    }
    
    /**
     * Get <meaning> value
     *
     * @return int
     */
    public function getMeaning(){
      return $this->_get(14);
    }
    
    /**
     * Set <meaning> value
     *
     * @param int $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setMeaning( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <exclude_from_indexes> has a value
     *
     * @return boolean
     */
    public function hasExcludeFromIndexes(){
      return $this->_has(19);
    }
    
    /**
     * Clear <exclude_from_indexes> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function clearExcludeFromIndexes(){
      return $this->_clear(19);
    }
    
    /**
     * Get <exclude_from_indexes> value
     *
     * @return boolean
     */
    public function getExcludeFromIndexes(){
      return $this->_get(19);
    }
    
    /**
     * Set <exclude_from_indexes> value
     *
     * @param boolean $value
     * @return \google\datastore\v1beta3\Value
     */
    public function setExcludeFromIndexes( $value){
      return $this->_set(19, $value);
    }
  }
}

namespace google\datastore\v1beta3\Entity {

  class PropertiesEntry extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $key = null;
    
    /**  @var \google\datastore\v1beta3\Value */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.datastore.v1beta3.Entity.PropertiesEntry');

      // OPTIONAL STRING key = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "key";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\datastore\v1beta3\Value';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <key> has a value
     *
     * @return boolean
     */
    public function hasKey(){
      return $this->_has(1);
    }
    
    /**
     * Clear <key> value
     *
     * @return \google\datastore\v1beta3\Entity\PropertiesEntry
     */
    public function clearKey(){
      return $this->_clear(1);
    }
    
    /**
     * Get <key> value
     *
     * @return string
     */
    public function getKey(){
      return $this->_get(1);
    }
    
    /**
     * Set <key> value
     *
     * @param string $value
     * @return \google\datastore\v1beta3\Entity\PropertiesEntry
     */
    public function setKey( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\datastore\v1beta3\Entity\PropertiesEntry
     */
    public function clearValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value> value
     *
     * @return \google\datastore\v1beta3\Value
     */
    public function getValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <value> value
     *
     * @param \google\datastore\v1beta3\Value $value
     * @return \google\datastore\v1beta3\Entity\PropertiesEntry
     */
    public function setValue(\google\datastore\v1beta3\Value $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\datastore\v1beta3 {

  class Entity extends \DrSlump\Protobuf\Message {

    /**  @var \google\datastore\v1beta3\Key */
    public $key = null;
    
    /**  @var \google\datastore\v1beta3\Entity\PropertiesEntry[]  */
    public $properties = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.datastore.v1beta3.Entity');

      // OPTIONAL MESSAGE key = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "key";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\datastore\v1beta3\Key';
      $descriptor->addField($f);

      // REPEATED MESSAGE properties = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "properties";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\datastore\v1beta3\Entity\PropertiesEntry';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <key> has a value
     *
     * @return boolean
     */
    public function hasKey(){
      return $this->_has(1);
    }
    
    /**
     * Clear <key> value
     *
     * @return \google\datastore\v1beta3\Entity
     */
    public function clearKey(){
      return $this->_clear(1);
    }
    
    /**
     * Get <key> value
     *
     * @return \google\datastore\v1beta3\Key
     */
    public function getKey(){
      return $this->_get(1);
    }
    
    /**
     * Set <key> value
     *
     * @param \google\datastore\v1beta3\Key $value
     * @return \google\datastore\v1beta3\Entity
     */
    public function setKey(\google\datastore\v1beta3\Key $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <properties> has a value
     *
     * @return boolean
     */
    public function hasProperties(){
      return $this->_has(3);
    }
    
    /**
     * Clear <properties> value
     *
     * @return \google\datastore\v1beta3\Entity
     */
    public function clearProperties(){
      return $this->_clear(3);
    }
    
    /**
     * Get <properties> value
     *
     * @param int $idx
     * @return \google\datastore\v1beta3\Entity\PropertiesEntry
     */
    public function getProperties($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <properties> value
     *
     * @param \google\datastore\v1beta3\Entity\PropertiesEntry $value
     * @return \google\datastore\v1beta3\Entity
     */
    public function setProperties(\google\datastore\v1beta3\Entity\PropertiesEntry $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <properties>
     *
     * @return \google\datastore\v1beta3\Entity\PropertiesEntry[]
     */
    public function getPropertiesList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <properties>
     *
     * @param \google\datastore\v1beta3\Entity\PropertiesEntry $value
     * @return \google\datastore\v1beta3\Entity
     */
    public function addProperties(\google\datastore\v1beta3\Entity\PropertiesEntry $value){
     return $this->_add(3, $value);
    }
  }
}

