<div class="modal fade" id="edit{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Transfer</h6>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('update-list', $id) }}" method="post">
                @csrf
                <div class="modal-body">
                    <span><b>First name:</b> {{ $firstname }}</span>
                    <br>
                    <span><b>Last name:</b> {{ $lastname }}</span>
                    <br>
                    <span><b>Current Company:</b> {{ $currentCompany }}</span>
                    <br>
                    <span><b>Transfer to:</b></span>
                    <select name="companyname"  class="d-inline form-control form-control-sm">
                        @foreach ($companies as $company )
                            @if ($company->name !== $currentCompany)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
