  </div>
    <!-- /#wrapper -->
	
	
	  <!--WYSISWYG EDITOR-->	
	  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	  <script>tinymce.init({ selector:'textarea' });</script>


    <script src="js/dropzone.js"></script>
	  
	  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Views',    <?php echo $session->count;?> ],
          ['Comments', <?php echo Comment::count_all();?> ],
          ['Users' ,   <?php echo User::count_all();?> ],
		  ['Photos',   <?php echo Photo::count_all();?> ]
        ]);

        var options = {
		  legend:'none',
		  pieSliceText: 'label',
		  backgroundColor: 'transparent',
          title: 'Photo gallery statistics'
        
		
		};

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
	  </script>

	  

    
</body>

</html>
