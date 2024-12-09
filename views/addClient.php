<?php
if(isset($_POST['Add'])){
   $nomcmpl = htmlspecialchars($_POST['namecomplet']);
   $phone = htmlspecialchars($_POST['phone']);
   $email = htmlspecialchars($_POST['email']);
   if(!empty($nomcmpl) && !empty($phone) && !empty($email)){
    //insert into
    $ajout = $pdo-> prepare('INSERT INTO client (NumClient,Nom,Adresse,Tele) VALUES(null,?,?,?)');
    $ajout->execute([$nomcmpl,$email,$phone]);
   
   }else{
    echo'error';
   }
}
?>

<div id="addClientForm" class="add-client-form fixed  right-[-100%] w-full max-w-[400px] h-[450px] shadow-[2px_0_10px_rgba(0,0,0,0.1)] p-6 flex flex-col gap-5 transition-all duration-700 ease-in-out z-50 top-[166px]">
        <form method="POST" class="flex flex-col gap-4">
            <h2 class="text-2xl font-semibold  mb-5">Add Client</h2>
            <div class="form-group flex flex-col">
                <label for="firstName" class="text-sm text-gray-700 mb-1">Complet Name</label>
                <input name="namecomplet" type="text"  id="firstName" placeholder="Enter First Name" class="p-2 border border-gray-300 rounded-lg outline-none text-sm" >
            </div>
            <div class="form-group flex flex-col">
                <label for="phone" class="text-sm text-gray-700 mb-1">Phone</label>
                <input name="phone" type="text" id="phone" placeholder="Enter Phone" class="p-2 border border-gray-300 rounded-lg outline-none text-sm" >
            </div>
            <div class="form-group flex flex-col">
                <label for="address" class="text-sm text-gray-700 mb-1">Address</label>
                <input name="email" type="text" id="address" placeholder="Enter Address" class="p-2 border border-gray-300 rounded-lg outline-none text-sm" >
            </div>
            <button type="submit" class="submit-btn border-none px-4 py-2 rounded-lg cursor-pointer transition-all duration-500 ease-in-out" name="Add" >Add</button>
            <button type="button" id="closeForm" class="close-btn border-none px-4 py-2 rounded-lg cursor-pointer transition-all duration-500 ease-in-out">Close</button>
      </form>
</div>