<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from /home/eli/buildkit/build/wordpress/wp-content/uploads/civicrm/ext/com.osseed.eventcalendar/xml/schema/CRM/EventCalendar/EventCalendar.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:1d77b8d58ecb51674b11f71ebd090eee)
 */
use CRM_EventCalendar_ExtensionUtil as E;

/**
 * Database access object for the EventCalendar entity.
 */
class CRM_EventCalendar_DAO_EventCalendar extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_event_calendar';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique EventCalendar ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Calendar Title
   *
   * @var varchar(255)
   */
  public $calendar_title;

  /**
   * Show Past Events
   *
   * @var boolean
   */
  public $show_past_events;

  /**
   * Show End Date
   *
   * @var boolean
   */
  public $show_end_date;

  /**
   * Show Only Public or All
   *
   * @var boolean
   */
  public $show_public_events;

  /**
   * Use the Month param in the calendar
   *
   * @var boolean
   */
  public $events_by_month;

  /**
   * Show the event timing
   *
   * @var boolean
   */
  public $event_timings;

  /**
   * How many months to show events
   *
   * @var int unsigned
   */
  public $events_from_month;

  /**
   * Whether to show event type filters
   *
   * @var boolean
   */
  public $event_type_filters;

  /**
   * Use week begin settings from CiviCRM
   *
   * @var boolean
   */
  public $week_begins_from_day;

  /**
   * Whether to show recurring events.
   *
   * @var boolean
   */
  public $recurring_event;

  /**
   * Whether to show enrollment status on events.
   *
   * @var boolean
   */
  public $enrollment_status;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_event_calendar';
    parent::__construct();
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
          'description' => E::ts('Unique EventCalendar ID'),
          'required' => TRUE,
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'calendar_title' => [
          'name' => 'calendar_title',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Calendar Title'),
          'description' => E::ts('Calendar Title'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'show_past_events' => [
          'name' => 'show_past_events',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Show Past Events'),
          'description' => E::ts('Show Past Events'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'show_end_date' => [
          'name' => 'show_end_date',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Show End Date'),
          'description' => E::ts('Show End Date'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'show_public_events' => [
          'name' => 'show_public_events',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Show Public Events'),
          'description' => E::ts('Show Only Public or All'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'events_by_month' => [
          'name' => 'events_by_month',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Events By Month'),
          'description' => E::ts('Use the Month param in the calendar'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'event_timings' => [
          'name' => 'event_timings',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Event Timings'),
          'description' => E::ts('Show the event timing'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'events_from_month' => [
          'name' => 'events_from_month',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Events From Month'),
          'description' => E::ts('How many months to show events'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'event_type_filters' => [
          'name' => 'event_type_filters',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Event Type Filters'),
          'description' => E::ts('Whether to show event type filters'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'week_begins_from_day' => [
          'name' => 'week_begins_from_day',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Week Begins From Day'),
          'description' => E::ts('Week Begins From Day'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'recurring_event' => [
          'name' => 'recurring_event',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Recurring Event'),
          'description' => E::ts('Recurring Event'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ],
        'enrollment_status' => [
          'name' => 'enrollment_status',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Enrollment Status'),
          'description' => E::ts('Enrollment Status'),
          'table_name' => 'civicrm_event_calendar',
          'entity' => 'EventCalendar',
          'bao' => 'CRM_EventCalendar_DAO_EventCalendar',
          'localizable' => 0,
        ]
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'event_calendar', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'event_calendar', $prefix, []);
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
