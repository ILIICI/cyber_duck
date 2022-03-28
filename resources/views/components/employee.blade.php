<div>
    @if (session('message'))
        <div class=" m-2 text-center alert alert-info">
            <h3> {{ session('message') }}</h3>
        </div>
    @elseif ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <div class="text-left m-2">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add">ADD NEW EMPLOYEE</button>
    </div>
    <!-- Modal ADD-->
    <x-new-employee />
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Employee ID #</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key => $employee)
                <tr class="bg-grey">
                    <th scope="row">{{ $employee->id  }}</th>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>
                        <button class="btn btn-info" data-toggle="modal"
                            data-target="#edit{{ $employee->id }}">Edit</button>

                        <a href="{{ route('delete-employee', $employee->id) }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                <!-- Modal Edit-->
                <x-employeeModalWindow :id="$employee->id" :firstname="$employee->first_name"
                    :lastname="$employee->last_name" :email="$employee->email"
                    :phone="$employee->phone" />
            @endforeach
        </tbody>
    </table>
    {{ $employees->links() }}
</div>
