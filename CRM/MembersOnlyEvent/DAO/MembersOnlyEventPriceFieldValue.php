<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from uk.co.compucorp.membersonlyevent/xml/schema/CRM/MembersOnlyEvent/MembersOnlyEventPriceFieldValue.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:66caae9dc595bc1afafcd0c2a3f4f8a5)
 */

/**
 * Database access object for the MembersOnlyEventPriceFieldValue entity.
 */
class CRM_MembersOnlyEvent_DAO_MembersOnlyEventPriceFieldValue extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'membersonlyevent_event_price_field_value';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Members-only event ID.
   *
   * @var int
   */
  public $members_only_event_id;

  /**
   * Selected Price Field Value ID.
   *
   * @var int
   */
  public $price_field_value_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'membersonlyevent_event_price_field_value';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return ts('Members Only Event Price Field Values');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'members_only_event_id', 'membersonlyevent', 'id');
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
        'members_only_event_id' => [
          'name' => 'members_only_event_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_MembersOnlyEvent_ExtensionUtil::ts('Members-only event ID'),
          'description' => CRM_MembersOnlyEvent_ExtensionUtil::ts('Members-only event ID.'),
          'required' => TRUE,
          'where' => 'membersonlyevent_event_price_field_value.members_only_event_id',
          'table_name' => 'membersonlyevent_event_price_field_value',
          'entity' => 'MembersOnlyEventPriceFieldValue',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEventPriceFieldValue',
          'localizable' => 0,
          'FKClassName' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEvent',
          'add' => NULL,
        ],
        'price_field_value_id' => [
          'name' => 'price_field_value_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_MembersOnlyEvent_ExtensionUtil::ts('Price Field Value ID'),
          'description' => CRM_MembersOnlyEvent_ExtensionUtil::ts('Selected Price Field Value ID.'),
          'required' => TRUE,
          'where' => 'membersonlyevent_event_price_field_value.price_field_value_id',
          'table_name' => 'membersonlyevent_event_price_field_value',
          'entity' => 'MembersOnlyEventPriceFieldValue',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEventPriceFieldValue',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'nlyevent_event_price_field_value', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'nlyevent_event_price_field_value', $prefix, []);
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
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
