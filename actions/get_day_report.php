<?php
$date = $_POST['date'];

// Include the Doctor class file
include '../class/prescription.php';

$pres = new Prescription();
?>



<div class="col-lg-8">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <tbody>
                        <tr>
                            <td>Total Doctor Charge</td>
                            <td>Rs. <?php echo $pres->get_day_report_doc_charge($date); ?></td>
                        </tr>
                        <tr>
                            <td>Total Drug Charge</td>
                            <td>Rs. <?php echo $pres->get_day_report_drug_charge($date); ?></td>
                        </tr>
                        <tr>
                            <td>Total Drug Cost</td>
                            <td>Rs. <?php echo $pres->get_day_report_drug_cost($date); ?></td>
                        </tr>
                        <tr>
                            <td>Total Drug Profit</td>
                            <td>Rs. <?php echo $pres->get_day_report_drug_profit($date); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- end table-responsive -->

        </div>
    </div>
</div> <!-- end col -->

<div class="col-lg-4">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">

                    <tbody>
                        <tr>
                            <td>Number of Patients</td>
                            <td> <?php echo $pres->get_day_report_pat_num($date); ?></td>
                        </tr>
                        <tr>
                            <td>Number of Doctors</td>
                            <td><?php echo $pres->get_day_report_doc_num($date); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- end table-responsive -->

        </div>
    </div>
</div> <!-- end col -->