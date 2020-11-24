<!-- <table class="table" border="2px solid black">

						<tr>
							<th scope="col">No</th>
							<th scope="col">Course Title</th>
							<th scope="col">Course Code</th>
							<th scope="col">Status</th>
							<th scope="col">Credit</th>
							<th scope="col">Year</th>
							<th scope="col">Semester</th>
							<th scope="col">Department</th>
						</tr>

					<?php
						/*$con = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($con,'one_year_project');

						if(isset($_POST['search'])){
							$year = $_POST['Year'];
							/*$sem = $_POST['Semester'];
							$department = $_POST['Department'];*/

							/*$query = "select * from 'ict','bst','ent','bpt','eet','fdt','mtt' where Year = '$year' && Semester = '$sem' && Department = '$department'";

							$query_run = mysqli_query($con,$query);

							while($row = mysqli_fetch_array($query_run)){
								?>
								<tr>
									<td><?php echo $row['Course Title']; ?></td>
									<td><?php echo $row['Course Code']; ?></td>
									<td><?php echo $row['Status']; ?></td>
									<td><?php echo $row['Credit']; ?></td>
									<td><?php echo $row['Year']; ?></td>
									<td><?php echo $row['Semester']; ?></td>
									<td><?php echo $row['Department']; ?></td>
								</tr>
								<?php
							}

						}
					?>