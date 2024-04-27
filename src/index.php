<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV View</title>
    <link rel="stylesheet" href="styles.css">
    <script src="./main.js" defer></script>
</head>

<body>
    <main>
        <section>
            <h1>
                Upload CSV
            </h1>
            <form enctype="multipart/form-data">
                <input type="file" name="file">
                <input type="submit">
            </form>
        </section>
        <section>
            <div></div>
            
            <div class="table">
            </div>
        </section>
    </main>
</body>

</html>