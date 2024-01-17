<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layout Example</title>
    <style>
        .card-container {
            display: flex;
            overflow-x: auto; /* Add horizontal scrollbar when needed */
            width: calc(7 * (200px + 20px)); /* Total width of 7 cards with margins */
        }

        .card {
            width: 200px; /* Fixed width for each card */
            margin: 0 10px;
            box-sizing: border-box;
            background-color: #f1f1f1;
            padding: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="card-container">
        <!-- Repeat the following card block for each card -->
        <div class="card">Card 1</div>
        <div class="card">Card 2</div>
        <div class="card">Card 3</div>
        <div class="card">Card 4</div>
        <div class="card">Card 5</div>
        <div class="card">Card 6</div>
        <div class="card">Card 7</div> <div class="card">Card 1</div>
        <div class="card">Card 2</div>
        <div class="card">Card 3</div>
        <div class="card">Card 4</div>
        <div class="card">Card 5</div>
        <div class="card">Card 6</div>
        <div class="card">Card 7</div> <div class="card">Card 1</div>
        <div class="card">Card 2</div>
        <div class="card">Card 3</div>
        <div class="card">Card 4</div>
        <div class="card">Card 5</div>
        <div class="card">Card 6</div>
        <div class="card">Card 7</div> <div class="card">Card 1</div>
        <div class="card">Card 2</div>
        <div class="card">Card 3</div>
        <div class="card">Card 4</div>
        <div class="card">Card 5</div>
        <div class="card">Card 6</div>
        <div class="card">Card 7</div> <div class="card">Card 1</div>
        <div class="card">Card 2</div>
        <div class="card">Card 3</div>
        <div class="card">Card 4</div>
        <div class="card">Card 5</div>
        <div class="card">Card 6</div>
        <div class="card">Card 7</div>
        <!-- Add more cards as needed -->
    </div>

</body>
</html>
