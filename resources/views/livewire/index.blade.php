<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">
            <div class="d-flex justify-content-center mx-auto p-4">
                {{ $rows->links() }}
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="bg-info">Employee ID #</th>
                        <th scope="col" class="bg-info">First name</th>
                        <th scope="col" class="bg-info">Last name</th>
                        <th scope="col" class="bg-info">Email</th>
                        <th scope="col" class="bg-info">Phone</th>
                        <th scope="col" class="bg-warning">Company</th>
                        <th scope="col" class="bg-warning">Email</th>
                        <th scope="col" class="bg-warning">Website</th>
                        <th scope="col" class="bg-warning">Logo</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($rows as $key => $row)
                        <tr class="bg-grey">
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $row->first_name }}</td>
                            <td>{{ $row->last_name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->company->name }}</td>
                            <td>{{ $row->company->email }}</td>
                            <td><a target="_blank"
                                    href='{{ $row->company->website }}'>{{ $row->company->website }}</a></td>
                            <td>
                                @if ($row->company->logo == null)
                                    <img class="rounded" src="https://via.placeholder.com/50x50.png?text=N/A" />
                                @else
                                    <img width="30px" height="auto" class="rounded"
                                        src="{{ asset('/storage/companies/logo/' . $row->company->logo) }}" />
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-2">
            <div class="justify-content-right p-2">
                <div class="text-center">
                    <input class="rounded p-2" type="text" wire:model="search" placeholder="Search Employee">
                </div>
            </div>
        </div>
    </div>
</div>
