    <footer>
      <div class="navbar navbar-inverse footer">
        <div class="container-fluid">
          <div class="copyright">
            <a href="http://www.maseno.ac.ke" target="_blank">&copy; Kenya MRS <?php echo date("Y"); ?></a> All rights reserved
          </div>
        </div>
      </div>
    </footer>
    <script src="../elements/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../elements/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../elements/js/plugins/morris/raphael.min.js"></script>
    <script src="../elements/js/plugins/morris/morris.min.js"></script>
    <script src="../elements/js/plugins/morris/morris-data.js"></script>

    <script src="../elements/js/plugins/flot/jquery.flot.js"></script>
    <script src="../elements/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../elements/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../elements/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../elements/js/plugins/flot/flot-data.js"></script>

<script src="../elements/external/jquery/jquery.js"></script>
<script src="../elements/jquery-ui.js"></script>
<script src="../elements/jquery.datetimepicker.full.js"></script>
<script src="../elements/jquery.js"></script>
<script src="../elements/jquery.datetimepicker.full.js"></script>
<script type="text/javascript">
$('#dob').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'Y/m/d',
  formatDate:'Y/m/d',
  // minDate:'-1970/01/02', // yesterday is minimum date
  maxDate:'0' // and tommorow is maximum date calendar
});
$( "#dialog" ).dialog({
  autoOpen: false,
  width: 400,
  height:300,
  hide: "puff",
  show : "slide",
  modal: true,
  buttons: [
    {
      text: "Ok",
      click: function() {
        $( this ).dialog( "close" );
      }
    },
    {
      text: "Cancel",
      click: function() {
        $( this ).dialog( "close" );
      }
    }
  ]
});
$( "#dialog-link" ).click(function( event ) {
  $( "#dialog" ).dialog( "open" );
  event.preventDefault();

});

$( "#doctor" ).dialog({
  autoOpen: false,
  width: 400,
  height:300,
  hide: "puff",
  show : "slide",
  modal: true,
  buttons: [
    {
      text: "Ok",
      click: function() {
        $( this ).dialog( "close" );
      }
    },
    {
      text: "Cancel",
      click: function() {
        $( this ).dialog( "close" );
      }
    }
  ]
});
$( "#doctor-link" ).click(function( event ) {
  $( "#doctor" ).dialog( "open" );
  event.preventDefault();

});
$('#datetimepicker1').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'Y/m/d',
  formatDate:'Y/m/d',
  // minDate:'-1970/01/02', // yesterday is minimum date
  maxDate:'0' // and tommorow is maximum date calendar
});

$('#datetimepicker2').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'Y/m/d',
  formatDate:'Y/m/d',
  // minDate:'-1970/01/02', // yesterday is minimum date
  maxDate:'0' // and tommorow is maximum date calendar
});

$( "#details" ).tooltip();

$( "#accordion" ).accordion();

$( "#radioset" ).buttonset();

$( "#autocomplete" ).autocomplete({
  source: availableTags
});

$( "#tooltip" ).tooltip();

</script>

    <!-- /.container -->

    <!-- jQuery -->
    <!-- // <script src="bootstrap/js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- // <script src="bootstrap/js/bootstrap.min.js"></script> -->

</body>

</html>
