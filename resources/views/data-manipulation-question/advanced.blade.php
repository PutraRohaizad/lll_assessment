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
        <h3>Data Manipulation Question</h3>

        <h5>A - ADVANCED</h5>

        <div class="card">
            <div class="card-body">

                <div>
                    <input type="text" class="form-control" placeholder="search ..." id="searchInput">
                    <button class="btn btn-sm btn-secondary mt-3" type="button" onclick="filterData()">Search</button>
                </div>

                <hr>
                
                <ul id="output"></ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        let items = [
            { id: 1, name: "Apple" },
            { id: 2, name: "Banana" },
            { id: 3, name: "Cherry" },
        ];

        document.addEventListener("DOMContentLoaded", function() {
           updateDom();
        });
        
        function deleteItem(name){
            items = items.filter(item => item.name != name)
            let output = document.querySelector("#output").innerHTML = "";
            updateDom();
        }

        function filterData(){
            let searchInput = document.querySelector("#searchInput").value;
                items = items.filter(item => item.name == searchInput)
                let output = document.querySelector("#output").innerHTML = "";
                updateDom();

        }

        function updateDom(){
            let output = document.querySelector("#output");
            items.forEach(item => {
                const li = document.createElement("li");            
                const textNode = document.createTextNode(item.name + " ");
                const button = document.createElement("button");
                button.textContent = "Delete";
                button.classList.add("btn", "btn-danger", "btn-sm", "mt-1");
                button.setAttribute("onclick", `deleteItem('${item.name}')`);
                
                li.appendChild(textNode);
                li.appendChild(button);

                output.appendChild(li);
            });
        }
    </script>
</body>

</html>