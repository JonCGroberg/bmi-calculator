<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="./bmiCalculator.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<div class="card shadow-sm  rounded-2 m-4 text-start mx-auto " style="max-width: 600px;">
    <h3 class=" card-header fw-bold py-3" style="font-size: 20px;">BMI Calculator</h3>
    <form id="bmiForm" class="card-body py-4">
        <div>
            <label class="form-label fw-bold pt-1" style="font-size: 20;" for="weight">Enter your weight (lbs)</label>
            <input class="form-control " id="weight" name="weight" type="number" required placeholder="Pounds" />
        </div>
        <label for="" class="form-label fw-bold mt-4"> Enter your height (in)</label>
        <div class="input-group ">
            <input class="form-control" id="feet" name="feet" type="number" required placeholder="Feet" />
            <input class="form-control " id="inches" name="inches" type="number" required placeholder="Inches" />
        </div>
        <br />
        <button class="btn btn-primary w-100 fw-medium">Calculate Your Bmi</button>
        <div class="mt-4">
            <label class="form-control-plaintext fw-bold " for="">Your calculated BMI: <span class="fw-bolder "
                    id="calculatedBMI"></span></label>
        </div>
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

<script language="javascript">
    window.onload = () => {
        // grab the id for the needed elements
        // input elements
        const weightInput = document.getElementById("weight");
        const inchesInput = document.getElementById("inches");
        const feetInput = document.getElementById("feet");
        // form element
        const bmiForm = document.getElementById("bmiForm");
        // label element (for showing the user the result)
        const calculatedBMILabel = document.getElementById("calculatedBMI");

        function caluculateBMI({ weight, height }) {
            return (weight / Math.pow(height, 2)) * 703;
        }

        bmiForm.onsubmit = (e) => {
            e.preventDefault();

            data = {
                weight: Number(weightInput.value),
                height: Number(inchesInput.value) + Number(feetInput.value) * 12
            };

            calculatedBMILabel.innerText = caluculateBMI(data).toFixed(2);
        };
    };
    <html>