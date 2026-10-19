<?php
$titre_onglet = isset($page_title) ? "StageRadar - " . $page_title : "StageRadar";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre_onglet; ?></title>
    
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar">
    <a href="index.php" class="logo" style="text-decoration: none;">
        <img src="assets/img/logo.png" alt="Logo StageRadar" class="logo-img">
        StageRadar
    </a>
    <button class="menu-btn" id="openMenu"><i class="fa-solid fa-bars"></i></button>
</nav>