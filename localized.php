<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Localized Data for Philippines</h1>
    <table>
        <thead>
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
        <?php for ($i = 1; $i <=5; $i++): ?>
                <tr>
                    <td><?= htmlspecialchars($faker->name) ?></td>
                    <td><?= htmlspecialchars($faker->email) ?></td>
                    <td><?= htmlspecialchars('+63 ' . $faker->numerify('9## ### ####')) ?></td>
                    <td><?= htmlspecialchars($faker->address) ?></td>
                    <td><?= htmlspecialchars($faker->date('Y-m-d H:i:s')) ?></td>
                    <td><?= htmlspecialchars($faker->title) ?></td>
                </tr>
        <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>