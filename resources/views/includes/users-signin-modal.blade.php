<!-- Sign In Modal -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signInModalTitle">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(['action' => 'UsersController@postSignIn']) }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="signInUsername" class="form-control-label">Username<span class="required">*</span> : </label>
                        <input type="text" name="username" id="signInUsername" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="signInPassword" class="form-control-label">Password<span class="required">*</span> : </label>
                        <input type="password" name="password" id="signInPassword" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>