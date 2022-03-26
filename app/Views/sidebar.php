<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
    <script type="text/javascript" src="<?= base_url('assets/js/sidebars.js');?>"> </script>
	  <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/sidebars.css');?>">    
  </head>
  <body>
 
  
 
  <div class="row">
    
    
        <div class="col-2 p-3 bg-dark position-fixed" id="sticky-sidebar">
            <div class="nav flex-column flex-nowrap vh-100 overflow-auto text-white p-4 ">
              
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="<?= base_url('assets/assets/logo.svg');?>" width="80" height="80" class="d-inline-block align-top" alt="">
              <span class="fs-4">Philippine Public Safety College</span>
            </a>
            
            <hr>
            
            <ul class="nav nav-pills flex-column mb-auto">
              
            <li>
                <a  href="<?= base_url('Home');?>" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Subjects
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Questtionaires
                </a>
              </li>
              <li>
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                  <h4 class="nav-link text-white link-header">Faculties
                  </h4>
                <ul>
                    <li>
                          <a href="<?= base_url('Faculties');?>" class="nav-link text-white sidebar-links">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                        Add Faculty 
                        </a>
                    </li>
                    <li>
                      <a href="<?= base_url('Faculties/facultyList');?>" class="nav-link text-white sidebar-links">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                          Faculty List
                          </a>
                    </li>
              </ul>
              </li>
              <li>
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                  <h4 class="nav-link text-white link-header">Students
                  </h4>
                <ul>
                    <li>
                          <a href="<?= base_url('Faculties');?>" class="nav-link text-white sidebar-links">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                        Add Student 
                        </a>
                    </li>
                    <li>
                      <a href="<?= base_url('Faculties/facultyList');?>" class="nav-link text-white sidebar-links">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                          Student List
                          </a>
                    </li>
              </ul>
              </li>
              
            </ul>
            
            <hr>
           
         

    
          <div class="dropup">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-toggle="dropdown" aria-expanded="false">
              <strong>ADMIN</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <a class="dropdown-item item" href="<?= base_url('/login/logout');?>">Sign Out</a>
            </ul>
          </div>
        </div>
            </div>
        </div>




<script type="text/javascript" src="<?= base_url('assets/js/sidebars.js');?>"> </script>
  </body>
</html>


