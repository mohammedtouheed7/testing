<!DOCTYPE html> 
<!-- 
The source code of this widget lives updated at: https://github.com/thebrowser/jquery.ui.monthpicker
Happy coding!
-->
<html lang='en'> 
    <head> 
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='chrome=1'>
		<meta name='description' content='Monthpicker, the missing JQuery widget. It allows you to pick up only month and year, without any ugly hack on Datepicker.' />
		<meta name='keywords' content='jquery, ui, monthpicker, year-month, plugin' />
		<meta name='author' content='Julien Poumailloux - http://github.com/thebrowser/jquery.ui.monthpicker' />
		<title>Monthpicker, the missing JQueryUI widget.</title>
		<link rel='stylesheet' href='http://jqueryui.com/themes/base/jquery.ui.all.css'> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<style type="text/css">
			body {
				margin-top: 1.0em;
				background-color: #fff;
				font-family: Helvetica, Arial, FreeSans, san-serif;
				color: #000000;
			}
			#container {
				margin: 0 auto;
				width: 700px;
			}
			.ui-datepicker {
				font-size:62.5%;
			}
			h1 { font-size: 3.3em; color: #2B3856; margin-bottom: 3px; }
			h2 { font-size: 1.5em; color: #2B60DE; }
			a { color: #8467D7; }
			pre { background: #000; color: #fff; padding: 15px;}
		</style>
	</head>
    <body>
		<div id="container">
			<h1>jquery-ui-monthpicker</h1>
			<h2>Monthpicker #1</h2><input type='text' id='month1'><br />
			<h2>Monthpicker #2 (different settings)</h2><input type='text' id='month2'>
			<h2>Standard JQuery UI Datepicker</h2><input type='text' id='date1'>
			<h2>Available settings and their defaults</h2>
			<h3>General settings</h3>
			<pre>
showOn: 'focus', // 'focus' for popup on focus,
 // 'button' for trigger button, or 'both' for either
showAnim: 'fadeIn', // Name of jQuery animation for popup
buttonText: '...', // Text for trigger button
buttonImage: '', // URL for trigger button image
changeYear: false, // True if year can be selected directly, false if only prev/next
yearRange: 'c-10:c+10', // Range of years to display in drop-down,
 // either relative to today's year (-nn:+nn), relative to currently displayed year
 // (c-nn:c+nn), absolute (nnnn:nnnn), or a combination of the above (nnnn:-n)
beforeShow: null, // Function that takes an input field and
 // returns a set of custom settings for the date picker
onSelect: null, // Define a callback function when a date is selected
onChangeYear: null, // Define a callback function when the year is changed
onClose: null, // Define a callback function when the monthpicker is closed
stepYears: 1, // Number of months to step back/forward
altField: '', // Selector for an alternate field to store selected dates into
altFormat: '', // The date format to use for the alternate field
disabled: false // The initial disabled state</pre>
			<h3>L10N</h3>
			<pre>
dateFormat: 'mm/yy',
yearSuffix: '' // Additional text to append to the year in the month headers
prevText: 'Prev', // Display text for previous month link
nextText: 'Next', // Display text for next month link
monthNames: ['January','February','March','April','May','June',
	'July','August','September','October',
	'November','December'], // Names of months for drop-down and formatting
monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
	'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], // For formatting</pre>
			<h3>Date Formatting</h3>
			<pre>
The format can be combinations of the following:
m  - month of year (no leading zero)
mm - month of year (two digit)
M  - month name short
MM - month name long
y  - year (two digit)
yy - year (four digit)
@ - Unix timestamp (ms since 01/01/1970)
! - Windows ticks (100ns since 01/01/0001)
'...' - literal text
'' - single quote</pre>
			<h2>Contribute!</h2>
			<pre>$ git clone <a href='http://github.com/thebrowser/jquery.ui.monthpicker'>http://github.com/thebrowser/jquery.ui.monthpicker</a></pre>
			<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script> 
			<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js'></script> 
			<script src='jquery.ui.monthpicker.js'></script>
			<script type="text/javascript">
				jQuery(document).ready(function() {
					jQuery("#month1").monthpicker({
						showOn:     "both",
						buttonImage: "calendar.png",
						buttonImageOnly: true
					});
					jQuery("#month2").monthpicker({
						monthNames: ['Janvier','F??vrier','Mars','Avril','Mai','Juin', 'Juillet','Ao??t','Septembre','Octobre','Novembre','D??cembre'],
						monthNamesShort: ['Jan','F??v','Mar','Avr','Mai','Jui', 'Jul','Ao??','Sep','Oct','Nov','D??c'],
						showOn:     "both",
						buttonImage: "images/calendar.png",
						buttonImageOnly: true,
						changeYear: false,
						yearRange: 'c-2:c+2',
						dateFormat: 'MM y'
					});
					jQuery("#date1").datepicker({
						showOn:     "both",
						buttonImage: "images/calendar.png",
						buttonImageOnly: true
					});
				});
			</script>
		</div>
    </body>
</html>