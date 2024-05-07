<?php if (isset($_GET['Pres'])) {
    $pres_id = $_GET['Pres'];
    // Include the Prescription class file
    include 'class/prescription.php';

    // Create an instance of the Prescription class
    $prescription = new Prescription();
    $pat_id = $prescription->getPres_Master_by_PresId($pres_id, 'Patient_Id');
    $doc_id = $prescription->getPres_Master_by_PresId($pres_id, 'Doctor_Id');
    $date = $prescription->getPres_Master_by_PresId($pres_id, 'P_Date');

} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Bill Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h1,
        h2,
        p {
            margin: 0;
        }

        .receipt-info {
            margin-bottom: 20px;
        }

        .receipt-info p {
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        .total {
            text-align: right;
            font-weight: bold;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            .container,
            .container * {
                visibility: visible;
            }

            .container {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Medical Bill Receipt</h1>
        <p><strong>Egaloya Medical Center</strong></p>
        <p>Ingiriya road, Egaloya, Bulathsinhala.</p><br />
        <div class="receipt-info">
            <p><strong>Patient: </strong><?php echo $prescription->get_pat_pres($pat_id); ?></p>
            <p><strong>Doctor: </strong><?php echo $prescription->get_doc_pres($doc_id); ?></p>
            <p><strong>Date: </strong><?php echo $date; ?></p>
            <p><strong>Prescription Number: </strong> 00<?php echo $pres_id; ?></p>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Consultation Fee</td>
                    <td>LKR. <?php echo $prescription->view_bill_by_pres($pres_id, 'Doctor_Charge'); ?></td>
                </tr>
                <tr>
                    <td>Medication</td>
                    <td>LKR. <?php echo $prescription->view_bill_by_pres($pres_id, 'Drug_Charge'); ?>
                    </td>
                </tr>
                <!-- Add more items if needed -->
            </tbody>
        </table>
        <div class="total">
            <p><strong>Total:</strong> LKR. <?php echo $prescription->view_bill_by_pres($pres_id, 'Total_Amount'); ?>
            </p>
        </div>
        <br /><br />
        <hr />
        <i>Software Solution By MedTechlk.xyz</i>
    </div>
    <script>
        window.onload = function () {
            window.print();
        }
    </script>
</body>

</html>