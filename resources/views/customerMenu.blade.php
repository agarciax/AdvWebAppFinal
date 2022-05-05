<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="<?php echo asset('customers.css')?>" type="text/css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <?php

    ?>
</head>
<body class="antialiased">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <img src="{{url('Spacely Space Sprockets.jpg')}}" width="88px" height="60px" />
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:3000/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/CustomerMenu">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/Sales">Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/SalesReport">Sales Report</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class={"CustomerMenu"}>
    <div class={"dropdown"}>
        <h2>Customer Menu</h2>
    </div>
    <br />
    <div>
        <h3>Add New Customer</h3>
        <form action="http://127.0.0.1:8000/api/customers" method="post">
            <label for="name">Name:</label>
            <input
                type="text"
                name="name"
                required
            /><br />
            <label for="address">Address:</label>
            <textarea
                required
                name="address"
            ></textarea><br />
            <label for="company_name">Company Name:</label>
            <input
                type="text"
                name="company_name"
                required
            /><br />
            <button type="submit">Add Customer</button>
        </form>
    </div>
    <br />
    <div>
        <h3>Manage Existing Customers</h3>
        <table class="tableMinorInjuryLog">
            <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Company Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->company_name}}</td>
                <td>
                    <form action="http://localhost:8000/api/customers/{{$customer->id}}" method="post" />
                    @method('DELETE')

                    <button type="submit"> Delete {{$customer->id}} </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
