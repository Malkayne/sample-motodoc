@extends('layouts.mechanic.app')
@section('title', 'Dashboard - Mechanic')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-4 mb-4">
        <!-- Left Column: Business Overview & New Requests -->
        <div class="col-12">
            <div class="row g-4">
                <!-- Business Overview -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Business Overview</h5>
                            <div class="d-flex align-items-center mb-2">
                                <span class="avatar bg-label-success me-3" style="width:48px;height:48px;font-size:1.5rem;">A</span>
                                <div>
                                    <div class="fw-semibold">Auto Express</div>
                                    <div class="small text-muted">Helsinki, Finland</div>
                                    <div class="text-warning small">
                                        <i class="ti ti-star-filled"></i> 4.8 (124 reviews)
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">Hourly Rate: <span class="fw-semibold">₦805</span></div>
                            <div class="row text-center mb-3">
                                <div class="col-6">
                                    <div class="fs-5 fw-bold">3</div>
                                    <div class="text-muted small">Upcoming Bookings</div>
                                </div>
                                <div class="col-6">
                                    <div class="fs-5 fw-bold">2</div>
                                    <div class="text-muted small">Active Repairs</div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm w-100">Edit Business Profile</a>
                        </div>
                    </div>
                </div>
                <!-- /Business Overview -->

                <!-- New Requests Summary -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">New Requests</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex align-items-center">
                                    <span class="avatar bg-label-info me-3"><i class="ti ti-bell"></i></span>
                                    <div class="flex-grow-1">
                                        <div class="fw-semibold">Brake Service Request</div>
                                        <small class="text-muted">BMW 320i &bull; 2024-05-22</small>
                                    </div>
                                    <span class="badge bg-label-warning ms-2">New</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                    <span class="avatar bg-label-primary me-3"><i class="ti ti-bell"></i></span>
                                    <div class="flex-grow-1">
                                        <div class="fw-semibold">Oil Change Request</div>
                                        <small class="text-muted">Toyota Camry &bull; 2024-05-23</small>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-outline-secondary btn-sm mt-3 w-100">View All Requests</a>
                        </div>
                    </div>
                </div>
                <!-- /New Requests Summary -->

                <!-- Earnings Summary -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Earnings Summary</h5>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Total Earnings</span>
                                <span class="fw-bold">₦20,350</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Pending Payments</span>
                                <span class="fw-bold text-warning">₦4020</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Paid Invoices</span>
                                <span class="fw-bold text-success">₦10,930</span>
                            </div>
                            <a href="#" class="btn btn-outline-success btn-sm mt-3 w-100">View All Invoices</a>
                        </div>
                    </div>
                </div>
                <!-- /Earnings Summary -->

                {{-- <!-- Active Repairs -->
                <div class="col-md-7">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Active Repairs</h5>
                            <div class="mb-4">
                                <div class="fw-semibold">Volvo XC60</div>
                                <div class="small text-muted">License: ABC-123 | Customer: Mikko Virtanen</div>
                                <div class="small">Service: Exhaust System Repair</div>
                                <div class="progress my-2" style="height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small>Started: 2024-05-18 | Est. Completion: 2024-05-21</small>
                                    <span class="badge bg-label-warning">60% Complete</span>
                                </div>
                                <div class="small text-muted mb-2">Notes: Waiting for parts to arrive. Customer informed.</div>
                                <div class="d-flex gap-2">
                                    <a href="#" class="btn btn-outline-info btn-sm">Update Progress</a>
                                    <a href="#" class="btn btn-outline-success btn-sm">Mark Complete</a>
                                </div>
                            </div>
                            <div>
                                <div class="fw-semibold">Audi A4</div>
                                <div class="small text-muted">License: GHI-789 | Customer: Anna Nieminen</div>
                                <div class="small">Service: Engine Diagnostics</div>
                                <div class="progress my-2" style="height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 80%"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small>Started: 2024-05-19 | Est. Completion: 2024-05-20</small>
                                    <span class="badge bg-label-success">80% Complete</span>
                                </div>
                                <div class="small text-muted mb-2">Notes: Issue identified, repairing sensor.</div>
                                <div class="d-flex gap-2">
                                    <a href="#" class="btn btn-outline-info btn-sm">Update Progress</a>
                                    <a href="#" class="btn btn-outline-success btn-sm">Mark Complete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Active Repairs --> --}}
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Right Column: New Requests, Calendar, Earnings -->

            {{-- <!-- New Requests Summary -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">New Requests</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 d-flex align-items-center">
                            <span class="avatar bg-label-info me-3"><i class="ti ti-bell"></i></span>
                            <div class="flex-grow-1">
                                <div class="fw-semibold">Brake Service Request</div>
                                <small class="text-muted">BMW 320i &bull; 2024-05-22</small>
                            </div>
                            <span class="badge bg-label-warning ms-2">New</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <span class="avatar bg-label-primary me-3"><i class="ti ti-bell"></i></span>
                            <div class="flex-grow-1">
                                <div class="fw-semibold">Oil Change Request</div>
                                <small class="text-muted">Toyota Camry &bull; 2024-05-23</small>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-outline-secondary btn-sm mt-3 w-100">View All Requests</a>
                </div>
            </div>
            <!-- /New Requests Summary --> --}}

            <!-- Active Repairs -->
            <div class="col-lg-7">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Active Repairs</h5>
                        <div class="mb-4">
                            <div class="fw-semibold">Volvo XC60</div>
                            <div class="small text-muted">License: ABC-123 | Customer: Mikko Virtanen</div>
                            <div class="small">Service: Exhaust System Repair</div>
                            <div class="progress my-2" style="height: 8px;">
                                <div class="progress-bar bg-success" style="width: 60%"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <small>Started: 2024-05-18 | Est. Completion: 2024-05-21</small>
                                <span class="badge bg-label-warning">60% Complete</span>
                            </div>
                            <div class="small text-muted mb-2">Notes: Waiting for parts to arrive. Customer informed.</div>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-info btn-sm">Update Progress</a>
                                <a href="#" class="btn btn-outline-success btn-sm">Mark Complete</a>
                            </div>
                        </div>
                        <div>
                            <div class="fw-semibold">Audi A4</div>
                            <div class="small text-muted">License: GHI-789 | Customer: Anna Nieminen</div>
                            <div class="small">Service: Engine Diagnostics</div>
                            <div class="progress my-2" style="height: 8px;">
                                <div class="progress-bar bg-success" style="width: 80%"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <small>Started: 2024-05-19 | Est. Completion: 2024-05-20</small>
                                <span class="badge bg-label-success">80% Complete</span>
                            </div>
                            <div class="small text-muted mb-2">Notes: Issue identified, repairing sensor.</div>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-info btn-sm">Update Progress</a>
                                <a href="#" class="btn btn-outline-success btn-sm">Mark Complete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Active Repairs -->

            <!-- Calendar of Upcoming Jobs -->
            <div class="col-lg-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Upcoming Jobs</h5>
                        <div id="mechanic-calendar" style="height: 220px; background: #f8f9fa; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #aaa;">
                            <span>Calendar Widget (Coming Soon)</span>
                        </div>
                        <a href="#" class="btn btn-outline-primary btn-sm mt-3 w-100">View Calendar</a>
                    </div>
                </div>
            </div>
            <!-- /Calendar of Upcoming Jobs -->

            {{-- <!-- Earnings Summary -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Earnings Summary</h5>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Total Earnings</span>
                        <span class="fw-bold">₦20,350</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Pending Payments</span>
                        <span class="fw-bold text-warning">₦4020</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Paid Invoices</span>
                        <span class="fw-bold text-success">₦10,930</span>
                    </div>
                    <a href="#" class="btn btn-outline-success btn-sm mt-3 w-100">View All Invoices</a>
                </div>
            </div>
            <!-- /Earnings Summary --> --}}

    </div>

    <!-- Bookings, Top Services, Top Customers -->
    <div class="row g-4 mt-1">
        <div class="col-12">
            <ul class="nav nav-pills mb-3 justify-content-center" id="dashboardTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="bookings-tab" data-bs-toggle="pill" data-bs-target="#bookings" type="button" role="tab">Bookings</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="services-tab" data-bs-toggle="pill" data-bs-target="#services" type="button" role="tab">Top Services</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="customers-tab" data-bs-toggle="pill" data-bs-target="#customers" type="button" role="tab">Top Customers</button>
                </li>
            </ul>
            <div class="tab-content" id="dashboardTabsContent">
                <!-- Bookings Tab -->
                <div class="tab-pane fade show active" id="bookings" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="fw-semibold">Oil Change</h6>
                                    <div class="small text-muted mb-2">Full synthetic oil change</div>
                                    <div class="mb-1">Price: <span class="fw-bold">₦1020</span></div>
                                    <div class="mb-1">Duration: <span class="fw-bold">45 min</span></div>
                                    <a href="#" class="btn btn-outline-secondary btn-sm w-100 mt-2">Edit Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="fw-semibold">Brake Service</h6>
                                    <div class="small text-muted mb-2">Pad replacement & inspection</div>
                                    <div class="mb-1">Price: <span class="fw-bold">₦1080</span></div>
                                    <div class="mb-1">Duration: <span class="fw-bold">1.5 hr</span></div>
                                    <a href="#" class="btn btn-outline-secondary btn-sm w-100 mt-2">Edit Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="fw-semibold">Tire Change</h6>
                                    <div class="small text-muted mb-2">Seasonal tire change</div>
                                    <div class="mb-1">Price: <span class="fw-bold">₦800</span></div>
                                    <div class="mb-1">Duration: <span class="fw-bold">1 hr</span></div>
                                    <a href="#" class="btn btn-outline-secondary btn-sm w-100 mt-2">Edit Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="fw-semibold">Full Service</h6>
                                    <div class="small text-muted mb-2">Complete inspection & maintenance</div>
                                    <div class="mb-1">Price: <span class="fw-bold">₦3050</span></div>
                                    <div class="mb-1">Duration: <span class="fw-bold">3 hr</span></div>
                                    <a href="#" class="btn btn-outline-secondary btn-sm w-100 mt-2">Edit Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Bookings Tab -->

                <!-- Top Services Tab -->
                <div class="tab-pane fade" id="services" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="fw-semibold">Oil Change</h6>
                                    <div class="text-muted small mb-2">42 bookings</div>
                                    <div class="mb-1">Revenue: <span class="fw-bold">₦50,040</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="fw-semibold">Brake Service</h6>
                                    <div class="text-muted small mb-2">28 bookings</div>
                                    <div class="mb-1">Revenue: <span class="fw-bold">₦50,040</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="fw-semibold">Full Service</h6>
                                    <div class="text-muted small mb-2">15 bookings</div>
                                    <div class="mb-1">Revenue: <span class="fw-bold">₦50,250</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Top Services Tab -->

                <!-- Top Customers Tab -->
                <div class="tab-pane fade" id="customers" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar bg-label-info me-3">M</span>
                                        <div>
                                            <div class="fw-semibold">Mikko Virtanen</div>
                                            <div class="text-muted small">Volvo XC60</div>
                                        </div>
                                    </div>
                                    <div class="mb-1">Total Spent: <span class="fw-bold">₦10,200</span></div>
                                    <div class="mb-1">Bookings: <span class="fw-bold">6</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar bg-label-success me-3">A</span>
                                        <div>
                                            <div class="fw-semibold">Anna Nieminen</div>
                                            <div class="text-muted small">Audi A4</div>
                                        </div>
                                    </div>
                                    <div class="mb-1">Total Spent: <span class="fw-bold">₦9050</span></div>
                                    <div class="mb-1">Bookings: <span class="fw-bold">4</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar bg-label-warning me-3">J</span>
                                        <div>
                                            <div class="fw-semibold">Jari Korhonen</div>
                                            <div class="text-muted small">BMW 320i</div>
                                        </div>
                                    </div>
                                    <div class="mb-1">Total Spent: <span class="fw-bold">₦8000</span></div>
                                    <div class="mb-1">Bookings: <span class="fw-bold">3</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Top Customers Tab -->
            </div>
        </div>
    </div>
</div>
@endsection