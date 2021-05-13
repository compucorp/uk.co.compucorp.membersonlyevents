<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from uk.co.compucorp.membersonlyevent/xml/schema/CRM/MembersOnlyEvent/MembersOnlyEvent.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:b1d36242bec7f87807e24be79aefe2fe)
 */
use CRM_MembersOnlyEvent_ExtensionUtil as E;

/**
 * Database access object for the MembersOnlyEvent entity.
 */
class CRM_MembersOnlyEvent_DAO_MembersOnlyEvent extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '4.4';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'membersonlyevent';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * @var int
   */
  public $id;

  /**
   * Foreign key for the Event
   *
   * @var int
   */
  public $event_id;

  /**
   * Should we provide membership purchase button when access to event denied ?
   *
   * @var bool
   */
  public $purchase_membership_button;

  /**
   * Notice message to show to the user when the access to members-only event denied.
   *
   * @var text
   */
  public $notice_for_access_denied;

  /**
   * Purchase membership button label if it is enabled
   *
   * @var string
   */
  public $purchase_membership_button_label;

  /**
   * 0: contribution page, 1: custom URL
   *
   * @var int
   */
  public $purchase_membership_link_type;

  /**
   * Foreign key for the Contribution page
   *
   * @var int
   */
  public $contribution_page_id;

  /**
   * Purchase membership page URL
   *
   * @var string
   */
  public $purchase_membership_url;

  /**
   * Should we check groups instead of membership types ?
   *
   * @var bool
   */
  public $is_groups_only;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'membersonlyevent';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Members Only Events') : E::ts('Members Only Event');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'event_id', 'civicrm_event', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contribution_page_id', 'civicrm_contribution_page', 'id');
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
          'required' => TRUE,
          'where' => 'membersonlyevent.id',
          'table_name' => 'membersonlyevent',
          'entity' => 'MembersOnlyEvent',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEvent',
          'localizable' => 0,
          'add' => '4.4',
        ],
        'event_id' => [
          'name' => 'event_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Foreign key for the Event'),
          'required' => TRUE,
          'where' => 'membersonlyevent.event_id',
          'table_name' => 'membersonlyevent',
          'entity' => 'MembersOnlyEvent',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEvent',
          'localizable' => 0,
          'FKClassName' => 'CRM_Event_DAO_Event',
          'add' => '4.4',
        ],
        'purchase_membership_button' => [
          'name' => 'purchase_membership_button',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Purchase membership button'),
          'description' => E::ts('Should we provide membership purchase button when access to event denied ?'),
          'where' => 'membersonlyevent.purchase_membership_button',
          'default' => '0',
          'table_name' => 'membersonlyevent',
          'entity' => 'MembersOnlyEvent',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEvent',
          'localizable' => 0,
          'add' => '4.4',
        ],
        'notice_for_access_denied' => [
          'name' => 'notice_for_access_denied',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Notice for access denied'),
          'description' => E::ts('Notice message to show to the user when the access to members-only event denied.'),
          'rows' => 4,
          'cols' => 80,
          'where' => 'membersonlyevent.notice_for_access_denied',
          'default' => 'NULL',
          'table_name' => 'membersonlyevent',
          'entity' => 'MembersOnlyEvent',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEvent',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '4.4',
        ],
        'purchase_membership_button_label' => [
          'name' => 'purchase_membership_button_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Purchase membership button label'),
          'description' => E::ts('Purchase membership button label if it is enabled'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'membersonlyevent.purchase_membership_button_label',
          'default' => 'NULL',
          'table_name' => 'membersonlyevent',
          'entity' => 'MembersOnlyEvent',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEvent',
          'localizable' => 0,
          'add' => '4.4',
        ],
        'purchase_membership_link_type' => [
          'name' => 'purchase_membership_link_type',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Purchase membership link type'),
          'description' => E::ts('0: contribution page, 1: custom URL'),
          'where' => 'membersonlyevent.purchase_membership_link_type',
          'default' => '0',
          'table_name' => 'membersonlyevent',
          'entity' => 'MembersOnlyEvent',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEvent',
          'localizable' => 0,
          'add' => '4.4',
        ],
        'contribution_page_id' => [
          'name' => 'contribution_page_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Foreign key for the Contribution page'),
          'where' => 'membersonlyevent.contribution_page_id',
          'default' => 'NULL',
          'table_name' => 'membersonlyevent',
          'entity' => 'MembersOnlyEvent',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEvent',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_ContributionPage',
          'add' => '4.4',
        ],
        'purchase_membership_url' => [
          'name' => 'purchase_membership_url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Purchase membership page URL'),
          'description' => E::ts('Purchase membership page URL'),
          'maxlength' => 3000,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'membersonlyevent.purchase_membership_url',
          'default' => 'NULL',
          'table_name' => 'membersonlyevent',
          'entity' => 'MembersOnlyEvent',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEvent',
          'localizable' => 0,
          'add' => '4.4',
        ],
        'is_groups_only' => [
          'name' => 'is_groups_only',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Purchase membership link type'),
          'description' => E::ts('Should we check groups instead of membership types ?'),
          'where' => 'membersonlyevent.is_groups_only',
          'default' => '0',
          'table_name' => 'membersonlyevent',
          'entity' => 'MembersOnlyEvent',
          'bao' => 'CRM_MembersOnlyEvent_DAO_MembersOnlyEvent',
          'localizable' => 0,
          'add' => '5.35',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'nlyevent', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'nlyevent', $prefix, []);
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
