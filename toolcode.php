<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<div class="card shadow-sm  rounded-2 m-4 text-start mx-auto " style="max-width: 600px;">
    <h3 class=" card-header fw-bold py-3">BMI Calculator</h3>
    <form id="bmiForm" class="card-body py-4" action="/BMI101.php">
        <div class="">
            <label class="form-label fw-bold pt-1 flex-grow-1" style="font-size: 20;" for="weight">Enter your weight
                (lbs)</label>
            <div class=" display-flex"><input class="form-control " name="weight" type="number" required
                    placeholder="Pounds" /></div>
        </div>
        <label for="" class="form-label fw-bold mt-4"> Enter your height (in)</label>
        <div class="input-group">
            <input class="form-control" name="feet" type="number" required placeholder="Feet" />
            <input class="form-control " name="inches" type="number" required placeholder="Inches" />
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

    /* Card styling */
    .card {
        border: 1px solid #dee2e6;
        border-radius: 0.375rem;
        background-color: #fff;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        text-align: left;
    }

    /* Shadow */
    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    }

    /* Rounded */
    .rounded-2 {
        border-radius: 0.375rem !important;
    }

    /* Margin */
    .m-4 {
        margin: 1.5rem !important;
    }

    .mx-auto {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    /* Card header */
    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        font-weight: 700;
        font-size: 20px;
    }

    /* Form */
    .card-body {
        padding: 1.25rem;
    }

    /* Form label */
    .form-label {
        display: inline-block;
        margin-bottom: 0.5rem;
        font-weight: 700;
    }

    /* Input group */
    .input-group {
        display: flex;
        flex-wrap: nowrap;
    }

    .input-group> :first-child {
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        border-right-width: 0px;
    }

    .input-group> :last-child {
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
    }

    /* Form control */
    .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
    }

    h3 {
        padding: 0px;
        margin: 0px;
    }

    /* Button */
    .btn {
        display: inline-block;
        font-weight: 500;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        background-color: #0d6efd;
        border: 1px solid #0d6efd;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.375rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-primary {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd;
    }

    .btn:hover {
        color: #fff;
        background-color: #0b5ed7;
        border-color: #0a58ca;
        cursor: pointer;
    }

    .w-100 {
        width: 100% !important;
    }

    /* Font weight */
    .fw-bold {
        font-weight: 700 !important;
    }

    .fw-medium {
        font-weight: 500 !important;
    }

    /* Padding */
    .pt-1 {
        padding-top: 0.25rem !important;
    }

    .py-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .py-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }

    /* Margin top */
    .mt-4 {
        margin-top: 1.5rem !important;
    }

    .display-flex {
        display: flex;
        justify-content: space-between;
    }

    .flex-grow-1 {
        flex-grow: 1;
    }
</style>

</html>