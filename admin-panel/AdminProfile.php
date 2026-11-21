<?php
include('./adminHeader.php');

$adminId = $_SESSION['admindata']['admin_id'];
$message = "";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $education = $_POST['education'];
    $designation = $_POST['designation'];
    $skills = $_POST['skills'];
    $about = $_POST['about'];

    $image = "";
    $checkQuery = "SELECT * FROM adminprofile WHERE adminId = '$adminId'";
    $checkResult = mysqli_query($conn, $checkQuery);
    if(mysqli_num_rows($checkResult) > 0){
        $oldData = mysqli_fetch_assoc($checkResult);
        $image = $oldData['profile_pic'];
    }

    if(!empty($_FILES['profile_photo']['name'])){
        $image = $_FILES['profile_photo']['name'];

        move_uploaded_file(
            $_FILES['profile_photo']['tmp_name'],
            "dist/img/" . $image
        );
    }
    $query = "UPDATE admin SET name='$name', email='$email' WHERE admin_id='$adminId'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($checkResult) > 0){
        $profileQuery = "UPDATE adminprofile SET education='$education', designation='$designation', skill='$skills', about='$about', profile_pic='$image', updated_date=NOW() WHERE adminId='$adminId'";
    }else{
        $profileQuery = "INSERT INTO adminprofile(adminId, education, designation, skill, about, profile_pic, updated_date) VALUES('$adminId','$education','$designation','$skills','$about','$image',NOW())";
    }

    $profileResult = mysqli_query($conn, $profileQuery);
    if($result && $profileResult){
        $message = "Profile Updated Successfully!";
    }else{
        $message = "Profile Update Failed!";
    }
}
$query = "SELECT name,email FROM admin WHERE admin_id='$adminId'";
$result = mysqli_query($conn, $query);
$adminData = mysqli_fetch_assoc($result);

$profileQuery = "SELECT * FROM adminprofile WHERE adminId='$adminId'";
$profileResult = mysqli_query($conn, $profileQuery);
$profileData = mysqli_fetch_assoc($profileResult);

?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if($message != ""){
      ?>
        <div class="alert alert-info">
            <?php echo $message; ?>
        </div>
      <?php
      }
      ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/<?php echo isset($profileData['profile_pic']) ? $profileData['profile_pic'] : 'default-profile.png'; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Your Information</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control" id="inputName" placeholder="Name"
                          value="<?php echo isset($adminData['name']) ? $adminData['name'] : ''; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo isset($adminData['email']) ? $adminData['email'] : ''; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Education</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="education" id="inputName2" placeholder="Education"><?php echo $profileData['education'] ?? ''; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Designation</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="designation" id="inputName2" placeholder="Designation" value="<?php echo $profileData['designation'] ?? ''; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="skills" id="inputName2" placeholder="Skills" value="<?php echo $profileData['skill'] ?? ''; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputAbout" class="col-sm-2 col-form-label">About</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputAbout" name="about" placeholder="About" ><?php echo $profileData['about'] ?? ''; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                    <label for="exampleInputFile" class="col-sm-2 col-form-label">Profile Photo</label>
                    <div class="input-group col-sm-10">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="profile_photo" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-danger">Update Profile</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('adminFooter.php');?>
  