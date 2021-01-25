<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from uk.co.compucorp.membersonlyevent/xml/schema/CRM/MembersOnlyEvent/EntityPriceFieldValue.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:52fb3623e497b71a36a8e563f3e3c20e)
 */

/**
 * Database access object for the EntityPriceFieldValue entity.
 */
class CRM_MembersOnlyEvent_DAO_EntityPriceFieldValue extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'membersonlyevent_entity_price_field_value';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique EntityPriceFieldValue ID
   *
   * @var int
   */
  public $id;

  /**
   * Physical tablename for entity being joined to file, e.g. civicrm_membership_type
   *
   * @var string
   */
  public $entity_table;

  /**
   * Foreign key for the civicrm_price_field_value
   *
   * @var int
   */
  public $entity_id;

  /**
   * FK to price field value
   *
   * @var int
   */
  public $price_field_value_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'membersonlyevent_entity_price_field_value';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return ts('Entity Price Field Values');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'price_field_value_id', 'civicrm_price_field_value', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => CRM_MembersOnlyEvent_ExtensionUtil::ts('Unique EntityPriceFieldValue ID'),
          'required' => TRUE,
          'where' => 'membersonlyevent_entity_price_field_value.id',
          'table_name' => 'membersonlyevent_entity_price_field_value',
          'entity' => 'EntityPriceFieldValue',
          'bao' => 'CRM_MembersOnlyEvent_DAO_EntityPriceFieldValue',
          'localizable' => 0,
          'add' => NULL,
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_MembersOnlyEvent_ExtensionUtil::ts('Entity Table'),
          'description' => CRM_MembersOnlyEvent_ExtensionUtil::ts('Physical tablename for entity being joined to file, e.g. civicrm_membership_type'),
          'size' => CRM_Utils_Type::TWO,
          'where' => 'membersonlyevent_entity_price_field_value.entity_table',
          'table_name' => 'membersonlyevent_entity_price_field_value',
          'entity' => 'EntityPriceFieldValue',
          'bao' => 'CRM_MembersOnlyEvent_DAO_EntityPriceFieldValue',
          'localizable' => 0,
          'add' => NULL,
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => CRM_MembersOnlyEvent_ExtensionUtil::ts('Foreign key for the civicrm_price_field_value'),
          'where' => 'membersonlyevent_entity_price_field_value.entity_id',
          'table_name' => 'membersonlyevent_entity_price_field_value',
          'entity' => 'EntityPriceFieldValue',
          'bao' => 'CRM_MembersOnlyEvent_DAO_EntityPriceFieldValue',
          'localizable' => 0,
          'add' => NULL,
        ],
        'price_field_value_id' => [
          'name' => 'price_field_value_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => CRM_MembersOnlyEvent_ExtensionUtil::ts('FK to price field value'),
          'where' => 'membersonlyevent_entity_price_field_value.price_field_value_id',
          'table_name' => 'membersonlyevent_entity_price_field_value',
          'entity' => 'EntityPriceFieldValue',
          'bao' => 'CRM_MembersOnlyEvent_DAO_EntityPriceFieldValue',
          'localizable' => 0,
          'FKClassName' => 'CRM_Price_DAO_PriceFieldValue',
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'nlyevent_entity_price_field_value', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'nlyevent_entity_price_field_value', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_entity_id' => [
        'name' => 'index_entity_id',
        'field' => [
          0 => 'entity_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'membersonlyevent_entity_price_field_value::1::entity_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
