@extends('backend.layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <main class="dashboard-main">
        @include('backend.layouts.partials.header')

        <div class="dashboard-main-body py-4">
            <div class="container-fluid">

                <!-- PROFESSIONAL UNIQUE HEADER -->
                <div class="mb-3 p-4 rounded-3 shadow-sm text-white d-flex flex-column flex-md-row align-items-center justify-content-between"
                     style="background: linear-gradient(135deg, #4a90e2, #50c9c3, #00d2ff);">
                    
                    <!-- LEFT TEXT -->
                    <div class="mb-2 mb-md-0 p-3">
                        <h5 class="fw-bold mb-1 d-flex align-items-center">
                            <i class="bi bi-ui-checks-grid me-2"></i>
                            Application Form
                        </h5>
                        <small class="text-white-50 fw-medium" style="letter-spacing: 0.3px;">Fill all required details carefully</small>
                    </div>

                    <!-- RIGHT BADGE WITH ICON -->
                    <span class="badge bg-white text-primary py-1 px-3 me-3 fw-semibold d-flex align-items-center small">
                        <i class="bi bi-info-circle me-1"></i> Application Info
                    </span>
                </div>

                <form>
                    <div class="row g-4">

                        <!-- LEFT SIDE -->
                        <div class="col-lg-8">

                            <!-- APPLICATION -->
                            <div class="card modern-card">
                                <div class="card-header section-header bg-primary text-white">
                                    Application Information
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Application Agent *</label>
                                    <select class="form-select">
                                        <option disabled selected>Select Agent</option>
                                        <option>Ali Hassan</option>
                                        <option>Usman Khan</option>
                                        <option>Sara Ahmed</option>
                                    </select>
                                </div>
                            </div>

                            <!-- CUSTOMER -->
                            <div class="card modern-card mt-3">
                                <div class="card-header section-header bg-dark text-white">
                                    Customer Details
                                </div>
                                <div class="card-body row g-3">

                                    <div class="col-md-6">
                                        <label class="form-label">Company Name *</label>
                                        <input class="form-control" placeholder="Enter company name">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Trading Name *</label>
                                        <input class="form-control" placeholder="Enter trading name">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Business Entity *</label>
                                        <select class="form-select">
                                            <option disabled selected>Select</option>
                                            <option>Sole Proprietor</option>
                                            <option>Partnership</option>
                                            <option>Private Limited</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Business Nature *</label>
                                        <select class="form-select">
                                            <option disabled selected>Select</option>
                                            <option>Retail</option>
                                            <option>Wholesale</option>
                                            <option>Restaurant</option>
                                            <option>Services</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Title *</label>
                                        <select class="form-select">
                                            <option>Mr</option>
                                            <option>Mrs</option>
                                            <option>Miss</option>
                                        </select>
                                    </div>

                                    <div class="col-md-8">
                                        <label class="form-label">Merchant Full Name *</label>
                                        <input class="form-control" placeholder="Enter full name">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Position *</label>
                                        <select class="form-select">
                                            <option>Owner</option>
                                            <option>Director</option>
                                            <option>Manager</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Email *</label>
                                        <input type="email" class="form-control" placeholder="example@email.com">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Phone *</label>
                                        <input class="form-control" placeholder="03XXXXXXXXX">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Companies House Number</label>
                                        <input class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">VAT / TAX Number</label>
                                        <input class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Trading Address</label>
                                        <textarea class="form-control"></textarea>
                                    </div>

                                </div>
                            </div>

                            <!-- DIRECTOR -->
                            <div class="card modern-card mt-3">
                                <div class="card-header section-header bg-success text-white d-flex justify-content-between">
                                    Director Details
                                    <button class="btn btn-light btn-sm">+ Add More</button>
                                </div>

                                <div class="card-body row g-3">

                                    <div class="col-md-6">
                                        <label class="form-label">Director Name</label>
                                        <input class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Phone</label>
                                        <input class="form-control">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Email</label>
                                        <input class="form-control">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Address</label>
                                        <input class="form-control">
                                    </div>

                                </div>
                            </div>

                            <!-- APPLICATION DETAIL -->
                            <div class="card modern-card mt-3">
                                <div class="card-header section-header bg-info text-white">
                                    Application Detail
                                </div>

                                <div class="card-body row g-3">

                                    <div class="col-md-4">
                                        <label class="form-label">Application Number *</label>
                                        <input class="form-control" value="AUTO-001" readonly>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Service</label>
                                        <input class="form-control" value="Card Machine" readonly>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Application Date *</label>
                                        <input type="date" class="form-control">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Renewal Date *</label>
                                        <input type="date" class="form-control">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Brand *</label>
                                        <select class="form-select">
                                            <option disabled selected>Select Brand</option>
                                            <option>Verifone</option>
                                            <option>Ingenico</option>
                                            <option>PAX</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Qty *</label>
                                        <input type="number" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="eposSwitch">
                                            <label class="form-check-label ms-2" for="eposSwitch">EPOS System</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Delivery Address</label>
                                        <textarea class="form-control"></textarea>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Comment</label>
                                        <textarea class="form-control"></textarea>
                                    </div>

                                </div>
                            </div>

                            <!-- MONTHLY RENTAL -->
                            <div class="card modern-card mt-3">
                                <div class="card-header section-header bg-warning text-dark">
                                    Monthly Rental
                                </div>

                                <div class="card-body row g-3">
                                    @foreach (['Debit Card', 'Credit Card', 'Commercial Card', 'Authentication Fee', 'PCI', 'Rental'] as $field)
                                        <div class="col-md-6 col-lg-4">
                                            <label class="form-label">{{ $field }}</label>
                                            <input type="number" class="form-control" placeholder="Enter {{ $field }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                        <!-- RIGHT SIDE -->
                        <div class="col-lg-4">

                            <div class="card modern-card">
                                <div class="card-header section-header bg-secondary text-dark">
                                    Bank Details
                                </div>

                                <div class="card-body">
                                    @foreach (['Name On Account', 'Account Number', 'Sort Code', 'IBAN', 'BIC', 'Name Of Bank'] as $field)
                                        <label class="form-label">{{ $field }}</label>
                                        <input class="form-control mb-3" placeholder="Enter {{ $field }}">
                                    @endforeach
                                </div>
                            </div>

                            <div class="card modern-card mt-3">
                                <div class="card-body text-center">
                                    <button class="btn btn-gradient w-100">
                                        <i class="bi bi-send me-1"></i> Submit Application
                                    </button>
                                </div>
                            </div>

                        </div>

                    </div>
                </form>

            </div>
        </div>

        <style>
            body {
                background: #f4f7fb;
                font-size: 13px;
            }

            .modern-card {
                border-radius: 14px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, .05);
                transition: .3s;
                border: none;
            }

            .modern-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 14px 30px rgba(0, 0, 0, .08);
            }

            .section-header {
                font-weight: 600;
                font-size: 14px;
                border-radius: 14px 14px 0 0;
            }

            .form-control,
            .form-select {
                height: 42px;
                border-radius: 8px;
                border: 1px solid #e2e6ea;
            }

            textarea.form-control {
                height: 100px;
            }

            .form-control:focus,
            .form-select:focus {
                border-color: #3a7bd5;
                box-shadow: 0 0 0 3px rgba(58, 123, 213, .15);
            }

            .form-label {
                font-size: 12px;
                font-weight: 600;
                color: #555;
                margin-bottom: 5px;
            }

            .btn-gradient {
                background: linear-gradient(45deg, #3a7bd5, #00d2ff);
                border: none;
                color: #fff;
                padding: 10px;
                font-weight: 600;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .btn-gradient:hover {
                opacity: 0.9;
            }

            .bg-primary {
                background: linear-gradient(45deg, #3a7bd5, #3a6073) !important;
            }

            .bg-dark {
                background: linear-gradient(45deg, #232526, #414345) !important;
            }

            .bg-success {
                background: linear-gradient(45deg, #11998e, #38ef7d) !important;
            }

            .bg-info {
                background: linear-gradient(45deg, #2193b0, #6dd5ed) !important;
            }

            .bg-warning {
                background: linear-gradient(45deg, #f7971e, #ffd200) !important;
            }

            .bg-secondary {
                background: linear-gradient(45deg, #757f9a, #d7dde8) !important;
            }
        </style>
@endsection