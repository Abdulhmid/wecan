<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3>
                    <span id="income"></span>
                </h3>
                <span id="loading-income"><i class="fa fa-spinner fa-2x fa-pulse"></i></span>

                <p>Pendapatan parkir hari ini</p>
            </div>
            <div class="icon">
                <i class="ion ion-cash"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><span id="car"></span></h3>
                <span id="loading-car"><i class="fa fa-spinner fa-2x fa-pulse"></i></span>

                <p>Mobil keluar hari ini</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-car"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3><span id="motor"></span></h3>
                <span id="loading-motor"><i class="fa fa-spinner fa-2x fa-pulse"></i></span>

                <p>Motor keluar hari ini</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-bicycle"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><span id="other"></span></h3>
                <span id="loading-other"><i class="fa fa-spinner fa-2x fa-pulse"></i></span>

                <p>Kendaraan lain keluar hari ini</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-bus"></i>
            </div>
        </div>
    </div>
</div>

@section('script')
    @parent

    <script type="text/javascript">

    </script>

@endsection