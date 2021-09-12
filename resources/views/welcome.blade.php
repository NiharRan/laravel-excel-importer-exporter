<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vidhyapeeth</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('main.css') }}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('partials/app-header')
        <div class="ui-theme-settings">
            <div class="theme-settings__inner">
                <div class="scrollbar-container">

                </div>
            </div>
        </div>
        <div class="app-main">
            @include('partials/app-sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @include('partials/app-page-header')

                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-sunny-morning">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Employees</div>
                                        <div class="widget-subheading">Total no. of employees</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>800</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-plum-plate">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Faculty</div>
                                        <div class="widget-subheading">Total Faculty</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>568</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Programs</div>
                                        <div class="widget-subheading">No. of Programs</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>156</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Add Employee</div>
                                        <div class="widget-subheading">Add employee details</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Employee</div>
                                        <div class="widget-subheading">Check employee details</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Employee History</div>
                                        <div class="widget-subheading">Check employee history</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Divisions</div>
                                        <div class="widget-subheading">Add divisions</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Faculty</div>
                                        <div class="widget-subheading">Add Faculty details</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Programs</div>
                                        <div class="widget-subheading">Add program details</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Program Types</div>
                                        <div class="widget-subheading">Add program type</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Course</div>
                                        <div class="widget-subheading">Add Courses</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Test</div>
                                        <div class="widget-subheading">Prepare test questions</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Results</div>
                                        <div class="widget-subheading">Check results</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Evaluation</div>
                                        <div class="widget-subheading">Give test results</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Evaluation Results</div>
                                        <div class="widget-subheading">Check evaluation results</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">SBU Wise Reports</div>
                                        <div class="widget-subheading">Check SBU wise reports</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Division Wise Reports</div>
                                        <div class="widget-subheading">Check division wise reports</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Program Wise Reports</div>
                                        <div class="widget-subheading">Check program wise reports</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Master Data Reports</div>
                                        <div class="widget-subheading">Check master data reports</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Attendance</div>
                                        <div class="widget-subheading">Check attendance</div>
                                    </div>
                                    <div class="widget-content-right text-white">
                                        <a href="addemployee.html">
                                            <button class="mb-2 mr-2 btn btn-success"><strong>SEE
                                                    MORE</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="{{ asset('vendor/scripts/main.js') }}"></script>
</body>

</html>
