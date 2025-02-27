<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h1 class="text-center mb-4">Book List</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
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
            <?php for ($i = 1; $i <= 15; $i++): ?>
                <tr>
                    <td><?= htmlspecialchars($faker->word) ?></td>
                    <td><?= htmlspecialchars($faker->name) ?></td>
                    <td><?= htmlspecialchars($faker->randomElement(['Fiction', 'Mystery', 'Science Fiction', 'Fantasy', 'Romance', 'Thriller', 'Historical', 'Horror'])) ?></td>
                    <td><?= htmlspecialchars($faker->numberBetween(1900, 2024)) ?></td>
                    <td><?= htmlspecialchars($faker->isbn13) ?></td>
                    <td><?= htmlspecialchars(implode(' ', $faker->words(10))) ?></td>
                </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>