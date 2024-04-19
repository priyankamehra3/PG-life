<?php
if (! empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $conn = mysqli_connect("127.0.0.1", "root", "", "pglife") or die("Connection Error: " . mysqli_error($conn));
    $stmt = $conn->prepare("INSERT INTO tblcontact (user_name, user_email, subject,content) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $content);
    $stmt->execute();
    $message = "Your contact information is saved successfully.";
    $type = "success";
    $stmt->close();
    $conn->close();
}
require_once "contacts.php";
?>
<html>
<head>
    <style>
        input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 300px;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input[type=button] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 400px;
}

        </style>
<title>CONTACT US</title>
<?php
    include "includes/head_links.php";
    ?>
</head>
<body>
<?php
    include "includes/header.php";
    ?>

	<div class="container">
		<form name="frmContact" id="" frmContact="" method="post" action="contacts.php"
			enctype="multipart/form-data" onsubmit="return validateContactForm()">

			<div class="input-row">
				<label style="padding-top: 20px;">Name</label> <span
					id="userName-info" class="info"></span><br /> <input type="text"
					class="input-field" name="userName" id="userName" />
			</div>
			<div class="input-row">
				<label>Email</label> <span id="userEmail-info" class="info"></span><br />
				<input type="text" class="input-field" name="userEmail"
					id="userEmail" />
			</div>
			<div class="input-row">
				<label>Subject</label> <span id="subject-info" class="info"></span><br />
				<input type="text" class="input-field" name="subject" id="subject" />
			</div>
			<div class="input-row">
				<label>Message</label> <span id="userMessage-info" class="info"></span><br />
				<textarea name="content" id="content" class="input-field" cols="60"
					rows="6"></textarea>
			</div>
			<div>
				<input type="submit" name="send" class="btn-submit" value="Send" />
        <input type=button onClick="location.href='index.php'"
 value='back'>

				<div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"
		type="text/javascript"></script>
	<!-- include JavaScript validation here -->
 
  <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
</body>
</html>