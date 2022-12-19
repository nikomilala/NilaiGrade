@extends('base')

@section('content')
    <div class="container pt-3">
        <h2 class="text-center">Nilai Detail Mahasiswa</h2>
        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>

        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nilai</th>
                <th scope="col">Grade</th>

            </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">Quiz</th>
                    <th scope="row">{{$nilai_detail->quiz}}</th>
                    <th scope="row">{{$gradequiz}}</th>
                </tr>
                <tr>
                    <th scope="row">Tugas</th>
                    <th scope="row">{{$nilai_detail->tugas}}</th>
                    <th scope="row">{{$gradetugas}}</th>

                </tr>
                <tr>
                    <th scope="row">Absensi</th>
                    <th scope="row">{{$nilai_detail->absensi}}</th>
                    <th scope="row">{{$gradeabsensi}}</th>
                </tr>
                <tr>
                    <th scope="row">Praktek</th>
                    <th scope="row">{{$nilai_detail->praktek}}</th>
                    <th scope="row">{{$gradepraktek}}</th>
                </tr>
                <tr>
                    <th scope="row">UAS</th>
                    <th scope="row">{{$nilai_detail->uas}}</th>
                    <th scope="row">{{$gradeuas}}</th>


                </tr>

            </tbody>

        </table>


        <script>
            var xValues = ["Quiz = {{$gradequiz}}", "Tugas = {{$gradetugas}}", "Absensi = {{$gradeabsensi}}", "Praktek = {{$gradepraktek}}", 'UAS = {{$gradeuas}}'];
            var yValues = [
                {{$nilai_detail->quiz}},
                {{$nilai_detail->tugas}},
                {{$nilai_detail->absensi}},
                {{$nilai_detail->praktek}},
                {{$nilai_detail->uas}}
            ];
            var barColors = ["red", "green","blue","orange","brown"];

            new Chart("myChart", {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues,
                        fill: false,
                        borderCapStyle: 'butt',
                        borderDash: [5, 5],

                    }]
                },
                options: {
                    responsive: true,
                    legend: {
                        display: false,
                        position: 'bottom',
                    },
                    hover: {
                        mode: 'label'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                            }
                        }],
                        yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 5,
                                stepValue: 5,
                                max: 100
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: "Grade Graph"
                    }
                }

            });
        </script>

    </div>
@endsection
