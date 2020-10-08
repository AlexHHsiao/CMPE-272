<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" onsubmit="return validate(this)">
                    <div class="form-group">
                        <label for="inputId">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="inputId">Id</label>
                        <input type="text" class="form-control" name="id" placeholder="Enter id">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" name='submit' class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validate(form) {
        const {password, id} = form;

        if (password.value.trim().length > 0 && id.value.trim().length > 0) {
            return true;
        } else {
            alert('Please enter id and/or password');
            return false;
        }
    }
</script>

<?php

submitInput();

function submitInput()
{
    if (isset($_POST["submit"])) {
        if ($_POST['id'] === 'admin') {
            $_SESSION["user"] = $_POST['name'];
        }
    }
}
?>