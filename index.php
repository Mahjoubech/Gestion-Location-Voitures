
<?php
 $host = 'localhost';     
 $dbname = 'location_voiture';  
 $username = 'root';     
 $password = 'Mahjoub@123';          
 
 try {
     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $e) {
     echo "Erreur de connexion : " . $e->getMessage();
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body class="">
<!-- Side Bar -->
 <div class=" fixed top-0 left-0  w-[230px] h-[100%] z-50 overflow-hidden sidebar ">
    <a href="" class="logo text-xl font-bold h-[56px] flex items-center text-[#1976D2] z-30 pb-[20px] box-content">
        <i class=" mt-4 text-xxl max-w-[60px] flex justify-center "><i class="fa-solid fa-car-side"></i></i> 
        <div class="logoname ml-2"><span>Loca</span>Auto</div>
    </a>
    <ul class="side-menu w-full mt-12">
            <li class="active h-12 bg-transparent ml-2.5 rounded-l-full p-1"><a href=""><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li class="h-12 bg-transparent ml-2.5 rounded-l-full p-1"><a href=""><i class="fa-solid fa-user-group"></i>Clients</a></li>
            <li class="h-12 bg-transparent ml-2.5 rounded-l-full p-1"><a href=""><i class="fa-solid fa-car"></i>Cars</a></li>
            <li class="h-12 bg-transparent ml-1.5 rounded-l-full p-1"><a href=""><i class="fa-solid fa-file-contract"></i></i>Contrats</a></li>
            <li class="h-12 bg-transparent ml-1.5 rounded-l-full p-1"><a href=""><i class="fa-solid fa-chart-simple"></i>Statistic</a></li>
    </ul>
    <ul class="side-menu w-full mt-12">
            <li class="h-12 bg-transparent ml-2.5 rounded-l-full p-1">
                <a href="#" class="logout">
                    <i class='bx bx-log-out-circle'></i> Logout
                </a>
            </li>
     </ul>
 </div>
<!-- end sidebar -->
<!-- Content -->
<div class="content ">
    <!-- Navbar -->
    <nav class="flex items-center gap-6 h-14 bg-[#f6f6f9] sticky top-0 left-0 z-50 px-6">
            <i class='bx bx-menu'></i>
            <form action="#" class="max-w-[400px] w-full mr-auto">
                <div class="form-input flex items-center h-[36px]">
                    <input class="flex-grow px-[16px] h-full border-0 bg-[#eee] rounded-l-[36px] outline-none w-full text-[#363949]" type="search" placeholder="Search...">
                    <button class="w-[80px] h-full flex justify-center items-center bg-[#1976D2] text-[#f6f6f9] text-[18px] border-0 outline-none rounded-r-[36px] cursor-pointer" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle block min-w-[50px] h-[25px] bg-grey cursor-pointer relative rounded-full"></label>
            <a href="#" class="notif text-[20px] relative">
                <i class='bx bx-bell'></i>
                <span class="count absolute top-[-6px] right-[-6px] w-[20px] h-[20px] bg-[#D32F2F] text-[#f6f6f6] border-2 border-[#f6f6f9] font-semibold text-[12px] flex items-center justify-center rounded-full ">12</span>
            </a>
            <a href="#" class="profile">
                <img class="w-[36px] h-[36px] object-cover rounded-full" src="/image/1054-1728555216-removebg-preview.png">
            </a>
    </nav>
<!-- end nav -->
 <main class="w-full p-[36px_24px] max-h-[calc(100vh_-_56px)]">
 <div  class="header flex items-center justify-between gap-[16px] flex-wrap">
 <div class="left">
         <h1  class="text-[36px] font-semibold mb-[10px] text-dark">Dashboard</h1>
     <ul class="breadcrumb flex items-center space-x-[16px]">
        <li class="text-[#363949]"><a href="#">
         Client &npr;
           </a></li>
         /
        <li class="text-[#363949]"><a href="#" class="active">Cars &npr;</a></li> /
        <li class="text-[#363949]"><a href="#" >Contrats &npr;</a></li> /
        <li class="text-[#363949]"><a href="#" >Statistic &npr;</a></li>

     </ul>
</div>
   <a id="buttonadd" href="#" class="report h-[36px] px-[16px] rounded-[36px] bg-[#1976D2] text-[#f6f6f6] flex items-center justify-center gap-[10px] font-medium">
   <i class="fa-solid fa-user-plus"></i>
                    <span>Add Client</span>
    </a>
 </div>
 <!-- insights-->
 <ul class="insights grid grid-cols-[repeat(auto-fit,_minmax(240px,_1fr))] gap-[24px] mt-[36px]">
                <li>
                 <i class="fa-solid fa-user-group"></i>
                    <span class="info">
                        <h3>
                            20
                        </h3>
                        <p>Clients</p>
                    </span>
                </li>
                <li><i class="fa-solid fa-car-side"></i>
                    <span class="info">
                        <h3>
                           10
                        </h3>
                        <p>Cars</p>
                    </span>
                </li>
                <li><i class="fa-solid fa-file-signature"></i>
                    <span class="info">
                        <h3>
                           12
                        </h3>
                        <p>Contrats</p>
                    </span>
                </li>
 </ul>
 <!---- data content ---->
 <div class="bottom-data flex flex-wrap gap-[24px] mt-[24px] w-full ">
 <div class="orders  flex-grow flex-[1_0_500px]">
 <div class="header  flex items-center gap-[16px] mb-[24px]">
        <i class='bx bx-list-check'></i>
        <h3 class="mr-auto text-[24px] font-semibold">List Clients</h3>
        <i class='bx bx-filter'></i>
        <i class='bx bx-search'></i>
</div>
<!--- tables---->
<table  class="w-full border-collapse">
                        <thead>
                            <tr class="">
                                <th class="pb-3 px-3 text-sm text-left border-b border-grey">ID</th>
                                <th class="pb-3 px-3 text-sm text-left border-b border-grey">Complet Name</th>
                                <th class="pb-3 px-3 text-sm text-left border-b border-grey">Phone</th>
                                <th class="pb-3 px-3 text-sm text-left border-b border-grey">Adress</th>
                                <th class="pb-3 px-5 text-sm text-left border-b border-grey">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-4 px-3">
                                    1
                                </td>
                                <td class="py-4 px-3">Cherkaoui Mahjoub</td>
                                <td class="py-4 px-3">+212684153876</td>
                                <td class="py-4 px-3">Hay ENNEHDA CHICHAOUA</td>
                                <td class="py-4 px-3"> <i class='bx bx-edit-alt'></i> <i class="fa-solid fa-trash"></i></td>
                            </tr>
                        </tbody>
  </table>
 </div>
 </div>
 </main>
 
</div>
<div action="" class=" absolute right-0 top-[160px] z-50">
<div class="content">
    <button id="addClientBtn" class="add-client-btn">+ Add Client</button>
    <div id="addClientForm" class="add-client-form">
        <form>
            <h2>Add Client</h2>
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" placeholder="Enter First Name" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" placeholder="Enter Last Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" placeholder="Enter Phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" placeholder="Enter Address" required>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
            <button type="button" id="closeForm" class="close-btn">Close</button>
        </form>
    </div>
</div>

</div>
 <script src="/tailwind.js"></script>
 <script src="/main.js"></script>
</body>

</html>

