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
            padding: 15px;
            position: relative;
        }
        
        /* Header Section */
        .header-section {
            text-align: center;
            margin-bottom: 20px;
            border: 2px solid #000;
            padding: 15px;
            position: relative;
        }
        
        .logo {
            width: 90px;
            height: 90px;
            margin: 0 auto 10px;
            display: block;
            position: relative;
            z-index: 1;
        }
        
        .company-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 4px;
            position: relative;
            z-index: 1;
        }
        
        .company-tagline {
            font-size: 14px;
            font-style: italic;
            margin-bottom: 4px;
            position: relative;
            z-index: 1;
        }
        
        .company-address {
            font-size: 12px;
            color: #0066cc;
            margin-bottom: 4px;
            position: relative;
            z-index: 1;
        }
        
        .company-contact {
            font-size: 12px;
            margin-bottom: 4px;
            position: relative;
            z-index: 1;
        }
        
        /* Header section watermark - centered in entire header */
        .header-section::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 180px;
            height: 180px;
            background-image: url('{{asset('assets/img/DWT-PROFILE-PIC-1.jpg')}}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.12;
            z-index: 0;
            pointer-events: none;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
        
        /* Customer Details Section - Now inside header */
        .customer-section {
            margin-top: 15px;
            padding: 0;
            text-align: left;
            position: relative;
            z-index: 1;
        }
        
        .customer-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
        }
        
        .customer-item {
            width: 48%;
            font-size: 13px;
            font-weight: bold;
        }
        
        .customer-note {
            background: #f8f9fa;
            border: 2px solid #000;
            padding: 8px;
            margin: 10px 0 0 0;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
            color: #dc3545 !important;
            position: relative;
            z-index: 1;
        }
        
        /* Cut line */
        .cut-line {
            border-top: 2px dashed #000;
            margin: 20px 0;
            position: relative;
            text-align: center;
        }
        
        .cut-line::after {
            content: '✂️ CUT HERE ✂️';
            background: white;
            padding: 0 20px;
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 14px;
            font-weight: bold;
        }
        
        /* Customer section watermark */
        .customer-section {
            position: relative;
        }
        
        .customer-section::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
            background-image: url('{{asset('assets/img/DWT-PROFILE-PIC-1.jpg')}}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.05;
            z-index: -1;
            pointer-events: none;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
        
        /* Measurements section watermark */
        .table-section {
            position: relative;
        }
        
        .table-section::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
            background-image: url('{{asset('assets/img/DWT-PROFILE-PIC-1.jpg')}}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.04;
            z-index: -1;
            pointer-events: none;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
        
        /* Table Section */
        .table-section {
            margin-top: 20px;
        }
        
        .measurements-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        .measurements-table th,
        .measurements-table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            font-size: 17px;
            vertical-align: top;
            line-height: 1.2;
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
            margin-top: 20px;
            padding: 15px;
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
                padding: 8px !important;
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
            <div class="company-name">Dress Well Tailors</div>
            <div class="company-tagline">Specialist in Coat, Pant, Sherwani & Shalwar Kameez</div>
            <div class="company-address">Shop No: G-101, G-57, Gulistan-e-Johar Harmain Tower & Shopping Mall</div>
            <div class="company-contact">Contact: S.M Abdul Raheem - 📱 0345-3319764</div>
            
            <!-- Customer Details Section - Now inside header -->
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
        </div>
        
        <!-- Cut Line -->
        <div class="cut-line"></div>
        
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
                        <td><b>Length:</b> {{$coat->length ?? 'N/A'}}</td>
                        <td><b>Coat Length:</b> {{$coat->coat_length ?? 'N/A'}}</td>
                        <td rowspan="18">@if($coat->textarea)<b></b><br>{{$coat->textarea}}@endif</td>
                    </tr>
                    <tr>
                        <td><b>Order No.:</b> {{$coat->id}}</td>
                        <td><b>Chest:</b> {{$coat->chest ?? 'N/A'}}</td>
                        <td><b>Coat Chest:</b> {{$coat->coat_chest ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td><b>Quantity:</b> {{$coat->quantity}}</td>
                        <td><b>Waist:</b> {{$coat->waist ?? 'N/A'}}</td>
                        <td><b>Coat Waist:</b> {{$coat->coat_waist ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td><b>Category:</b> {{$coat->category}}</td>
                        <td><b>Hip:</b> {{$coat->hip ?? 'N/A'}}</td>
                        <td><b>Coat Hip:</b> {{$coat->coat_hip ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Shoulder:</b> {{$coat->shoulder ?? 'N/A'}}</td>
                        <td><b>Coat Shoulder:</b> {{$coat->coat_shoulder ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Sleeve:</b> {{$coat->sleeve ?? 'N/A'}}</td>
                        <td><b>Coat Neck:</b> {{$coat->coat_neck ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Arm:</b> {{$coat->arm ?? 'N/A'}}</td>
                        <td><b>Cross Back:</b> {{$coat->cross_back ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Neck:</b> {{$coat->neck ?? 'N/A'}}</td>
                        <td><b>Coat Collar:</b> {{$coat->cot_collar ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Kuff:</b> {{$coat->kuff ?? 'N/A'}}</td>
                        <td><b>Wallet Pocket:</b> {{$coat->wal_pocket ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Collar:</b> {{$coat->collar ?? 'N/A'}}</td>
                        <td><b>Side Choke:</b> {{$coat->side_choke ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Collar Size:</b> {{$coat->collar_size ?? 'N/A'}}</td>
                        <td><b>Coat Daman:</b> {{$coat->coat_daman ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Shirt Pocket:</b> {{$coat->shirt_pocket ?? 'N/A'}}</td>
                        <td><b>Inside Pocket:</b> {{$coat->ins_pocket ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Shirt Fitting:</b> {{$coat->shirt_fitting ?? 'N/A'}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Shirt Fitting Size:</b> {{$coat->shirt_fitting_size ?? 'N/A'}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Pocket:</b> {{$coat->pocket ?? 'N/A'}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Patti:</b> {{$coat->patti ?? 'N/A'}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Daman:</b> {{$coat->daman ?? 'N/A'}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Kuffs:</b> {{$coat->kuffs ?? 'N/A'}}</td>
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
