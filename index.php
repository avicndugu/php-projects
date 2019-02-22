<!DOCTYPE html>	
<html>
	<head>
		<title>CV PROFILES</title>
		<style type="text/css">		
			table td{
				padding-left: 10px;
			}
			/*tr{
				background-color: red;
			}*/
			.odd {
				background-color: #ccc;
			}
			.even {
				/*background-color: #333;*/
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/bulma.css">
		
	</head>
	<body>
	<p>This project will help teams keep a database of each others skills and progress in a team.</p>


	Cohort
	Year
	<!-- CODE FOR CREATION OF A SECTION -->
		<?php $firstName=["Tom","Harry","Mary","Ruth","Oscar"];
				$secondName=["Kimani","Odongo","Kimanzi","Tamima","shikuku"];
				$pictures=["img/portfolio-1.jpg","img/portfolio-7.jpg","img/portfolio-3.jpg","img/portfolio-4.jpg","img/portfolio-8.jpg"];
				$title=["Programmer","Designer","Enterpreneur","Founder","Wordpress guru"];
			for($n=0;$n<count($firstName);$n++){	
				echo "$firstName[$n]<br>";
			}
			 ?>
		<!-- <?php echo $people[0]?> -->
	  <section class="section">
	    <div class="container">
	      <h1 class="title">CARD VIEW</h1>
	      	<!-- CODE FOR CREATION OF COLUMNS -->
	      	<div class="columns">
	 			<?php 
					for($n=0;$n<count($firstName);$n++){
	 			echo
	 			'<div class="column">
						<!-- CODE FOR CREATION OF A CARD -->
						<div class="card">
						  <div class="card-image">
						    <figure class="image is-4by3">
						      <img src="'.$pictures[$n].'" alt="Placeholder image">
						    </figure>
						  </div>
						  <div class="card-content">
						    <div class="media">
						      <div class="media-content">
						        <p class="title is-4">'.$firstName[$n].' '.$secondName[$n].'</p>
						        <p class="subtitle is-6">@'.$firstName[$n].'</p>
						        <p class="subtitle is-6">'.$title[$n].'</p>
						      </div>
						    </div>

						<!--<div class="content">
						      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						      Phasellus nec iaculis mauris. <a>@bulmaio</a>.
						      <a href="#">#css</a> <a href="#">#responsive</a>
						      <br>
						      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
						    </div> -->
						  </div>
						</div>
						<!--END OF CODE FOR CREATION OF A CARD -->
					</div>';
					}
					?>
			</div>
			<!--END OF CODE FOR CREATION OF A CARD -->
	    </div>
	  </section>
	  <!-- END OF CODE FOR CREATION OF A SECTION -->

	  <!-- LIST VIEW SECTION OF USERS -->
	  <section class="section">
	    <h1 class="title">LIST VIEW</h1>
		    <div class="container">
				<table>
					<?php
						//Add the table heads here with all the required collumn name.
						//Name Carreer, tools, expertise learning path. 
						$numbering=0;
						echo '<thead></thead>
								';

						for($n=0;$n<count($firstName);$n++){
					      	// echo '
						      // 		<tr class="odd">
						      // 			<td>'.$firstName[$n].'</td>
						      // 			<td>'.$secondName[$n].'</td>
						      // 			<td>'.$title[$n].'</td>
						      // 		</tr>
						      // 		<tr class="even">
						      // 			<td>'.$firstName[$n].'</td>
						      // 			<td>'.$secondName[$n].'</td>
						      // 			<td>'.$title[$n].'</td>
						      // 		</tr>';

						    if($n%2==0){
								$numbering+=1;
						    	echo '	
							    		<!-- With data that is odd numbered only -->
							      		<tr class="even">
							      			<td>'.$numbering.'</td>
							      			<td>'.$firstName[$n].'</td>
							      			<td>'.$secondName[$n].'</td>
							      			<td>'.$title[$n].'</td>
							      		</tr>
							      		';
						    }
						    else {
								$numbering+=1;
						    	echo '
						    			<tr class="odd">
						      			<td>'.$numbering.'</td>
						      			<td>'.$firstName[$n].'</td>
						      			<td>'.$secondName[$n].'</td>
						      			<td>'.$title[$n].'</td>
						      		</tr>
						    			';
						    }
						    echo '
						      		
						      		


							    <!-- <div class="container">
									<p><span class="">'.$firstName[$n].'</span> <span class="">'.$secondName[$n].'</span> <span class="">'.$title[$n].'</span></p>
							    </div> -->';
							}
				    ?>
		      	</table>
			</div>
	  </section>
	  <!-- END OF LIST VIEW SECTION OF USERS -->
	</body>
</html>