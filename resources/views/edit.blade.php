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
        <center><h1>Employee Edit</h1></center>
    <form action="{{route('employee.update', $employee->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" value="{{$employee->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Position</label>
            <input type="text" name="position" value="{{$employee->position}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Company</label>
            <select class="form-control" name="company_id" id="">
                
                @foreach ($companies as $company)
                    @if ($company->id == $employee->company_id)
                        <option value="{{$company->id}}" selected>{{$company->name}}</option>
                    @else
                    <option value="{{$company->id}}">{{$company->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="number" name="age" value="{{$employee->age}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Salary</label>
            <input type="number" name="salary" value="{{$employee->salary}}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
    </form>
    <hr>
    <a class="btn btn-danger btn-sm" href="{{route('employee.index')}}">Cancel</a>
</div>
<script src={{ asset("/js/app.js") }}></script>
</body>
</html>