<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight dark:bg-gray-900">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="card">
                        <div class="card-header dark:bg-gray-700 text-white">
                            <h3>LIST OF USERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header dark:bg-gray-700 text-white">
                                            <span>LINE CHART</span>
                                        </div>
                                        <div class="card-body text-center" style="font-size: 36px;">
                                            <div id="line-chart"></div>
                                        </div>
                                    </div>     
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header dark:bg-gray-700 text-white">
                                            <span>AREA CHART</span>
                                        </div>
                                        <div class="card-body text-center" style="font-size: 36px;">
                                            <div id="area-chart"></div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header dark:bg-gray-700 text-white">
                                            <span>BAR CHART (COLUMN)</span>
                                        </div>
                                        <div class="card-body text-center" style="font-size: 36px;">
                                            <div id="bar-chart"></div>
                                        </div>
                                    </div>     
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header dark:bg-gray-700 text-white">
                                            <span>HORIZONTAL BAR CHART</span>
                                        </div>
                                        <div class="card-body text-center" style="font-size: 36px;">
                                            <div id="horizontal-bar-chart"></div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header dark:bg-gray-700 text-white">
                                            <span>PIE CHART</span>
                                        </div>
                                        <div class="card-body text-center" style="font-size: 36px;">
                                            <div id="pie-chart"></div>
                                        </div>
                                    </div>     
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header dark:bg-gray-700 text-white">
                                            <span>DONUT CHART</span>
                                        </div>
                                        <div class="card-body text-center" style="font-size: 36px;">
                                            <div id="donut-chart"></div>
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
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('js/superadmin-dashboard.js') }}"></script>
<script src="{{ asset('js/line-chart.js') }}"></script>
<script src="{{ asset('js/area-chart.js') }}"></script>
<script src="{{ asset('js/bar-chart.js') }}"></script>
<script src="{{ asset('js/horizontal-bar-chart.js') }}"></script>
<script src="{{ asset('js/pie-chart.js') }}"></script>
<script src="{{ asset('js/donut-chart.js') }}"></script>
