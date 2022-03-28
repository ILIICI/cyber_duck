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
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add">ADD NEW COMPANY</button>
    </div>
    <!-- Modal ADD-->
    <x-new-company />
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Company #</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">WebSite</th>
                <th scope="col">Logo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $key => $company)
                <tr class="bg-grey">
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td><a target="_blank" href='{{ $company->website }}'>{{ $company->website }}</a></td>
                    <td>
                        @if ($company->logo == null)
                            <img class="rounded" src="https://via.placeholder.com/50x50.png?text=N/A" />
                        @else
                            <img width="30px" height="auto" class="rounded"
                                src="{{asset("/storage/companies/logo/" . $company->logo) }}" />
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-info" data-toggle="modal"
                            data-target="#edit{{ $company->id }}">Edit</button>

                        <a href="{{ route('delete-company', $company->id) }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                <!-- Modal Edit-->
                <x-companyModalWindow :id="$company->id" :name="$company->name" :email="$company->email"
                    :website="$company->website" :logo="$company->logo" />
            @endforeach
        </tbody>
    </table>
    {{ $companies->links() }}
</div>
