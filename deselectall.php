<?php
								$servername = "localhost";  
								$username = "root";
								$password = "";
								$dbname = "upcatdb";

								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
								} 

								$sql = "UPDATE Invites SET invite = 0;";
								$result = $conn->query($sql);


								$conn->close();

								?>
<script type="text/javascript">location.href = 'Invitation';</script>