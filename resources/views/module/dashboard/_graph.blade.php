<div class="box" style="margin-top:3.5em">
    <div class="box-header with-border">
        <h3 class="box-title">Grafik Rerata Pendapatan Per Jam </h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                    <strong>Tanggal : <span id="label-average-weekly"></span></strong>
                </p>

                <div class="chart">
                    <div id="loading-chart-average-weekly" style="text-align: center">
                        <i class="fa fa-spin fa-2x fa-cog"></i>
                    </div>
                    <span id="helper-chart-average-weekly"></span>
                    <canvas id="average-weekly-chart" style="height: 200px; width: 860px;" width="860"
                            height="180"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- ./box-body -->
</div>

@section('script')
@endsection