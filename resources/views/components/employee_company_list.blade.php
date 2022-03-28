@if (session('message'))
<div class=" m-2 text-center alert alert-info">
    <h3> {{ session('message') }}</h3>
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">Row ID</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Company</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($list as $key => $item)
            <tr class="bg-grey">
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->company->name }}</td>
                <td>
                    <button class="btn btn-info" data-toggle="modal"
                        data-target="#edit{{ $item->id }}">EDIT</button>
                </td>
            </tr>
            <!-- Modal Edit-->
            <x-employee_companyModalWindow :id="$item->id" :firstname="$item->first_name" :lastname="$item->last_name"
                :currentCompany="$item->company->name" :companies="$companies"/>
        @endforeach

    </tbody>
</table>
{{ $list->links() }}
