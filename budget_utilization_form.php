<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Utilization Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: auto;
            border: 1px solid #000;
            padding: 20px;
        }

        .header, .status-section {
            border: 1px solid black;
            margin-bottom: 10px;
            padding: 10px;
        }

        .header img {
            float: left;
            width: 100px;
        }

        .header div {
            text-align: center;
        }

        .header h1 {
            font-size: 20px;
            margin: 0;
        }

        .header table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .header td {
            padding: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
            border: 1px solid black;
        }

        .section-title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

        .certification-sections {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .certification-section, .certification-b-section {
            border: 1px solid black;
            padding: 10px;
            flex: 1;
        }

        .certified, .signature-section {
            width: 100%;
        }

        .signature-section td {
            text-align: center;
        }

        .status-section th, .status-section td {
            text-align: left;
        }

        .status-section table {
            margin-top: 10px;
        }

        .due-date {
            margin-top: 10px;
            font-weight: bold;
        }

        .notes {
            font-size: 12px;
        }

        input, textarea {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            width: auto;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

    <div class="container">
        <form action="generate_report.php" method="POST">
            <div class="header">
                <img src="logo.png" alt="Logo">
                <div>
                    <h1>University of Science and Technology of Southern Philippines</h1>
                    <p>Budget Utilization Request & Status</p>
                </div>

                <table>
                    <tr>
                        <td><b>Payee:</b> <input type="text" name="payee" required></td>
                        <td><b>No:</b> <input type="text" name="number" required></td>
                    </tr>
                    <tr>
                        <td><b>Account Number:</b> <input type="text" name="account_number"></td>
                        <td><b>Date:</b> <input type="date" name="date" required></td>
                    </tr>
                </table>
            </div>

            <div class="account-info">
                <table>
                    <tr>
                        <th>Responsibility Center</th>
                        <th>Particulars</th>
                        <th>P.P.A</th>
                        <th>Account Code</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="responsibility_center" required></td>
                        <td><textarea name="particulars" rows="4" required></textarea></td>
                        <td><input type="text" name="ppa" required></td>
                        <td><input type="text" name="account_code" required></td>
                        <td><input type="number" name="amount" step="0.01" required></td>
                    </tr>
                </table>

            </div>

            <!-- A. Certified & B. Certified Sections Side by Side -->
            <div class="certification-sections">
                <!-- A. Certified Section -->
                <div class="certification-section">
                    <div class="section-title">A. Certified</div>
                    <table class="certified">
                        <tr>
                            <td>
                                <input type="checkbox" name="certification_a1"> Charges to budget necessary, lawful, and under my direct supervision<br>
                                <input type="checkbox" name="certification_a2"> Supporting documents valid, proper and legal
                            </td>
                        </tr>
                    </table>

                    <div class="signature-section">
                        <table>
                            <tr>
                                <td><b>Printed Name:</b> <input type="text" name="printed_name_a" required></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="position_a" placeholder="Position" required></td>
                            </tr>
                            <tr>
                                <td>Signature</td>
                            </tr>
                            <tr>
                                <td><b>Date:</b> <input type="date" name="signature_date_a" required></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- B. Certified Section -->
                <div class="certification-b-section">
                    <div class="section-title">B. Certified</div>
                    <table class="certified">
                        <tr>
                            <td>
                                <input type="checkbox" name="certification_b1"> Charges to budget are necessary, lawful, and under my direct supervision<br>
                                <input type="checkbox" name="certification_b2"> Supporting documents are valid, proper, and legal
                            </td>
                        </tr>
                    </table>

                    <div class="signature-section">
                        <table>
                            <tr>
                                <td><b>Certified By:</b> <input type="text" name="certified_by_b" required></td>
                            </tr>
                            <tr>
                                <td><b>Position:</b> <input type="text" name="position_b_cert" required></td>
                            </tr>
                            <tr>
                                <td><b>Date:</b> <input type="date" name="signature_date_b_cert" required></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- C. Status of Obligation Section -->
            <div class="status-section">
                <div class="section-title">C. Status of Obligation</div>
                <table>
                    <tr>
                        <th>Date & Particulars</th>
                        <th>No.</th>
                        <th>Obligation</th>
                        <th>Payment</th>
                        <th>Payable</th>
                        <th>Balance</th>
                        <th>Due & Demandable</th>
                        <th>Posted By</th>
                    </tr>
                    <tr>
                        <td><input type="date" name="status_date" required></td>
                        <td><input type="text" name="status_number"></td>
                        <td><input type="number" name="obligation" step="0.01" required></td>
                        <td><input type="number" name="payment" step="0.01" required></td>
                        <td><input type="number" name="payable" step="0.01"></td>
                        <td><input type="number" name="balance" step="0.01"></td>
                        <td><input type="text" name="due_demandable"></td>
                        <td><input type="text" name="posted_by"></td>
                    </tr>
                </table>
            </div>

            <input type="submit" value="Generate Report">
        </form>
    </div>

</body>
</html>
