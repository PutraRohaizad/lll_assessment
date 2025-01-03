<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ADVANCED</title>
</head>

<body>

    <div class="container mt-5">
        <h3>Form Handling Question</h3>

        <h5>C - ADVANCED PAGE TWO</h5>

        <div class="card">
            <div class="card-body">
                <div class="form-group mt-2">
                    Name : <span id="name"></span>
                </div>
                <div class="form-group mt-2">
                    Email Address : <span id="emailAddress"></span>
                </div>
                <div class="form-group mt-2">
                    Message : <span id="message"></span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
       document.addEventListener("DOMContentLoaded", function() {
        let data = localStorage.getItem('info');
        let sanitizeData = JSON.parse(data);

        document.querySelector("#name").innerHTML = sanitizeData.name;
        document.querySelector("#emailAddress").innerHTML = sanitizeData.email_address;
        document.querySelector("#message").innerHTML = sanitizeData.message;
        });

        
    </script>
</body>

</html>