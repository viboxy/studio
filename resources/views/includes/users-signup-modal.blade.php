<!-- Sign Up Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signUpModalTitle">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="firstName" class="form-control-label">First Name<span class="required">*</span> : </label>
                        <input type="text" name="firstName" id="firstName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="form-control-label">Last Name<span class="required">*</span> : </label>
                        <input type="text" name="lastName" id="lastName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-control-label">Email<span class="required">*</span> : </label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="username" class="form-control-label">Username<span class="required">*</span> : </label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="facebook" class="form-control-label">Facebook : </label>
                        <input type="text" name="facebook" id="facebook" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-control-label">Password<span class="required">*</span> : </label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword" class="form-control-label">Confirm Password<span class="required">*</span> : </label>
                        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Sign Up</button>
            </div>
        </div>
    </div>
</div>