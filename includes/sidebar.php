<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>

<li><a href="book-house.php"><i class="fa fa-file-o"></i>Book House</a></li>
<li><a href="room-details.php"><i class="fa fa-file-o"></i>House Details</a></li>
<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
<li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
<li><a href="img/AGREEMENT.docx"><i class="fa fa-file-o"></i>Download Agreement</a></li>
<li><a href="Payment.php"><i class="fa fa-file-o"></i>Payment</a></li>
<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i> Tenant Registration</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i> Tenant Login</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php } ?>

			</ul>
		</nav>