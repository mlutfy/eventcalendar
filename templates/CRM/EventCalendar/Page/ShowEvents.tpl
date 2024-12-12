{if !empty($eventTypes) AND $eventTypes == TRUE}
  <select id="event_selector" class="crm-form-select crm-select2 crm-action-menu fa-plus">
    <option value="all">{ts}All{/ts}</option>
    {foreach from=$eventTypes item=type}
    <option value="{$type}">{$type}</option>
    {/foreach}
  </select>
{/if}
<div id="calendar"></div>

{literal}
<script type="text/javascript">
  if (typeof(jQuery) != 'function'){
    var jQuery = cj;
  }
  else {
    var cj = jQuery;
  }

  cj( function( ) {
    checkFullCalendarLibrary()
    .then(function() {
      buildCalendar();
    })
    .catch(function() {
      alert('Error loading calendar, try refreshing...');
    });
  });

/*
 * Checks if FullCalendar API is ready.
 *
 * @returns {Promise}
 *  if library is available or not.
 */
function checkFullCalendarLibrary() {
  return new Promise((resolve, reject) => {
    if(cj.fullCalendar) {
      resolve();
    } else {
      cj(document).ajaxComplete(function() {
        if(cj.fullCalendar) {
          resolve();
        } else {
          reject();
        }
      });
    }
  });
}

function buildCalendar() {
  var events_data = {/literal}{$civicrm_events}{literal};
  var jsonStr = JSON.stringify(events_data);
  var showTime = events_data.timeDisplay;
  var weekStartDay = {/literal}{$weekBeginDay}{literal};
  var site_locale = {/literal}'{$site_locale}'{literal};

  cj('#calendar').fullCalendar({
    eventSources: [
      { events: events_data.events }
    ],
    displayEventEnd: true,
    displayEventTime: showTime ? 1 : 0,
    firstDay:weekStartDay,
    timeFormat: {/literal}{if $eventcalendar_locale == 'fr'}'H:mm'{else}'h(:mm)A'{/if}{literal},
    locale: {/literal}'{$eventcalendar_locale}'{literal},
    monthNames: {/literal}{$eventcalendar_monthNames}{literal},
    dayNames: {/literal}{$eventcalendar_dayNames}{literal},
    dayNamesShort: {/literal}{$eventcalendar_dayNamesShort}{literal},
    {/literal}
    {if $eventcalendar_locale == 'fr'}
    {literal}
        code: "{$locale}",
        week: {
            dow: 1,
            doy: 4 // The week that contains Jan 4th is the first week of the year.
        },
        buttonText: {
            prev: "Précédent",
            next: "Suivant",
            today: "Aujourd'hui",
            year: "Année",
            month: "Mois",
            week: "Semaine",
            day: "Jour",
            list: "Mon calendrier"
        },
        weekLabel: "Sem.",
        allDayHtml: "Toute la<br/>journée",
        eventLimitText: "en plus",
        noEventsMessage: "Aucun événement à afficher",
    {/literal}
    {/if}
    {literal}
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    locale: site_locale,
    eventRender: function(event, element, view) {
      if (event.eventType && events_data.isfilter == "1") {
        return ['all', event.eventType].indexOf(cj('#event_selector').val()) >= 0;
      }
    }
  });

  CRM.$(function($) {
    $("#event_selector").change(function() {
      cj('#calendar').fullCalendar('rerenderEvents');
    });
  });
}
</script>
{/literal}
