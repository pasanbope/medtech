<select id="batch" class="form-select">
    <option value="0">Select Batch</option>
    <?php
    $drug_id = $_POST['drug_id'];

    // Include the Drug class file
    include '../class/drug.php';

    // Create an instance of the Drug class
    $drug = new Drug();

    echo $drug->select_batch_from_drug($drug_id);
    ?>
</select>

<script>
    $(document).ready(function () {

        $("#batch").change(function () {
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: "actions/get_batch_stock_data.php",
                data: {
                    batch_id: $('#batch').val(),
                    drug_id: $('#drug').val()
                },
                success: function (data) {
                    $('#stock').val(data['Quantity']);
                    $('#exp_date').val(data['ExpireDate']);

                }

            });

        });
    });