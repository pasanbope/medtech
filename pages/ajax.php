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