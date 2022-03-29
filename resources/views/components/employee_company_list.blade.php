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
                <td>
                    @isset($item->company->name)
                        {{ $item->company->name }}
                    @endisset
                </td>
                <td>
                    <button class="btn btn-info" data-toggle="modal"
                        data-target="#edit{{ $item->id }}">EDIT</button>
                </td>
            </tr>
            <!-- Modal Edit-->
            @if (empty($item->company->name))
                <x-employee_companyModalWindow :id="$item->id" :firstname="$item->first_name"
                    :lastname="$item->last_name" :companies="$companies" currentCompany='NOTPROVIDED' />
            @else
                <x-employee_companyModalWindow :id="$item->id" :firstname="$item->first_name"
                    :lastname="$item->last_name" :companies="$companies" :currentCompany="$item->company->name" />
            @endif
        @endforeach

    </tbody>
</table>
{{ $list->links() }}
