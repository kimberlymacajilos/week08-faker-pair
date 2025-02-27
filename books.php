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
    <h1>Books</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Publication Year</th>
                <th>ISBN</th>
                <th>Summary</th>
            </tr>
        </thead>
        <tbody>
        <?php for ($i = 1; $i <=15; $i++): ?>
                <tr>
                    <td><?= htmlspecialchars($faker->word) ?></td>
                    <td><?= htmlspecialchars($faker->name) ?></td>
                    <td><?= htmlspecialchars($faker->randomElement(['Fiction','Mystery', 'Science Fiction', 'Fantasy', 'Romance', 'Thriller', 'Historical', 'Horror'])) ?></td>
                    <td><?= htmlspecialchars($faker->numberBetween(1900, 2024)) ?></td>
                    <td><?= htmlspecialchars($faker->isbn13) ?></td>
                    <td><?= htmlspecialchars(implode(' ', $faker->words(10))) ?></td>
                </tr>
        <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>