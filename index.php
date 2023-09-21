<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Melike Sena Çakır">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
        <title>To-Do Application</title>
    </head>
    <body class="body-img">
    <div class="text-center">
    <h1> TO-DO APP</h1>
    <h3 class="text-secondary">Undated Planner | To Do List</h3>
    </div>
    <div class="container-fluid mt-5">
        <div class="row mx-auto input-group mb-3 w-50 div-bg p-3 rounded-5">
            <input type="text" class="form-control bg-transparent rounded-4" placeholder="to do ara.." id="search">
        </div>
       <div class="row mx-auto input-group mt-3 w-50 div-bg p-3 rounded-5">
            <div class="d-flex">
                <input type="text" class="form-control bg-transparent rounded-start-4" placeholder="to do ekle..." id="get_input" aria-describedby="button-addon2">
                <button onclick="add_item()" class="btn btn-secondary rounded-end-4" type="button" id="button-addon2">Ekle</button>
            </div>
            <ol class="mt-3 rounded-5 todo-bg" type="" id="add_input">
            </ol>
       </div>
    </div>
    </body>
</html>