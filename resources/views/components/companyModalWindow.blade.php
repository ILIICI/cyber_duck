<div class="modal fade" id="edit{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel"><span class="text-danger">Edit
                        Company:</span> {{ $name }}</h6>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('update-company', $id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name">Name</span>
                        </div>
                        <input type="text" name="name" class="form-control" aria-label="Small"
                            aria-describedby="inputGroup-sizing-sm" value="{{ $name }}">
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
                            <span class="input-group-text" id="inputGroup-sizing-sm-3">Website</span>
                        </div>
                        <input type="text" name="website" class="form-control" aria-label="Small"
                            aria-describedby="inputGroup-sizing-sm-3" value="{{ $website }}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="logo" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    @if ($logo == null)
                        <img class="rounded mx-auto d-block"
                            src="https://via.placeholder.com/200x200.png?text=MISSING LOGO" />
                    @else
                        <img class="img-thumbnail max-auto d-block"
                            src="{{ asset("/storage/companies/logo/" . $logo )}}" />
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
