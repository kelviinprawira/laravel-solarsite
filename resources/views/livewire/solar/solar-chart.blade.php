<div>
    <div>
        <div id="wm"></div>
        <div id="tp"></div>
        <div id="rt"></div>
        <div id="ms"></div>
        <div id="inf"></div>
    </div>
    <script src="{{asset('chart/dist/apexcharts.min.js')}}"></script>
    <script>
        var options = {
            series: [{
                name: 'QUALITY (Liter)',
                data: @json($chart_wm)
            },
            ],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '20%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['PLAN', 'REAL', 'ACH',],
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value;
                    }
                },
            },
            title: {
                text: 'WATER MANAGEMENT SYSTEM',
            },
            fill: {
                colors: '#619eff'
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + " Liter"
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#wm"), options);
        chart.render();


        // Transport Panen Chart
        var options = {
            series: [{
                name: 'QUALITY (Liter)',
                data: @json($chart_tp)
            },
            ],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '20%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['PLAN', 'REAL', 'ACH'],
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value;
                    }
                },
            },
            title: {
                text: 'TRANSPORT PANEN'
            },
            fill: {
                colors: '#00ff6c'
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + " Liter"
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#tp"), options);
        chart.render();

        //     Rawat TM Chart
        var options = {
            series: [{
                name: 'QUALITY (Liter)',
                data: @json($chart_rt)
            },
            ],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '20%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['PLAN', 'REAL', 'ACH',],

            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value;
                    }
                },
            },
            title: {
                text: 'RAWAT'
            },
            fill: {
                colors: '#de45c4'
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + " Liter"
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#rt"), options);
        chart.render();

        // Mills Support Chart
        var options = {
            series: [{
                name: 'QUALITY (Liter)',
                data: @json($chart_ms)
            },
            ],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '20%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['PLAN', 'REAL', 'ACH',],
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value;
                    }
                },
            },
            title: {
                text: 'PABRIK'
            },
            fill: {
                colors: '#424242'
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + " Liter"
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#ms"), options);
        chart.render();

        // Infrastructur Chart
        var options = {
            series: [{
                name: 'QUALITY (Liter)',
                data: @json($chart_inf)
            },
            ],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '20%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['PLAN', 'REAL', 'ACH',],
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value;
                    }
                },
            },
            title: {
                text: 'TEKNIK'
            },
            fill: {
                colors: '#d03f2c'
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + " Liter"
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#inf"), options);
        chart.render()
    </script>
</div>





