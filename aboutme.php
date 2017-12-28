<?php 
	require($_SERVER['DOCUMENT_ROOT']."/includes/header.php")
?>
	<!-- <link rel="stylesheet" type="text/css" href="/src/css/projects-styles.css"> -->
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<div id="gradient">
		<div id="grad-content">
			<h2 id="grad-heading" class="nav-nowrap" data-swipe="1">About Me</h2>
			<p id="grad-subheading" class="nav-nowrap" data-swipe="1">Learn more about me!</p>
		</div>
	</div>
	<div id="mainbody">
		<div class="newsection">
			<section>
				<h1>About Me!</h1>
				<p>My name is Nicolas J. Mendez. I'm a 22-year-old Full Stack developer based in Iowa. I am currently a student at Hawkeye Community College and will be graduating in 2017 with an Associate's Degree in Web-Development.</p>
				<p>I develop and design functional and creative web applications all the while experimenting with the latest web technologies in the industry. Having 2 years of web development under my belt I am confident that I can create any application that would be requested of me, while having the highest standards of security that OWASP recommends.</p>
			</section>
		</div>
		<div class="newsection">
			<section>
				<h1>Something Technical</h1>
				<p>I have a lot of knowledge about most front-end mark-up and programming tech. such as HTML 5 CSS3, Javascript, JQuery and Canvas as well as Photoshop and Illistrator. I also have experience with back-end development languages such as PHP, MYSQL, MSSQL, ASP.NET and Node-js with web-sockets.</p>
				<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
			</section>
		</div>
	</div>
	<script type="text/javascript">
		Highcharts.chart('container', {
		    chart: {
		        type: 'column',
		        backgroundColor: '#efefef',
		    },
		    title: {
		        text: 'Years Of Experience'
		    },
		    subtitle: {
		        text: 'Responsive!'
		    },
		    xAxis: {
		        type: 'category',
		        labels: {
		            rotation: -45,
		            style: {
		                fontSize: '13px',
		                fontFamily: 'Verdana, sans-serif'
		            }
		        }
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: '(Years)'
		        }
		    },
		    legend: {
		        enabled: false
		    },
		    tooltip: {
		        pointFormat: 'Years of experience: <b>{point.y:.1f}</b>'
		    },
		    series: [{
		        name: 'Population',
		        data: [
		            ['HTML5', <?= calcTime(strtotime('2015-01-01')) ?>],
		            ['CSS3', <?= calcTime(strtotime('2015-01-01')) ?>],
		            ['Javascript', <?= calcTime(strtotime('2015-01-01')) ?>],
		            ['JQuery', <?= calcTime(strtotime('2015-01-01')) ?>],
		            ['Canvas', <?= calcTime(strtotime('2016-01-01')) ?>],
		            ['Photoshop', <?= calcTime(strtotime('2014-01-01')) ?>],
		            ['Illistrator', <?= calcTime(strtotime('2016-01-01')) ?>],
		            ['PHP', <?= calcTime(strtotime('2015-01-01')) ?>],
		            ['ASP.NET', <?= calcTime(strtotime('2016-01-01')) ?>],
		            ['MYSQL', <?= calcTime(strtotime('2015-01-01')) ?>],
		            ['Node-JS (Websockets)', <?= calcTime(strtotime('2016-01-01')) ?>]
		        ],
		        dataLabels: {
		            enabled: true,
		            rotation: -90,
		            color: '#FFFFFF',
		            align: 'right',
		            format: '{point.y:.1f}', // one decimal
		            y: 10, // 10 pixels down from the top
		            style: {
		                fontSize: '13px',
		                fontFamily: 'Verdana, sans-serif'
		            }
		        }
		    }]
		});
	</script>

<?php 

	function calcTime ($time)
	{//input time that I started the skill
	    $time = time() - $time; // to get the time since that moment
	    $time = ($time<1)? 1 : $time;
	    $tokens = array (
	        31536000 => '',
	        2592000 => '',
	        604800 => '',
	        86400 => '',
	        3600 => '',
	        60 => '',
	        1 => ''
	    );
	    foreach ($tokens as $unit => $text) {
	        if ($time < $unit) continue;
	        $numberOfUnits = floor($time / $unit);
	        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'':'');
	    }
	}
	require($_SERVER['DOCUMENT_ROOT']."/includes/footer.php")
?>