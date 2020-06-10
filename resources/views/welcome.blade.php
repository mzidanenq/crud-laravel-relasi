<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Management</title>
    <link href = {{ asset("/css/app.css") }} rel="stylesheet" />

</head>
<body>

    <div class="container">
        <center><h1>Employee Add</h1></center>
    <form action="{{route('employee.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Position</label>
            <input type="text" name="position" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Company</label>
            <select class="form-control" name="company_id" id="">
                @foreach ($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="number" name="age" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Salary</label>
            <input type="number" name="salary" class="form-control">
        </div>
        <center>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </center>
        
    </form>

    <a class="btn btn-secondary btn-sm" href="{{route('employee.index')}}">View Employee</a>
</div>
<script src={{ asset("/js/app.js") }}></script>
</body>
</html>