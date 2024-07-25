<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/Admin/" data-template="vertical-menu-template-free">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SMDC Condominium | SMDC Condo</title>

    @section('links')
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="https://mysmdc.ph/wp-content/uploads/2023/05/smdc-favicon-300x300.jpg" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="../assets/Admin/vendor/fonts/boxicons.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="../assets/Admin/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="../assets/Admin/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="../assets/Admin/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="../assets/Admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

        <link rel="stylesheet" href="../assets/Admin/vendor/libs/apex-charts/apex-charts.css" />
        <link rel="stylesheet" href="../assets/Admin/vendor/libs/DataTables/datatables.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            .count {
                cursor: pointer;
            }

            .count i {
                font-size: 3rem;
            }

            td img {
                width: 13rem;
            }

            td video {
                width: 17rem;
            }

            form img {
                max-width: 100%;
                max-height: 7rem;
            }

            form video {
                width: 100%;
                width: 17rem;
            }
        </style>

        <meta name="csrf-token" content="{{ csrf_token() }}">
    @show
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('Layout.Admin.Sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('Layout.Admin.Navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        @section('main')

                            @yield('content')
                
                        @show
                    </div>

                </div>
                <!-- / Content -->

                <!-- Footer -->
                @include('Layout.Admin.Footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    @section('scripts')
        <!-- Helpers -->
        <script src="../assets/Admin/vendor/js/helpers.js"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="../assets/Admin/js/config.js"></script>

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../assets/Admin/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/Admin/vendor/libs/popper/popper.js"></script>
        <script src="../assets/Admin/vendor/js/bootstrap.js"></script>
        <script src="../assets/Admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <!-- Vendors JS -->
        <!-- Apex Charts -->
        <script src="../assets/Admin/vendor/libs/apex-charts/apexcharts.js"></script>
        <!-- Data Tables -->
        <script src="../assets/Admin/vendor/libs/DataTables/datatables.min.js"></script>

        <script src="../assets/Admin/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Main JS -->
        <script src="../assets/Admin/js/main.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @show
</body>