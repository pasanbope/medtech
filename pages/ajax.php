$("body").on("input", "#list-course", function (event) {
    $.ajax({
        type: 'POST',
        dataType: "json",
        url: "controllers/get_course_data.php",
        data: { course_id: $('#list-course').val(), date: $('#list-course').val() },
        success: function (data) {
            $('#p_name').val(data['Sched_Time']);
            $('#p_name').val(data['Patient_Count']);

        }
    });
});


// <div class="card">
//             <div class="card-body">
//                 <div class="row">
//                     <form id="frm_doc">
//                         <div class="row g-2">
//                             <div class="md-3 col-md-4">
//                                 <label for="inputDoc" class="form-label">Select Doctor</label>
//                                 <select class="form-control select2" data-toggle="select2" id="doc" name="doc">
//                                     <option>Select</option>
//                                     <optgroup>
//                                         <?php
//                                         include('dbconn.php');
//                                         $sql_doc = "select * from doctor";
//                                         $res_doc = mysqli_query($conn, $sql_doc);
//                                         while ($row_doc = mysqli_fetch_array($res_doc)) {
//                                             echo '<option value="' . $row_doc['Doctor_Id'] . '">' . $row_doc['Title'] . ' ' . $row_doc['FirstName'] . ' ' . $row_doc['LastName'] . '</option>';
//                                         }
//                                         ?>
//                                     </optgroup>
//                                 </select>
//                             </div>
//                         </div>
//                     </form>
//                 </div> 
//             </div>
//         </div>
