<div id="table-container">
					<?php
						$conn=mysqli_connect('localhost','root','','one_year_project');
						$query="select * from ict,ent,bst,bpt,eet,fdt,mtt";
						echo 'table border="2">';
						echo '<tr>';
						echo '<th>Course Title</th>';
						echo '<th>Course Code</th>';
						echo '<th>Status</th>';
						echo '<th>Credit</th>';
						echo '<th>Year</th>';
						echo '<th>Semester</th>';
						echo '<th>Department</th>';
						echo '</tr>';
						while($output=mysqli_fetch_assoc($result)){
							echo '<tr>';
							echo'<td>'.$output['Course Title'].'</td>';
							echo'<td>'.$output['Course Code'].'</td>';
							echo'<td>'.$output['Status'].'</td>';
							echo'<td>'.$output['Credit'].'</td>';
							echo'<td>'.$output['Year'].'</td>';
							echo'<td>'.$output['Semester'].'</td>';
							echo'<td>'.$output['Department'].'</td>';
						};
						echo '</table>';
						mysqli_close($conn);
						?>
					
				</div>
				
					