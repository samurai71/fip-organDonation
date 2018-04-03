<?php 
  $pageTitle = "Stats";
  include ('includes/header.php');
   include ('includes/topnav.php');
  //include ('includes/sidebarnav.php')
 ?>
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
              <h2 class="text-center">Google Analytics</h2>
                <ul class="stats-list">
                  <li>
                    135 <span class="stats-list-label">Returning Visitors</span>
                  </li>
                  <li class="stats-list-positive">
                    17,678 <span class="stats-list-label">Total Visitors</span>
                  </li>
                  <li class="stats-list-negative">
                    2,390 <span class="stats-list-label">New Visitors</span>
                  </li>
                </ul>
    
    
    
    
            </div>



<?php 
      include ('includes/footer.php');
     ?>