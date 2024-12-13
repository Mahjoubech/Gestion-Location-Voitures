<?php
require_once './views/databasecnx.php'; // Database connection file

// Example contract data fetch
$contract_id = 1; // Example contract ID
$contract_details = [];
$client_details = [];

$sql = "SELECT * FROM contrat WHERE NumContrat = $contract_id"; // Modify query as needed
$result = $cnx->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contract_details = [
            'contract_id' => $row['NumContrat'],
            'start_date' => $row['DateDeDebut'],
            'end_date' => $row['DateFin'],
        ];
        $client_details = [
            'name' => $row['nom'],
            'address' => $row['Adresse'],
            'phone' => $row['Tele'],
        ];
    }
} else {
    echo "No contract found.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="/tailwind.js"></script>
</head>
<body class="bg-white ">

    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-blue-600 text-white p-6">
            <div class="flex justify-around items-center">
                <a href="" class="logo text-xl font-bold h-[56px] flex items-center ] z-30 pb-[20px] box-content">
                    <i class=" mt-4 text-xxl max-w-[60px] flex justify-center "><i class="fa-solid fa-car-side"></i></i>
                    <div class="logoname ml-2"><span>Loca</span>Auto</div>
                </a>
                <h1 class="text-2xl font-bold">Contract Agreement</h1>
            </div>
        </header>

        <!-- Content -->
        <main class="flex-grow p-6">
            <!-- Contract Details -->
            <section class="bg-white shadow rounded-lg p-6 mb-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h2 class="text-xl font-bold text-blue-600">Contract Information</h2>
                        <p class="text-sm">Contract ID: <span class="font-medium"><?php echo $contract_details['contract_id']; ?></span></p>
                        <p class="text-sm">Start Date: <span class="font-medium"><?php echo $contract_details['start_date']; ?></span></p>
                        <p class="text-sm">End Date: <span class="font-medium"><?php echo $contract_details['end_date']; ?></span></p>
                    </div>
                    <div class="text-right">
                        <h2 class="text-xl font-bold text-blue-600">Client Information</h2>
                        <p class="text-sm">Name: <span class="font-medium"><?php echo $client_details['name']; ?></span></p>
                        <p class="text-sm">Address: <span class="font-medium"><?php echo $client_details['address']; ?></span></p>
                        <p class="text-sm">Phone: <span class="font-medium"><?php echo $client_details['phone']; ?></span></p>
                    </div>
                </div>
            </section>

            <!-- Contract Terms -->
            <section class="bg-white shadow rounded-lg p-6 mb-6">
                <h2 class="text-xl font-bold text-blue-600 mb-4">Contract Terms & Conditions</h2>
                <ul class="list-disc pl-6 space-y-2 text-sm">
                    <li>The client agrees to rent a Toyota Corolla for 12 months starting from the contract's start date.</li>
                    <li>The monthly rental fee is <span class="font-medium">$300</span>, payable by the 5th of each month.</li>
                    <li>Full insurance coverage is included in the rental fee.</li>
                    <li>The vehicle must be returned in the same condition it was rented, excluding normal wear and tear.</li>
                    <li>Late payments will incur a penalty of <span class="font-medium">5%</span> of the monthly fee.</li>
                </ul>
            </section>

            <!-- Signatures -->
            <section class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-bold text-blue-600 mb-4">Signatures</h2>
                <div class="grid grid-cols-2 gap-6">
                    <!-- Client Signature -->
                    <div>
                        <p class="text-sm font-medium">Client Signature:</p>
                        <div class="border-2 border-dashed border-gray-400 h-24 mt-2"></div>
                        <p class="text-sm mt-2 text-gray-600">Name: <span class="font-medium"><?php echo $client_details['name']; ?></span></p>
                        <p class="text-sm text-gray-600">Date: <span class="font-medium"><?php echo $contract_details['start_date']; ?></span></p>
                    </div>
                    <!-- Company Representative Signature -->
                    <div>
                        <p class="text-sm font-medium">Representative Signature:</p>
                        <div class="border-2 border-dashed border-gray-400 h-24 mt-2"></div>
                        <p class="text-sm mt-2 text-gray-600">Name: <span class="font-medium">Jane Smith</span></p>
                        <p class="text-sm text-gray-600">Date: <span class="font-medium"><?php echo $contract_details['start_date']; ?></span></p>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white p-4 text-center text-sm">
            <p>&copy; 2024 LocaAuto. All rights reserved.</p>
        </footer>
    </div>

   
    <script src="/main.js"></script>
</body>
</html>
