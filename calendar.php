!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Calendar | JavaScript Examples | UIZE JavaScript Framework</title>
  <meta name="keywords" content="widget Uize.Widget.Calendar"/>
  <meta name="description" content="See an example of a calendar widget that you can use on your own Web site to let users choose a date from a grid, with controls for navigating months."/>
  <link rel="alternate" type="application/rss+xml" title="UIZE JavaScript Framework - Latest News" href="http://www.uize.com/latest-news.rss"/>
  <link rel="stylesheet" href="../css/page.css"/>
  <link rel="stylesheet" href="../css/page.example.css"/>
  <link rel="stylesheet" href="../css/widget.calendar.css"/>
  <style type="text/css">
    .calendarContainer {
      margin:auto;
    }
  </style>
</head>

<body>

<script type="text/javascript" src="../js/Uize.js"></script>

<h1 class="document-title">
  <a id="page-homeLink" href="../index.html" title="UIZE JavaScript Framework home"></a>
  <a href="../javascript-examples.html" class="breadcrumb breadcrumbWithArrow">JAVASCRIPT EXAMPLES</a>
  Calendar
  <div id="page-actions" class="pageActions">
    <a href="source-code/calendar.html" class="buttonLink">SOURCE</a>
  </div>
</h1>

<div class="main">
  <!-- explanation copy -->

  <div class="explanation">
    <p>In this example, an instance of the <a href="../reference/Uize.Widget.Calendar.html"><code>Uize.Widget.Calendar</code></a> class is used to wire up a simple calendar widget. The HTML markup for the calendar widget is provided by the <a href="../reference/Uize.Templates.Calendar.html"><code>Uize.Templates.Calendar</code></a> JavaScript template. Initially, the calendar's value is set to today's date. However, you can change it's value by clicking on a different date of this month, or you can use the arrows to navigate to and select a date from a different month.</p>

    <p>The month and year that the calendar displays are accessible through the <code>month</code> and <code>year</code> set-get properties, respectively. Below the calendar widget is a summary of its current state and some links to let you programmatically interact with the calendar. Play around with the calendar widget and see how the state updates, and mess with the links to control the calendar.</p>
  </div>

  <div id="page_calendar-shell"></div>
  <br/>

  <!-- programmatic interface examples -->

  <div class="programmaticInterface">
    <ul>
      <li>Current State
        <ul>
          <li><b>calendar.get ('value') == </b>new Date ('<span id="page-calendarValue"></span>')</li>
          <li><b>calendar.get ('month') == </b><span id="page-calendarMonth"></span></li>
          <li><b>calendar.get ('year') == </b><span id="page-calendarYear"></span></li>
        </ul>
      </li>
      <li>Navigate Programmatically
        <ul>
          <li>MONTH
            <ul>
              <li>PREVIOUS MONTH: <a href="javascript://" class="linkedJs">calendar.set ({month:calendar.get ('month') - 1})</a></li>
              <li>NEXT MONTH: <a href="javascript://" class="linkedJs">calendar.set ({month:calendar.get ('month') + 1})</a></li>
            </ul>
          </li>
          <li>YEAR
            <ul>
              <li>PREVIOUS YEAR: <a href="javascript://" class="linkedJs">calendar.set ({year:calendar.get ('year') - 1})</a></li>
              <li>NEXT YEAR: <a href="javascript://" class="linkedJs">calendar.set ({year:calendar.get ('year') + 1})</a></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<!-- JavaScript code to insert the calendar widget and wire up the page -->

<script type="text/javascript">

Uize.module ({
  required:[
    'UizeDotCom.Page.Example.library',
    'UizeDotCom.Page.Example',
    'Uize.Widget.Calendar',
    'Uize.Templates.Calendar'
  ],
  builder:function () {
    /*** create the example page widget ***/
      var page = window.page = UizeDotCom.Page.Example ({evaluator:function (code) {eval (code)}});

    /*** add the calendar child widget ***/
      var calendar = page.addChild (
        'calendar',
        Uize.Widget.Calendar,
        {
          built:false,
          html:Uize.Templates.Calendar
        }
      );

    /*** wire up the page widget ***/
      page.wireUi ();

    /*** some code for demonstrating the widget's programmatic interface ***/
      function displayCalendarState () {
        page.setNodeValue ('calendarValue',calendar.get ('value'));
        page.setNodeValue ('calendarMonth',calendar.get ('month'));
        page.setNodeValue ('calendarYear',calendar.get ('year'));
      }
      calendar.wire ('Changed.value',displayCalendarState);
      calendar.wire ('Changed.month',displayCalendarState);
      calendar.wire ('Changed.year',displayCalendarState);
      displayCalendarState ();
  }
});

</script>

</body>
</html>