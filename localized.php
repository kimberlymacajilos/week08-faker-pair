<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localized Data for Philippines</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="container mt-4">

    <h1 class="text-center mb-4">Localized Data for Philippines</h1>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Complete Address</th>
                    <th>Birthdate</th>
                    <th>Job Title</th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <tr>
                    <td><?= htmlspecialchars($faker->name) ?></td>
                    <td><?= htmlspecialchars($faker->email) ?></td>
                    <td><?= htmlspecialchars('+63 ' . $faker->numerify('9## ### ####')) ?></td>
                    <td><?= htmlspecialchars($faker->address) ?></td>
                    <td><?= htmlspecialchars($faker->date('Y-m-d')) ?></td>
                    <td><?= htmlspecialchars($faker->title) ?></td>
                </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>