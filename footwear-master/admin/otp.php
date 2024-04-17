<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Varification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-color: burlywood;
    }

    .height-100 {
        height: 100vh
    }

    .card {
        width: 400px;
        border: none;
        height: 300px;
        box-shadow: 0px 5px 20px 0px #d2dae3;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .card h6 {
        color: red;
        font-size: 20px
    }

    .inputs input {
        width: 40px;
        height: 40px
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0
    }

    .card-2 {
        background-color: #fff;
        padding: 10px;
        width: 350px;
        height: 100px;
        bottom: -50px;
        left: 20px;
        position: absolute;
        border-radius: 5px
    }

    .card-2 .content {
        margin-top: 50px
    }

    .card-2 .content a {
        color: red
    }

    .form-control:focus {
        box-shadow: none;
        border: 2px solid red
    }

    .validate {
        border-radius: 20px;
        height: 40px;
        background-color: red;
        border: 1px solid red;
        width: 140px
    }
</style>

<body>
<div class="container height-100 d-flex justify-content-center align-items-center">
    <div class="position-relative">
        <div class="card p-2 text-center">
            <h6>Please enter the one time password <br> to verify your account</h6>
            <div> <span>A code has been sent to</span> <small>*******9897</small> </div>
            <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> <input
                    class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> <input
                    class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> <input
                    class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> <input
                    class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> <input
                    class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> <input
                    class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> </div>
            <div class="mt-4"> <button class="btn btn-danger px-4 validate">Validate</button> </div>
        </div>
        <div class="card-2">
            <div class="content d-flex justify-content-center align-items-center"> <span>Didn't get the code</span> <a
                    href="#" class="text-decoration-none ms-3">Resend(1/3)</a> </div>
        </div>
    </div>
</div>
</body>

</html>











