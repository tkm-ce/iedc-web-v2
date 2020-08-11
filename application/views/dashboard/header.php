<?php foreach ($userinfo as $row) { ?>

	<div class="page-wrapper">
		<nav class="navbar">
			<a href="#" class="sidebar-toggler">
				<i data-feather="menu"></i>
			</a>
			<div class="navbar-content">
				<form class="search-form">
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i data-feather="search"></i>
							</div>
						</div>
						<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
					</div>
				</form>
				<ul class="navbar-nav">
					<li class="nav-item dropdown nav-apps">
						<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i data-feather="grid"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="appsDropdown">
							<div class="dropdown-header d-flex align-items-center justify-content-between">
								<p class="mb-0 font-weight-medium">External Apps</p>
							</div>
							<div class="dropdown-body">
								<div class="d-flex align-items-center apps">
									<a href="https://www.linkedin.com/company/iedc-tkmce/" target="_blank"><i data-feather="linkedin" class="icon-lg"></i>
										<p>Linkedin</p>
									</a>
									<a href="https://calendar.google.com/" target="_blank"><i data-feather="calendar" class="icon-lg"></i>
										<p>Calendar</p>
									</a>
									<a href="mailto:info@tkmce.ac.in"><i data-feather="mail" class="icon-lg"></i>
										<p>Email</p>
									</a>
									<a href="https://www.instagram.com/iedc_tkmce/" target="_blank"><i data-feather="instagram" class="icon-lg"></i>
										<p>Instagram</p>
									</a>
								</div>
							</div>
							<div class="dropdown-footer d-flex align-items-center justify-content-center">
								<a href="javascript:;">View all</a>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown nav-notifications">
						<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i data-feather="bell"></i>
							<div class="indicator">
								<div class="circle"></div>
							</div>
						</a>
						<div class="dropdown-menu" aria-labelledby="notificationDropdown">
							<div class="dropdown-header d-flex align-items-center justify-content-between">
								<p class="mb-0 font-weight-medium">0 New Notifications</p>
							</div>
							<div class="dropdown-body">
								<a href="javascript:;" class="dropdown-item">
									<div class="icon">
										<i data-feather="user-plus"></i>
									</div>
									<div class="content">
										<p>Your notifications shows here</p>
										<p class="sub-text text-muted">@iedctkmce</p>
									</div>
								</a>
							</div>
							<div class="dropdown-footer d-flex align-items-center justify-content-center">
								<a href="javascript:;">View all</a>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown nav-profile">
						<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="<?= $profile_pic ?>" alt="profile">
						</a>
						<div class="dropdown-menu" aria-labelledby="profileDropdown">
							<div class="dropdown-header d-flex flex-column align-items-center">
								<div class="figure mb-3">
									<img src="<?= $profile_pic ?>" alt="">
								</div>
								<div class="info text-center">
									<p class="name font-weight-bold mb-0"> <?= $row['fullname'] ?></p>
									<p class="email text-muted mb-3"> <?= $row['email'] ?></p>
								</div>
							</div>
							<div class="dropdown-body">
								<ul class="profile-nav p-0 pt-3">
									<li class="nav-item">
										<a href="<?= base_url() ?>/user/dashboard/profile" class="nav-link">
											<i data-feather="user"></i>
											<span>Profile</span>
										</a>
									</li>
									<li class="nav-item">
										<span onclick="showSwal('title-icon-text-footer')" class="nav-link">
											<i data-feather="edit"></i>
											<span>Edit Profile</span>
										</span>
									</li>
									<li class="nav-item">
										<a href="<?php echo $loginURL ?>" class="nav-link">
											<i data-feather="repeat"></i>
											<span>Switch User</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?= base_url(); ?>auth/logout" class="nav-link">
											<i data-feather="log-out"></i>
											<span>Log Out</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</li>
				</ul>
			</div>
		</nav>

	<?php } ?>