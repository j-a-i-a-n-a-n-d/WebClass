<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $consumerNumber = $_POST['consumerNumber'];
    $consumerName = $_POST['consumerName'];
    $prevReading = $_POST['prevReading'];
    $presReading = $_POST['presReading'];
    $UnitsConsumed = $presReading - $prevReading;
    $rate;
    if ($UnitsConsumed < 100) {
        $rate = 3;
    } else if ($UnitsConsumed > 100 && $UnitsConsumed < 200) {
        $rate = 4;
    } else if ($UnitsConsumed > 200 && $UnitsConsumed < 300) {
        $rate = 5;
    } else {
        $rate = 6;
    }
    $amount = $UnitsConsumed * $rate;
}
?>




<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Electricity Bill </title>
    </head>

    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> ">
            <div style="height: 50px; width:100%;display:flex; align-items:center;justify-content:center;
background-color :orangered; padding: 5px;  ">
                <h1 style="color:aliceblue; ">Electricity Bill </h1>
            </div>
            <div
                style="background-color: yellow;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:60px;">
                <label for="consumerNumber">Enter the consumer number</label> <input type="text" name="consumerNumber"
                    required>
            </div>
            <div
                style="background-color: white;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:80px;">
                <label for="consumerName">Enter the consumer name</label>
                <input type="text" name="consumerName" style="background-color: whitesmoke;" required>
            </div>
            <div
                style="background-color: yellow;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:70px;">
                <label for="prevReading">Enter the previous reading</label> <input type="Number" name="prevReading"
                    required>
            </div>
            <div
                style="background-color: white;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:80px;">
                <label for="presReading">Enter the present reading</label>
                <input type="Number" name="presReading" style="background-color: whitesmoke;" required>
            </div>
            <div style="height: 50px; width:100%;display:flex; align-items:center;justify-content:center;
background-color :orangered; padding: 5px;  ">
                <input type="submit" style="height: 30px; width:80px" name="submit"> </input>
            </div>
        </form>




        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div style="height: 50px; width:100%;display:flex; align-items:center;justify-content:center;
background-color :orangered; padding: 5px;  ">
                <h1 style="color:aliceblue; ">Electricity Bill </h1>
            </div>
            <div
                style="background-color: yellow;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:60px;">
                <strong> Consumer Number</strong>
                <p>
                    <?php echo $consumerNumber ?>
                </p>
            </div>
            <div
                style="background-color: white;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:80px;">
                <strong>Consumer Name</strong>
                <p>
                    <?php echo $consumerName ?>
                </p>
            </div>
            <div
                style="background-color: yellow;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:70px;">
                <strong> Previous Reading</strong>
                <p>
                    <?php echo $prevReading ?>
                </p>
            </div>
            <div
                style="background-color: white;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:80px;">
                <strong> Present Reading</strong>
                <p>
                    <?php echo $presReading ?>
                </p>
            </div>
            <div
                style="background-color: yellow;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:80px;">
                <strong> Unit Consume</strong>
                <p>
                    <?php echo $UnitsConsumed ?>
                </p>
            </div>
            <div
                style="background-color: white;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:80px;">
                <strong> Amount</strong>
                <p>
                    <?php echo $amount ?>
                </p>
            </div>
            <div
                style="background-color: yellow;height: 30px; width:100%; display:flex;justify-content:center;align-items:center; gap:80px;">
            </div>
        <?php endif; ?>
    </body>

</html>