<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link href = {{ asset("/css/app.css") }} rel="stylesheet" />
</head>
<body>

    <div class="container">
        <center><h1>Employee List</h1></center>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Company</th>
                <th scope="col">Age</th>
                <th scope="col">Salary</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->position}}</td>
                        <td>{{$employee->company->name}}</td>
                        <td>{{$employee->age}}</td>
                        <td>{{$employee->salary}}</td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('employee.edit', $employee->id)}}">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{route('employee.destroy', $employee->id)}}" method="POST">
                                            @csrf 
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>    </form>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
          </table>
          <a class="btn btn-primary btn-sm" href="{{route('employee.create')}}">Add Employee</a>
    </div>


    <script src={{ asset("/js/app.js") }}></script>
</body>
</html>