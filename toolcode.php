<?php
?>

<!-- Formula: weight (lb) / [height (in)]2 x 703 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator</title>
    <script src="./bmiCalculator.js"></script>
</head>

<body>
    <form id="bmiForm">
        <div>
            <label for="weight">Weight (lbs)</label>
            <input id="weight" name="weight" type="text" required/>
        </div>
        <br />
        <label for=""> Height (in)</label>
        <div>
            <label for="feet">Feet</label>
            <input id="feet" name="feet" type="text" require />
        </div>
        <div>
            <label for="inches">Inches</label>
            <input id="inches" name="inches" type="text" require />
        </div>
        <br />
        <button>Calculate</button>
        <div>
            <br />
            <label for="">BMI: <span id="calculatedBMI"></span></label>
        </div>
    </form>
    <br />

</body>

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

            calculatedBMILabel.innerText = caluculateBMI(data);
        };
    };
</script>
<html>