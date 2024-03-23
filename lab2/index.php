<!DOCTYPE html>
<html>

<head>
<title>PHP Object Oriented Programming</title>
<!-- Unicode Vietnamese -->
<meta charset="utf-8">
<meta name="author" content="HuynhThaiHung.com" />
<!-- css definition file -->
<link href="../lap1/style.css" rel="stylesheet" />
</head>

<body>
<div id="wrapper">
<div class="row">
<?php
// Initial Setup and Member Class Usage
require_once("thanhvien.php"); // Includes the 'thanhvien.php' file which presumably defines the 'member' class. This is essential for creating member objects below.

// create new user info
$sv = new member("Nguyen Van A", "email1@gmail.com"); // Instantiates a new 'member' object for Nguyen Van A with an email address. This object is stored in the variable $sv.

// Output user info
echo "<h2>-- Member information --</h2>"; // Displays a header for the member information section.
echo "Code: ".$sv -> get_id()."<br/>"; // Retrieves and displays the ID of the member using the get_id() method.
echo "Fullname: ".$sv -> get_fullname()."<br/>"; // Retrieves and displays the full name of the member using the get_fullname() method.
echo "Email: ".$sv -> get_email()."<br/>"; // Retrieves and displays the email of the member using the get_email() method.

?>
<?php
// Displaying Additional Member Information
$sv2 = new member("Tran Van B", "email2@gmail.com"); // Creates another 'member' object for Tran Van B with a different email address.
echo "<h2>---More information--</h2>"; // Header indicating the start of additional member information.
echo "Code: ".$sv2 -> get_id()."<br/>"; // Outputs the ID of the second member.
echo "Fullname: ".$sv2 -> get_fullname()."<br/>"; // Outputs the full name of the second member.
echo "Email: ".$sv2 -> get_email()."<br/>"; // Outputs the email of the second member.

?>



</div>
<footer>
<p>Trendemy: <a href="trendemy.com">trendemy@gmail.com</a>.</p>
</footer>
</div>
<?php
// Including the Staff Class and Displaying Information
include("staff.php"); // Includes the 'staff.php' file that defines the 'staff' and possibly 'character' classes.

$character = new character("Nguyen Van A", 5678); // Instantiates a 'character' object, possibly another type of user or role within the system.

echo "<h2>--- Add: Object Oriented PHP ---</h2>"; // Header for additional OOP PHP examples.
echo "Full name: " . $character->get_fullname() . "<br/>"; // Displays the full name of the character.
echo "Country code: " . $character->get_countrycode() . "<br/>"; // Displays the country code associated with the character.

?>

<?php
// Detailed Staff Information Display
$staff = new staff("Nguyen Van B", 1234, "Guard"); // Instantiates a 'staff' object with name, staff code, and department.

echo "<h2>---Staff---</h2>"; // Header for the staff information section.
echo "Mã nhân viên: " . $staff->get_staffcode() . "<br/>"; // Displays the staff code using the get_staffcode() method.
echo "Họ tên: " . $staff->get_fullname() . "<br/>"; // Displays the full name of the staff.
echo "Mã QG: " . $staff->get_countrycode() . "<br/>"; // Displays the country code for the staff, which might be inherited or reused from the character class.
echo "Bộ phận: " . $staff->get_part() . "<br/>"; // Displays the department or part of the organization the staff belongs to.

?>
</body>


</html>