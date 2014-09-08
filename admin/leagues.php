<?php include('header.php'); ?>

<?php include('sidebar.php'); ?>

        <div id="page-wrapper">
        <?php 
        	if( isset( $_GET['page'] ) ) {
        		$page = trim( $_GET['page'] );
        		
        		switch( $page ) {
        			case 'view':
        				include('tpls/leagues/view-league.php');
        				break;
        				
        			case 'create_season':
        				include('tpls/leagues/season-create.php');
        				break;
        				
        			case 'schedule':
        				include('tpls/leagues/view-schedule.php');
        				break;
        				
        			case 'maps':
        				include('tpls/leagues/view-maps.php');
        				break;
        				
        			case 'rules':
        				include('tpls/leagues/view-rules.php');
        				break;
        				
        			case 'edit':
        				include('tpls/leagues/edit-league.php');
        				break;
        				
        			case 'create':
        				include('tpls/leagues/create-league.php');
        				break;
        			
        			default:
        				break;
        		}
        		
        	} else {
        		include('tpls/leagues/view-all.php');
        	}
        ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <div id="delete-league-confirm" title="Delete league?" style="display:none;">
		<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>All corresponding league <em>match, season, schedule &amp; other</em> data will permanently deleted.</p>
	</div>
    
    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
    <script src="js/ezleague/league.js"></script>
    <script src="js/ezleague/teams.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>
	<script>
	CKEDITOR.replace( 'body', {
		toolbar: [
			[ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
			[ 'FontSize', 'TextColor', 'BGColor' ]
		]
	});
	</script>
</body>

</html>
