<?php 


  $pages = [
    [
      'url' => '/finalproject/capstone/dashboard',
      'name' => 'dashboard',
      'icon' => 'fas fa-tachometer-alt'
    ],
    [
      'url' => '/finalproject/capstone/maintenance',
      'name' => 'maintenance',
      'icon' => 'fas fa-cog'
    ],
     [
      'url' => '/finalproject/capstone/students-list',
      'name' => 'students list',
      'icon' => 'fas fa-user'
    ],
     [
      'url' => '/finalproject/capstone/teachers-list',
      'name' => 'teachers list',
      'icon' => 'fas fa-user'
    ],
     [
      'url' => '/finalproject/capstone/book-available',
      'name' => 'book available',
      'icon' => 'fas fa-book'
    ],
     [
      'url' => '/finalproject/capstone/book-borrowed',
      'name' => 'book borrowed',
      'icon' => 'fas fa-book-open'
    ],
     [
      'url' => '/finalproject/capstone/book-returned',
      'name' => 'book returned',
      'icon' => 'fas fa-undo-alt'
    ]
  ];

  // var_dump($_SERVER['REQUEST_URI']); exit();


?>
<!doctype html>
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->
<!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">

 <title>CEC LIBRARY SYSTEM</title>
</head>
<body>


<header>
   <nav class="navbar navbar-expand-lg bg-light">
     <div class="container-fluid">
      <div class="d-flex align-items-center" style="width: 50px;">
         <img src="images/ceclogo.png"> 
         <a class="navbar-brand text-light ms-2" href="#">CEC LIBRARY INTEGRATED SYSTEM</a>
      </div>
      
      
         <ul class="navbar-nav">
           <li class="nav-item mx-3">
             <a class="nav-link nav-icon" href="#"><i class="fas fa-envelope"></i></a>
           </li>
           <li class="nav-item mx-3">
             <a class="nav-link nav-icon" href="#"><i class="fas fa-bell"></i></a>
           </li>
         </ul>
      
     </div>
   </nav>
</header>

<!-- SIDEBAR -->
<section id="side-bar">
      <!-- SIDEBAR PROFILE -->
      <div class="profile-sidebar d-flex  align-items-center py-2 px-1">
         <div class="profile-image me-3 ms-3">
            <img src="images/admin.png">
         </div>
         <div class="profile-username d-flex flex-column justify-content-center">
            <h3 class="m-0">OLISIS</h3>
            <small>ADMIN/LIBRARIAN</small>
         </div>
      </div>
      <!-- SIDEBAR-MENU -->
      <div class="sidebar-menu py-2 mt-3">
         <ul class="navbar-nav">

          <?php foreach($pages as $page) : ?>
           <li class="nav-item">
            <a href="<?= $page['url']; ?>" class="py-3 px-3 d-block text-decoration-none <?= $_SERVER['REQUEST_URI'] == $page['url'] ? activelink : ''?>">
               <i class="<?= $page['icon']; ?>"></i>
               <span><?= strtoupper($page['name']); ?></span>
            </a>
           </li>
          <?php endforeach; ?>
        
           <li class="nav-item">
            <a href="#" class="py-3 px-3 d-block text-decoration-none">
               <i class="fas fa-sign-out-alt"></i>
               <span>LOGOUT</span>
            </a>
           </li>

         </ul>
      </div>
</section>