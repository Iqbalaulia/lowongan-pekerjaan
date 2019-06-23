<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="" style="line-height: 25px;">
              <!-- before -->

                <div class="d-table m-auto">
                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="<?php echo e(URL::asset('/images/shards-dashboards-logo.svg')); ?>" alt="Shards Dashboard">

                  <span class="d-none d-md-inline ml-1">Dashboard</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="">
                <!-- before -->

                  <i class="material-icons">edit</i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo e(route('requestpengajuan.index')); ?>">
                <!-- before -->
                

                  <i class="material-icons">vertical_split</i>
                  <span>Request Pengajuan</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="<?php echo e(route('persetujuan_pengajuan.index')); ?>">
                <!-- before -->
                

                  <i class="material-icons">vertical_split</i>
                  <span>Persetujuan Pengajuan</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="<?php echo e(route('accpengajuan.index')); ?>">
                <!-- before -->
                

                  <i class="material-icons">vertical_split</i>
                  <span>Hasil Pengajuan</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " href="<?php echo e(route('suratlamaran.index')); ?>">
                <!-- before -->
                

                  <i class="material-icons">note_add</i>
                  <span>Surat Lamaran</span>
                </a>
              </li>
            
            
              <li class="nav-item">
                <a class="nav-link " href="<?php echo e(route('hasil-test.index')); ?>">
                <!-- before -->
                

                  <i class="material-icons">person</i>
                  <span>Hasil Test</span>
                </a>
              </li>


             

              
             
            </ul>
          </div>
        </aside><?php /**PATH /home/aulia/laravel-project/lowongan-pekerjaan/resources/views/include/sidebar.blade.php ENDPATH**/ ?>