@extends('layouts.user.app')
@section('title', 'Dashboard - Car User')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-4">
        <!-- Left Column: Vehicle & Reminders -->
        <div class="col-xl-8">
            <div class="row g-4">
                <!-- Vehicle Slider -->
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Your Vehicles</h5>
                            <div class="swiper-container" id="vehicle-slider">
                                <div class="swiper-wrapper">
                                    <!-- Example vehicle slide -->
                                    <div class="swiper-slide">
                                        <div class="row align-items-center">
                                            <div class="col-md-5 text-center">
                                                <img src="https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg?auto=compress&w=400" class="img-fluid rounded mb-2" alt="Car" style="max-height: 140px; object-fit: cover;">
                                            </div>
                                            <div class="col-md-7">
                                                <h6 class="mb-1">Volvo XC60</h6>
                                                <div class="mb-1 small text-muted">2020 &bull; License: ABC-123</div>
                                                <div class="mb-1">Mileage: <span class="fw-semibold">45,000 km</span></div>
                                                <div class="mb-1">VIN: <span class="fw-semibold">YV1D21GM0L1234567</span></div>
                                                <div class="mb-1">Status: <span class="badge bg-label-success">Active</span></div>
                                                <div class="mt-2">
                                                    <a href="#" class="btn btn-outline-primary btn-sm">Track Repair</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-sm">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more vehicle slides as needed -->
                                    {{-- <div class="swiper-slide">
                                        <div class="row align-items-center">
                                            <div class="col-md-5 text-center">
                                                <img src="https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg?auto=compress&w=400" class="img-fluid rounded mb-2" alt="Car" style="max-height: 140px; object-fit: cover;">
                                            </div>
                                            <div class="col-md-7">
                                                <h6 class="mb-1">Toyota Camry</h6>
                                                <div class="mb-1 small text-muted">2018 &bull; License: XYZ-789</div>
                                                <div class="mb-1">Mileage: <span class="fw-semibold">82,000 km</span></div>
                                                <div class="mb-1">VIN: <span class="fw-semibold">4T1BF1FK5JU123456</span></div>
                                                <div class="mb-1">Status: <span class="badge bg-label-warning">Due for Service</span></div>
                                                <div class="mt-2">
                                                    <a href="#" class="btn btn-outline-primary btn-sm">Track Repair</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-sm">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="swiper-pagination mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Vehicle Slider -->

                {{-- <!-- Upcoming Reminders -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Upcoming Reminders</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex align-items-center">
                                    <span class="avatar bg-label-info me-3"><i class="ti ti-calendar-event"></i></span>
                                    <div class="flex-grow-1">
                                        <div class="fw-semibold">Regular Service Due</div>
                                        <small class="text-muted">Oil change and inspection</small><br>
                                        <span class="badge bg-label-danger mt-1">Due: 2024-09-15</span>
                                    </div>
                                    <span class="badge bg-danger ms-2">Important</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                    <span class="avatar bg-label-primary me-3"><i class="ti ti-tire"></i></span>
                                    <div class="flex-grow-1">
                                        <div class="fw-semibold">Winter Tire Change</div>
                                        <small class="text-muted">Schedule before first snow</small><br>
                                        <span class="badge bg-label-warning mt-1">Due: 2024-10-30</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="avatar bg-label-success me-3"><i class="ti ti-tools"></i></span>
                                    <div class="flex-grow-1">
                                        <div class="fw-semibold">Active Repair Request</div>
                                        <small class="text-muted">Brake pad replacement</small><br>
                                        <span class="badge bg-label-info mt-1">Scheduled: 2024-08-05</span>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-outline-secondary btn-sm mt-3 w-100">View All Reminders</a>
                        </div>
                    </div>
                </div>
                <!-- /Upcoming Reminders --> --}}
                <!-- Recent Maintenance Records -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Recent Maintenance</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar bg-label-primary me-3"><i class="ti ti-history"></i></span>
                                        <div>
                                            <div class="fw-semibold">Oil Change</div>
                                            <small class="text-muted">2024-03-15 &bull; Volvo XC60</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar bg-label-success me-3"><i class="ti ti-history"></i></span>
                                        <div>
                                            <div class="fw-semibold">Brake Service</div>
                                            <small class="text-muted">2024-02-10 &bull; Toyota Camry</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <span class="avatar bg-label-warning me-3"><i class="ti ti-history"></i></span>
                                        <div>
                                            <div class="fw-semibold">Tire Change</div>
                                            <small class="text-muted">2023-12-01 &bull; Volvo XC60</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-outline-secondary btn-sm mt-3 w-100">View Maintenance History</a>
                        </div>
                    </div>
                </div>
                <!-- /Recent Maintenance Records -->

                <!-- Subscriptions Summary -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Your Subscriptions</h5>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>
                                        <span class="badge bg-label-primary me-2"><i class="ti ti-clipboard"></i></span>
                                        Premium Plan (Auto Express)
                                    </span>
                                    <span class="badge bg-label-success">Active</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>
                                        <span class="badge bg-label-info me-2"><i class="ti ti-clipboard"></i></span>
                                        Standard Plan (FastFix)
                                    </span>
                                    <span class="badge bg-label-warning">Expiring Soon</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary btn-sm w-100">Manage Subscriptions</a>
                        </div>
                    </div>
                </div>
                <!-- /Subscriptions Summary -->
            </div>
        </div>

        <!-- Right Column: Quick Stats & Activity -->
        <div class="col-xl-4">
            <!-- Quick Stats -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Quick Stats</h5>
                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <div class="fs-4 fw-bold">2</div>
                            <div class="text-muted small">Active Vehicles</div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="fs-4 fw-bold">2</div>
                            <div class="text-muted small">Active Subscriptions</div>
                        </div>
                        <div class="col-6">
                            <div class="fs-4 fw-bold">1</div>
                            <div class="text-muted small">Repair Requests</div>
                        </div>
                        <div class="col-6">
                            <div class="fs-4 fw-bold">4</div>
                            <div class="text-muted small">Maintenance Records</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Quick Stats -->

            {{-- <!-- Recent Maintenance Records -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Recent Maintenance</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3">
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-label-primary me-3"><i class="ti ti-history"></i></span>
                                <div>
                                    <div class="fw-semibold">Oil Change</div>
                                    <small class="text-muted">2024-03-15 &bull; Volvo XC60</small>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-label-success me-3"><i class="ti ti-history"></i></span>
                                <div>
                                    <div class="fw-semibold">Brake Service</div>
                                    <small class="text-muted">2024-02-10 &bull; Toyota Camry</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-label-warning me-3"><i class="ti ti-history"></i></span>
                                <div>
                                    <div class="fw-semibold">Tire Change</div>
                                    <small class="text-muted">2023-12-01 &bull; Volvo XC60</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-outline-secondary btn-sm mt-3 w-100">View Maintenance History</a>
                </div>
            </div>
            <!-- /Recent Maintenance Records --> --}}

            <!-- Invoices/Financial Summary -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Invoices & Payments</h5>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Invoice #1023</span>
                            <span class="badge bg-label-success">Paid</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Invoice #1022</span>
                            <span class="badge bg-label-warning">Pending</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Invoice #1021</span>
                            <span class="badge bg-label-danger">Overdue</span>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100">View All Invoices</a>
                </div>
            </div>
            <!-- /Invoices/Financial Summary -->

            {{-- <!-- Mechanic Reviews -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Mechanic Reviews</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3">
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-label-info me-3"><i class="ti ti-star"></i></span>
                                <div>
                                    <div class="fw-semibold">Auto Express</div>
                                    <div class="text-warning small mb-1">
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star"></i>
                                        <span class="ms-1">4.0</span>
                                    </div>
                                    <small class="text-muted">"Great service and quick turnaround!"</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-label-success me-3"><i class="ti ti-star"></i></span>
                                <div>
                                    <div class="fw-semibold">FastFix Car Service</div>
                                    <div class="text-warning small mb-1">
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star"></i>
                                        <i class="ti ti-star"></i>
                                        <span class="ms-1">3.0</span>
                                    </div>
                                    <small class="text-muted">"Affordable and reliable."</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-outline-secondary btn-sm mt-3 w-100">View All Reviews</a>
                </div>
            </div>
            <!-- /Mechanic Reviews --> --}}
        </div>
    </div>
</div>

<!-- Swiper JS for vehicle slider (if not already included) -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (window.Swiper) {
            new Swiper('#vehicle-slider', {
                slidesPerView: 1,
                spaceBetween: 20,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }
    });
</script>

@endsection