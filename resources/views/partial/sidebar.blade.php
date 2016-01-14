<?php $segment = GLobalHelper::indexUrl(); ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu">

            {{-- Untuk tampilan menu dropdown --}}
            {{--<li class="treeview {!! $segment == 'report-attendace' || $segment == 'report-salary' ? 'active' : '' !!}">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-pie-chart"></i>--}}
            {{--<span>Laporan</span>--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li class="{!! $segment == 'report-attendace' ? 'active-treeview' : '' !!}">--}}
            {{--<a href="{!! url('report-attendace') !!}">--}}
            {{--<i class="fa fa-line-chart"></i> <span>Laporan Kehadiran</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="{!! $segment == 'report-salary' ? 'active-treeview' : '' !!}" style="display:none">--}}
            {{--<a href="{!! url('report-salary') !!}">--}}
            {{--<i class="fa fa-line-chart"></i> <span>Laporan Gaji</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            <li class="header">KONFIGURASI</li>
            <li class="{!! $segment == 'configuration' ? 'active' : '' !!}">
                <a href="{!! url('configuration') !!}">
                    <i class="fa  fa-gear"></i> <span>Konfigurasi Umum</span>
                </a>
            </li>
            <li class="{!! $segment == 'module_access' ? 'active' : '' !!}">
                <a href="{!! url('module_access') !!}">
                    <i class="fa fa-shield"></i> <span>Modul Akses</span>
                </a>
            </li>

            {{--<li class="treeview {!! $segment == 'module' || $segment == 'module_access' || $segment == 'configuration' ? 'active' : '' !!}">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa  fa-gear"></i>--}}
                    {{--<span>Konfigurasi</span>--}}
                    {{--<i class="fa fa-angle-left pull-right"></i>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li class="{!! $segment == 'configuration' ? 'active' : '' !!}">--}}
                        {{--<a href="{!! url('configuration') !!}">--}}
                            {{--<i class="fa fa-pie-chart"></i> <span> Konfigurasi Umum</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class=" {!! $segment == 'module_access' ? 'active-treeview' : '' !!} " style="color: black;">--}}
                        {{--<a href="{!! url('module_access') !!}">--}}
                            {{--<i class="fa fa-asterisk"></i> <span>Modul Akses</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>