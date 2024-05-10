<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Page</title>
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="css/fisherman-add-transaction-styles.css">
    <script src="scripts/fisherman-add-transaction-script.js"></script>
</head>

<body>
    <section class="wrapper-main">
        <h3>Edit Transaction of a Fisherman</h3>
        <br>
        <form>
            <label for="fishermanSelection">Select Fisherman:</label>
            <select id="fishermanSelection" onchange="handleSelection(event)">
                <option value="Fisherman1">Fisherman 1</option>
                <option value="Fisherman2">Fisherman 2</option>
                <option value="Fisherman3">Fisherman 3</option>
                <option value="Fisherman4">Fisherman 4</option>
                <option value="Fisherman5">Fisherman 5</option>
            </select>
            <br>
            <label for="transactionDate">Transaction Date:</label>
            <input type="date" id="transactionDate" name="transactionDate"><br>
            <input type="number" name="Dadak" placeholder="Dadak" min="0"><br>
            <input type="number" name="Maral" placeholder="Maral" min="0"><br>
            <input type="number" name="Bam" placeholder="Bam" min="0"><br>
            <input type="number" name="Rohu" placeholder="Rohu" min="0"><br>
            <input type="number" name="Pabda" placeholder="Pabda" min="0"><br>
            <input type="number" name="BataPuti" placeholder="Bata Puti" min="0"><br>
            <input type="submit" value="Submit">
        </form>
    </section>
</body>

</html>
