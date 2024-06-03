<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<div class="card shadow-sm  rounded-2 m-4 text-start mx-auto " style="max-width: 600px;">
    <h3 class=" card-header fw-bold py-3" style="font-size: 20px;">BMI Calculator</h3>
    <form id="bmiForm" class="card-body py-4" action="/BMI101.php">
        <div>
            <label class="form-label fw-bold pt-1" style="font-size: 20;" for="weight">Enter your weight (lbs)</label>
            <input class="form-control "  name="weight" type="number" required placeholder="Pounds" />
        </div>
        <label for="" class="form-label fw-bold mt-4"> Enter your height (in)</label>
        <div class="input-group ">
            <input class="form-control"  name="feet" type="number" required placeholder="Feet" />
            <input class="form-control "  name="inches" type="number" required placeholder="Inches" />
        </div>
        <br />
        <button class="btn btn-primary w-100 fw-medium">Calculate Your Bmi</button>
    </form>
    </body>
</div>
<style>
    * {
        color: #444;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 16px;
    }
</style>

</html>
