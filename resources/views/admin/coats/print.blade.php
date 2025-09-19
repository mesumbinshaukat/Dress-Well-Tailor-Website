<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Receipt - Order #{{$coat->id}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <style>
        /* Print-optimized CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.4;
            color: #000;
            background: white;
        }
        
        .print-container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
        }
        
        /* Header Section */
        .header-section {
            text-align: center;
            margin-bottom: 30px;
            border: 2px solid #000;
            padding: 20px;
            position: relative;
        }
        
        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 15px;
            display: block;
        }
        
        .company-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .company-tagline {
            font-size: 16px;
            font-style: italic;
            margin-bottom: 5px;
        }
        
        .company-address {
            font-size: 14px;
            color: #0066cc;
            margin-bottom: 5px;
        }
        
        .company-contact {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        /* Customer Details Section */
        .customer-section {
            margin-bottom: 30px;
            padding: 15px;
        }
        
        .customer-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            flex-wrap: wrap;
        }
        
        .customer-item {
            width: 48%;
            font-size: 14px;
            font-weight: bold;
        }
        
        .customer-note {
            background: #f8f9fa;
            border: 2px solid #000;
            padding: 15px;
            margin: 20px 0;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
        }
        
        /* Table Section */
        .table-section {
            margin-top: 40px;
        }
        
        .measurements-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        
        .measurements-table th,
        .measurements-table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            font-size: 17px;
            vertical-align: top;
        }
        
        .measurements-table th {
            background-color: #f8f9fa;
            font-weight: bold;
            text-align: center;
            color: #0066cc;
        }
        
        .measurements-table td {
            font-weight: bold;
        }
        
        /* Footer */
        .footer-section {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
        }
        
        .footer-section p {
            margin-bottom: 5px;
        }
        
        .footer-tagline {
            color: #dc3545;
            font-style: italic;
        }
        
        .footer-address {
            color: #0066cc;
            font-style: italic;
        }
        
        .footer-contact {
            color: #000;
            font-style: italic;
        }
        
        /* Watermark */
        .print-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 400px;
            background-image: url('{{asset('assets/img/DWT-PROFILE-PIC-1.jpg')}}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.08;
            z-index: -1;
            pointer-events: none;
        }
        
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.05;
            z-index: -1;
            width: 300px;
            height: 300px;
            background-image: url('{{asset('assets/img/DWT-PROFILE-PIC-1.jpg')}}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            pointer-events: none;
        }
        
        /* Print styles */
        @media print {
            body {
                margin: 0 !important;
                padding: 0 !important;
            }
            
            .print-container {
                max-width: none !important;
                padding: 10px !important;
            }
            
            .no-print {
                display: none !important;
            }
            
            /* Force watermark to print */
            .print-container::before {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
                opacity: 0.1 !important;
            }
        }
        
        /* Hide print button on print */
        @media print {
            .print-btn {
                display: none !important;
            }
        }
        
        .print-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            z-index: 1000;
        }
        
        .print-btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <button class="print-btn no-print" onclick="window.print()">🖨️ Print</button>
    
    <div class="print-container">
        <!-- Watermark for print -->
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 400px; height: 400px; background-image: url('{{asset('assets/img/DWT-PROFILE-PIC-1.jpg')}}'); background-size: contain; background-repeat: no-repeat; background-position: center; opacity: 0.08; z-index: -1; pointer-events: none; -webkit-print-color-adjust: exact; print-color-adjust: exact;"></div>
        
        <!-- Header Section -->
        <div class="header-section">
            <img class="logo" src="{{asset('assets/img/DWT-PROFILE-PIC-1.jpg')}}" alt="DWT Logo">
            <div class="company-name">Dress Well Tailors & Fabric</div>
            <div class="company-tagline">Specialist in Coat, Pant, Sherwani & Shalwar Kameez</div>
            <div class="company-address">Shop No: G-101, G-57, Gulistan-e-Johar Harmain Tower & Shopping Mall</div>
            <div class="company-contact">Contact: S.M Abdul Raheem - 📱 0345-3319764</div>
        </div>
        
        <!-- Customer Details Section -->
        <div class="customer-section">
            <div class="customer-row">
                <div class="customer-item">Order No: {{$coat->id}}</div>
                <div class="customer-item">Booking Date: {{ $coat->created_at ? $coat->created_at->format('d-m-Y') : 'N/A' }}</div>
            </div>
            <div class="customer-row">
                <div class="customer-item">Booking Time: {{ $coat->created_at ? $coat->created_at->setTimezone('Asia/Karachi')->format('h:i A') : 'N/A' }}</div>
                <div class="customer-item">Trial Date: {{ $coat->trail_date ?? 'Not Set' }}</div>
            </div>
            <div class="customer-row">
                <div class="customer-item">Name: {{$coat->coustmer_name}}</div>
                <div class="customer-item">Delivery Date: {{$coat->delivery_date}}</div>
            </div>
            <div class="customer-row">
                <div class="customer-item">Contact No: {{$coat->coustmer_contact}}</div>
                <div class="customer-item">Advance: {{$coat->advance}}</div>
            </div>
            <div class="customer-row">
                <div class="customer-item">Address: {{$coat->coustmer_address}}</div>
                <div class="customer-item">Total Amount: {{$coat->total_amount}}</div>
            </div>
            <div class="customer-row">
                <div class="customer-item">Working Branch: Gulistan-e-Johar</div>
                <div class="customer-item">Category: {{$coat->category}}</div>
            </div>
            <div class="customer-row">
                <div class="customer-item">Quantity: {{$coat->quantity}}</div>
                <div class="customer-item">Remaining Amount: {{ $coat->total_amount - $coat->advance }}</div>
            </div>
            
            <div class="customer-note">
                <strong>Customers are advised to collect their order within 2 months positively.</strong>
            </div>
        </div>
        
        <!-- Measurements Table -->
        <div class="table-section">
            <table class="measurements-table">
                <thead>
                    <tr>
                        <th>Order No & Quant.</th>
                        <th>Shirt Measurements</th>
                        <th>Waist Coat Measurements</th>
                        <th>Extra Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>Name:</b> {{$coat->coustmer_name}}</td>
                        <td><b>Length:</b> {{$coat->length}}</td>
                        <td><b>Coat Length:</b> {{$coat->coat_length}}</td>
                        <td rowspan="15">{{$coat->textarea}}</td>
                    </tr>
                    <tr>
                        <td><b>Order No.:</b> {{$coat->id}}</td>
                        <td><b>Chest:</b> {{$coat->chest}}</td>
                        <td><b>Coat Chest:</b> {{$coat->coat_chest}}</td>
                    </tr>
                    <tr>
                        <td><b>Quantity:</b> {{$coat->quantity}}</td>
                        <td><b>Waist:</b> {{$coat->waist}}</td>
                        <td><b>Coat Waist:</b> {{$coat->coat_waist}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Hip:</b> {{$coat->hip}}</td>
                        <td><b>Coat Hip:</b> {{$coat->coat_hip}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Shoulder:</b> {{$coat->shoulder}}</td>
                        <td><b>Coat Shoulder:</b> {{$coat->coat_shoulder}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Sleeve:</b> {{$coat->sleeve}}</td>
                        <td><b>Coat Neck:</b> {{$coat->coat_neck}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Arm:</b> {{$coat->arm}}</td>
                        <td><b>Cross Back:</b> {{$coat->cross_back}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Neck:</b> {{$coat->neck}}</td>
                        <td><b>Collar:</b> {{$coat->cot_collar}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Kuff:</b> {{$coat->kuff}}</td>
                        <td><b>Wallet Pocket:</b> {{$coat->wal_pocket}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Collar:</b> {{$coat->collar}}</td>
                        <td><b>Side Choke:</b> {{$coat->side_choke}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Collar Size:</b> {{$coat->collar_size}}</td>
                        <td><b>Daman:</b> {{$coat->coat_daman}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Shirt Fitting:</b> {{$coat->shirt_fitting}}</td>
                        <td><b>Inside Pocket:</b> {{$coat->ins_pocket}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Shirt Fitting Size:</b> {{$coat->shirt_fitting_size}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Patti:</b> {{$coat->patti}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Daman:</b> {{$coat->daman}}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Footer -->
        <div class="footer-section">
            <p class="footer-tagline">Specialist in Coat, Pant, Sherwani & Shalwar Kameez</p>
            <p class="footer-address">Shop No. G-101, G-57, Gulistan-e-Johar Harmain Tower & Shopping Mall</p>
            <p class="footer-contact">Contact: S.M Abdul Raheem - 📱 0345-3319764</p>
        </div>
    </div>
    
    <script>
        // Handle print button
        function printPage() {
            window.print();
        }
    </script>
</body>
</html>
