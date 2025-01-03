<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>BASIC</title>
</head>

<body>

    <div class="container mt-5">
        <h3>Form Handling Question</h3>

        <h5>A - BASIC</h5>

        <div class="card">
            <div class="card-body">
                <div class="form-group mt-2">
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group mt-2">
                    <input type="email" class="form-control" id="emailAddress" placeholder="Email Address">
                </div>
                <button type="button" class="btn btn-primary mt-3" onclick="submitForm()">Submit</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        function submitForm(){
            let name = document.querySelector("#name").value;
            let emailAddress = document.querySelector("#emailAddress").value;
            console.log(`Name : ${name}` + ' , ' + `Email Address : ${emailAddress}`);
        }

        
    </script>
</body>

</html>