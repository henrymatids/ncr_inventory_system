<script type="text/javascript">
	$(document).ready(function(){

		$('#calendar').fullCalendar({
			aspectRatio : 2.57,
			dayClick: function(date, jsEvent, view) {
				alert('clicked date '+date.format());
				alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
        		alert('Current view: ' + view.name);
		    }
		});
	});
</script>