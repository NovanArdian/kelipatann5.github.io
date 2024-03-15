<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Kelipatan 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #272727;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #333;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 600px;
        }
        h2 {
            color: #4CAF50;
            margin-bottom: 30px;
            text-align: center;
        }
        label {
            color: #4CAF50;
            margin-bottom: 20px;
        }
        input[type="number"] {
            background-color: #5a5a5a;
            color: #fff;
            border: 1px solid #4CAF50;
            border-radius: 4px;
            padding: 15px;
            margin-bottom: 30px;
            width: 100%;
        }
        button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 20px 30px;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        h3 {
            color: #4CAF50;
            margin-top: 30px;
        }
        .output {
            background-color: #444;
            padding: 30px;
            border-radius: 8px;
            margin-top: 30px;
        }
        .output li {
            list-style-type: none;
            margin-bottom: 15px;
            color: #fff;
            display: flex;
            align-items: center;
        }
        .output li::before {
            content: "\2022";
            color: #4CAF50;
            display: inline-block;
            width: 1em;
            margin-right: 15px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            input[type="number"] {
                padding: 12px;
            }
            button {
                padding: 15px 25px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Mencari Kelipatan 5</h2>
        <form method="post">
            <div class="mb-4">
                <label for="number" class="form-label">Masukkan Angka:</label>
                <input type="number" id="number" name="number" class="form-control" placeholder="Masukkan angka" required>
            </div>
            <button type="submit" class="btn btn-primary">Proses</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input_number = $_POST["number"];
            echo "<h3>Kelipatan 5:</h3>";
            if ($input_number >= 5) {
                // Menghitung dan menampilkan kelipatan 5
                echo "<div class='output'>";
                echo "<ul>";
                for ($i = 5; $i <= $input_number; $i += 5) {
                    echo "<li>Kelipatan ke-" . ($i / 5) . ": " . $i . "</li>";
                }
                echo "</ul>";
                echo "</div>";
            } else {
                echo "<p class='mt-4'>Angka harus lebih besar dari atau sama dengan 5.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
