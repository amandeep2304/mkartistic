	
	<?php

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$style = $_POST['style'];
		$submit = $_POST['ip_submit'];

		if (isset($submit)) {

			$message = "<table>
							<tr>
								<th>
									Name
								</th>
								<td>
									".$name."
								</td>
							</tr>
							<tr>
								<th>
									Email
								</th>
								<td>
									".$email."
								</td>
							</tr>
							<tr>
								<th>
									Phone
								</th>
								<td>
									".$phone."
								</td>
							</tr>
							<tr>
								<th>
									Style
								</th>
								<td>
									".$style."
								</td>
							</tr>
						</table>";

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: '.$email . "\r\n";
			$subject = "MKArtistic-Enquiry/Contact";
			$to = "manpreet.padam1996@gmail.com"; 

			mail($to,$subject,$message,$headers);

			header("location:index.html");

		}

	?>