<div class="modal fade" id="edit{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel"><span class="text-danger">Edit
                        Employee:</span> {{ $firstname . " " . $lastname }}</h6>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('update-employee', $id) }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="firstname">First Name</span>
                        </div>
                        <input type="text" name="firstname" class="form-control" aria-label="Small"
                            aria-describedby="inputGroup-sizing-sm" value="{{ $firstname }}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="lastname">Last Name</span>
                        </div>
                        <input type="text" name="lastname" class="form-control" aria-label="Small"
                            aria-describedby="inputGroup-sizing-sm" value="{{ $lastname }}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="email">Email</span>
                        </div>
                        <input type="text" name="email" class="form-control" aria-label="Small"
                            aria-describedby="inputGroup-sizing-sm" value="{{ $email }}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="email">Phone</span>
                        </div>
                        <input type="text" name="phone" class="form-control" aria-label="Small"
                            aria-describedby="inputGroup-sizing-sm" value="{{ $phone }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
