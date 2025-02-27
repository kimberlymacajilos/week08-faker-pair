<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h1 class="text-center mb-4">User Accounts</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>User ID</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Account Created</th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <td><?= htmlspecialchars($faker->uuid) ?></td>
                    <td><?= htmlspecialchars($faker->name) ?></td>
                    <td><?= htmlspecialchars($email = $faker->email) ?></td>
                    <td><?= htmlspecialchars(explode('@', $faker->email)[0]) ?></td> 
                    <td><?= htmlspecialchars($faker->sha256()) ?></td>
                    <td><?= htmlspecialchars($faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d')) ?></td>
                </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>