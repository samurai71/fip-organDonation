<?php

require_once('../admin/phpscripts/initialize.php');
$pageTitle = "Create User";

//require_login();

if(is_post_request()) {
  $subject = [];
  $admin['name'] = $_POST['name'] ?? '';
  //$admin['last_name'] = $_POST['last_name'] ?? '';
  $admin['email'] = $_POST['email'] ?? '';
  $admin['username'] = $_POST['username'] ?? '';
  $admin['password'] = $_POST['password'] ?? '';
  $admin['confirm_password'] = $_POST['confirm_password'] ?? '';

  $result = insert_admin($admin);
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = 'User created.';
    //redirect_to(url_for('/staff/admins/show.php?id=' . $new_id));
  } else {
    $errors = $result;
  }

} else {
  // display the blank form
  $admin = [];
  $admin["name"] = '';
  //$admin["last_name"] = '';
  $admin["email"] = '';
  $admin["username"] = '';
  $admin['password'] = '';
  $admin['confirm_password'] = '';
}

?>


<?php include('includes/header.php');
    include ('includes/topnav.php') ?>

    </div>
      <div class="app-dashboard-body off-canvas-wrapper">
        <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium" data-off-canvas>
                  <div class="app-dashboard-sidebar-title-area">
                    <div class="app-dashboard-close-sidebar">
                      <h3 class="app-dashboard-sidebar-block-title">Dashboard</h3>
                      <!-- Close button -->
                      <button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium" aria-label="Close menu" type="button">
                        <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-left"></i></a></span>
                      </button>
                    </div>
                    <div class="app-dashboard-open-sidebar">
                      <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium" aria-label="open menu" type="button">
                        <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-right"></i></a></span>
                      </button>
                    </div>
                  </div>
                  <div class="app-dashboard-sidebar-inner">
                    <ul class="menu vertical">
                    <li><a href="index.php" class="is-active">
                        <i class=" large fa fa-home" aria-hidden="true"></i><span class="app-dashboard-sidebar-text">Dashboard</span>
                      </a></li>
                      <li><a href="pages.php">
                        <i class="large fa fa-paperclip" aria-hidden="true"></i><span class="app-dashboard-sidebar-text">Pages</span>
                      </a></li>
                      <li><a href="categories.php">
                        <i class="large fa fa-cubes" aria-hidden="true"></i><span class="app-dashboard-sidebar-text">Categories</span>
                      </a></li>
                      <li><a href="posts.php">
                        <i class="large fa fa-rss-square" aria-hidden="true"></i><span class="app-dashboard-sidebar-text">Posts</span>
                      </a></li>
                      <!-- <li><a href="comments.html">
                        <i class="large fa fa-comment" aria-hidden="true"></i><span class="app-dashboard-sidebar-text">Comments</span>
                      </a></li> -->
                      <li><a href="users.php">
                        <i class=" large fa fa-cog" aria-hidden="true"></i><span class="app-dashboard-sidebar-text">Users</span>
                      </a></li>
                      <li><a href="stats.php">
                        <i class="large fa fa-industry" aria-hidden="true"></i><span class="app-dashboard-sidebar-text">Google Analytics</span>
                      </a></li>
                    </ul>
                  </div>
                </div>

<div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>

   <a class="back-link" href="<?php echo url_for('users.php'); ?>">&laquo; Back to Users</a> 


  <div class="admin new">
    <h1>Create User</h1>

    <?php echo display_errors($errors); ?>

    <form action="<?php echo url_for('user_new.php'); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="name" value="<?php echo h($admin['name']); ?>" /></dd>
      </dl>

      <dl>
        <dt>Email </dt>
        <dd><input type="text" name="email" value="<?php echo h($admin['email']); ?>" /><br /></dd>
      </dl>


      <dl>
        <dt>Username</dt>
        <dd><input type="text" name="username" value="<?php echo h($admin['username']); ?>" /></dd>
      </dl>


      <dl>
        <dt>Password</dt>
        <dd><input type="password" name="password" value="" /></dd>
      </dl>

      <dl>
        <dt>Confirm Password</dt>
        <dd><input type="password" name="confirm_password" value="" /></dd>
      </dl>
      <p>
        Passwords should be at least 6 characters and include at least one uppercase letter, lowercase letter, number, and symbol.
      </p>

      <!-- <dl>
        <dt>User Level</dt>
        <dd><select name="userlevel">
          <option value="">Please Selection a User level</option>
          <option value="1">Admin</option>
          <option value="2">Editor</option>
        </select></dd></dl> -->
      <br />

      <div id="operations">
        <input type="submit" value="Create User" />
      </div>
    </form>

  </div>

</div>

<?php include('includes/footer.php'); ?>
