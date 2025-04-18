<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="20">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        pre {
            margin: 0;
            padding: 10px;
            height: 100vh;
            overflow: auto;
            white-space: pre-wrap;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <pre id="logContent">
    <?php
        $file = '/Users/clovis/log.txt';
        if (file_exists($file)) {
            echo htmlspecialchars(file_get_contents($file));
        } else {
            echo "Le fichier n'existe pas.";
        }
    ?>
    </pre>
    <script>
        const preElement = document.getElementById('logContent');
        preElement.scrollTop = preElement.scrollHeight;
        setInterval(() => {
            preElement.scrollTop = preElement.scrollHeight;
        }, 20000);
    </script>
    <script>
        const lines = preElement.innerText.split("\n");
preElement.innerHTML = lines.map(line => {
    if (line.includes("OK")) {
        return `<span style="color:green;">${line}</span>`;
    } else {
        return line;
    }
}).join("<br>");
    </script>

<script>
    document.title = "État - " + new Date().toLocaleTimeString();
</script>


</body>
</html>