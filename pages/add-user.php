<!-- Jquery min -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Doctors</a></li>
                            <li class="breadcrumb-item active">Add Doctor</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add New Doctor</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- Add new doctor form -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="firstname4" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="Firstname" placeholder="First Name">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="lastname4" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="Lastname" placeholder="Last name">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">User Name</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                            <div class="md-3 col-md-4">
                                <label for="inputRole" class="form-label">User Role</label>
                                <select class="form-control select2" data-toggle="select2" id="role">
                                    <option>Select</option>
                                    <optgroup>
                                        <?php
                                        include('dbconn.php');
                                        $sql_role = "select * from user_roles";
                                        $res_role = mysqli_query($conn, $sql_role);
                                        while ($row_role = mysqli_fetch_array($res_role)) {
                                            echo '<option value="' . $row_role['Role_Id'] .'">' . $row_role['RoleName'] .'</option>';
                                        }
                                        ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div><br>
                        <button type="button" id="adduser_btn" class="btn btn-primary">Register</button>
                        <button type="submit" class="btn btn-primary">Reset</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->
        
        <script>
            $(document).ready(function () {
                $("#adduser_btn").click(function () {
                    $.post(
                        "actions/add_user.php",
                        {
                            firstname: $('#Firstname').val(),
                            lastname: $('#Lastname').val(),
                            username: $('#Username').VAL(),
                            email: $('#inputEmail').val(),
                            passwort: $('#pwd').val(),
                            role: $('#Role').val(),
                        },
                        function (data) {
                            $('#result').html(data);
                        });

                });
            });

        </script>
    </div> <!-- content -->