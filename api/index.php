<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-slate-900 text-gray-200">
    <?php include('../components/header.php'); ?>

    <main class="mx-auto max-w-screen-lg px-3 py-6">
        <!-- hero -->
        <?php include('../components/hero.php'); ?>

        <!-- projects -->
        <?php include('../components/projects.php'); ?>
    </main>

    <?php include('../components/footer.php'); ?>
</body>

</html>