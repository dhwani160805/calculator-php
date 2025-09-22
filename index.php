<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator (GET & POST)</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #e0f7fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        h2 {
            color: #00796b;
            margin-bottom: 15px;
        }

        form {
            background: #ffffff;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            margin-bottom: 25px;
            width: 320px;
        }

        input[type="number"], select {
            width: calc(100% - 18px);
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #b2dfdb;
            border-radius: 8px;
            font-size: 15px;
        }

        input[type="submit"] {
            background: linear-gradient(90deg, #00796b, #004d40);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        p.result {
            font-size: 18px;
            font-weight: bold;
            color: #004d40;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h2>Calculator using GET method</h2>
    <form method="get" action="">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <select name="op">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">×</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['num1'])) {
        $n1 = $_GET['num1'];
        $n2 = $_GET['num2'];
        $op = $_GET['op'];
        $result = 0;
        if ($op == "add") $result = $n1 + $n2;
        if ($op == "sub") $result = $n1 - $n2;
        if ($op == "mul") $result = $n1 * $n2;
        echo "<p class='result'>Result: $result</p>";
    }
    ?>

    <h2>Calculator using POST method</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <select name="op">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">×</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num1'])) {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $op = $_POST['op'];
        $result = 0;
        if ($op == "add") $result = $n1 + $n2;
        if ($op == "sub") $result = $n1 - $n2;
        if ($op == "mul") $result = $n1 * $n2;
        echo "<p class='result'>Result: $result</p>";
    }
    ?>

</body>
</html>
