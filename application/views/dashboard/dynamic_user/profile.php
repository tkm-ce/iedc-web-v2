<?php foreach ($userinfo as $row) { ?>
    <div class="page-content">
        <div class="profile-page tx-13">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="profile-header">
                        <div class="cover">
                            <div class="gray-shade"></div>
                            <figure>
                                <img src="<?= base_url() ?>/assets/dashboard/images/profile-cover.jpg" class="img-fluid" alt="profile cover">
                            </figure>
                            <div class="cover-body d-flex justify-content-between align-items-center">
                                <div>
                                    <img class="profile-pic" src="<?= $profile_pic ?>" alt="profile">
                                    <span class="profile-name"> <?= $row['fullname'] ?></span>
                                </div>
                                <div class="d-none d-md-block">
                                    <span class="btn btn-primary btn-icon-text btn-edit-profile" onclick="showSwal('title-icon-text-footer')">
                                        <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="header-links">
                            <ul class="links d-flex align-items-center mt-3 mt-md-0">
                                <li class="header-link-item d-flex align-items-center">
                                    <i class="mr-1 icon-md" data-feather="home"></i>
                                    <a class="pt-1px d-none d-md-block" href="<?= base_url() ?>">Home</a>
                                </li>
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center active">
                                    <i class="mr-1 icon-md" data-feather="user"></i>
                                    <a class="pt-1px d-none d-md-block" href="<?= base_url() ?>user/dashboard/profile">About</a>
                                </li>
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                    <i class="mr-1 icon-md" data-feather="columns"></i>
                                    <a class="pt-1px d-none d-md-block" href="<?= base_url() ?>user/dashboard/">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-md-block col-md-12 col-xl-12 left-wrapper">
                    <div class="card rounded">
                        <h6 class="card-title text-center mt-3">ABOUT</h6>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody class="text-center">
                                    <tr>
                                        <th>Name</th>
                                        <td><?= $row['fullname'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Google user name</th>
                                        <td><?= $row['google_user_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Last Update</th>
                                        <td><?= $row['timestamp'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?= $row['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td><?= $row['phone'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Branch</th>
                                        <td><?= $row['branch'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Year</th>
                                        <td><?= $row['course_duration_from'] ?> - <?= $row['course_duration_to'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Admission Number</th>
                                        <td><?= $row['admission_number'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="d-md-block col-md-12 col-xl-12 left-wrapper">
                    <div class="card rounded">
                        <h4 class="card-title text-center mt-3">Why IEDC</h4>
                        <?php if (!$row['whyIedc']) { ?>
                            <b class="text-center text-danger" style="margin: 50px;">No data found</b>
                        <?php } else { ?>
                            <p style="margin: 50px;"><?= $row['whyIedc'] ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>   
<?php } ?>