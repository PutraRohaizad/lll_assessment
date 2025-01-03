<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>INTERMEDIATE</title>
</head>

<body>

    <div class="container mt-5">
        <h3>Form Handling Question</h3>

        <h5>B - INTERMEDIATE</h5>

        <div class="card">
            <div class="card-body">
                <div class="form-group mt-2">
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group mt-2">
                    <input type="email" class="form-control" id="emailAddress" placeholder="Email Address" required>
                </div>
                <div class="form-group mt-2">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="5"
                        placeholder="Message"></textarea>
                </div>
                <button type="button" class="btn btn-primary mt-3" onclick="submitForm()">Submit</button>

                {{-- ERROR --}}
                <div class="alert alert-danger mt-3" id="errorMessage" style="display: none"></div>
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
            let message = document.querySelector("#message").value;
            let errorMessage = document.querySelector("#errorMessage");

            if(name == null || name == ""){                
                errorMessage.style.display = 'block';
                errorMessage.innerHTML = "Name is required";
                return;
            }else{
                errorMessage.style.display = 'none';
                errorMessage.innerHTML = "";
            }
            
            if(emailAddress == null || validateEmail(emailAddress) == null){     
                errorMessage.style.display = 'block';
                errorMessage.innerHTML = "Email is required and the format must be correct";
                return;
            }else{
                errorMessage.style.display = 'none';
                errorMessage.innerHTML = "";
            }

            console.log(`Name : ${name}` + ' , ' + `Email Address : ${emailAddress}`  + ' , ' + `Message : ${message}`);
        }

        const validateEmail = (email) => {            
            return email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
        };

        
    </script>
</body>

</html>