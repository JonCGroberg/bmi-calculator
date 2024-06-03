<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI101</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="m-1">
    <div id="card" class="card mx-auto shadow-sm" style=" max-width: 300px;"s>
        <div class="card-body text-center">
            <label class="fw-bold">Your calculated BMI: <span class="fw-bolder" id="calculatedBMI"></span></label>
        </div>
    </div>
</body>

</html>

<script language="javascript">
    window.onload = () => {
        // grab the id for the needed elements
        // label element (for showing the user the result)
        const urlParams = new URLSearchParams(window.location.search);

        const data = {
            weight: Number(urlParams.get('weight')) | null,
            feet: Number(urlParams.get('feet')) | null,
            inches: + Number(urlParams.get('inches')) | null
        };

        handleBmiCalcuation(data)
    };

    function handleBmiCalcuation({ weight, feet, inches }) {
        // grab element by id
        const calculatedBMILabel = document.getElementById("calculatedBMI");
        // check if not null
        if (weight && feet && inches) {
            const data = {
                height: Number(feet) * 12 + Number(inches),
                weight: Number(weight)
            };
            calculatedBMILabel.innerText = caluculateBMI(data).toFixed(2);
        } else
            document.getElementById('card').remove();

    }
    function caluculateBMI({ weight, height}) {
        return (weight / Math.pow(height, 2)) * 703;
    }

</script>