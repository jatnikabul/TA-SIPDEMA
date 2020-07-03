@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Desa Marengmang
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Desa Marengmang</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Desa Marengmang</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>{{$penduduk->count()}}</h3>
                                    <p>Penduduk</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <a href="#" class="small-box-footer">Info lebih lanjut <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 10px"></sup></h3>
                                    <p>Surat</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <a href="#" class="small-box-footer">Info lebih lanjut <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>Laporan Surat</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file"></i>
                                </div>
                                <a href="#" class="small-box-footer">Info lebih lanjut <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Dokumentasi Kegiatan Desa Marengmang</h3>
            </div>
        <div class="box-body">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img src="http://placehold.it/900x500/39CCCC/ffffff&amp;text=Desa"
                            alt="First slide">

                        <div class="carousel-caption">
                            First Slide
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://placehold.it/900x500/3c8dbc/ffffff&amp;text=Marengmang"
                            alt="Second slide">

                        <div class="carousel-caption">
                            Second Slide
                        </div>
                    </div>
                    <div class="item active">
                        <img src="http://placehold.it/900x500/f39c12/ffffff&amp;text=1"
                            alt="Third slide">

                        <div class="carousel-caption">
                            Third Slide
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>
        </div>
</div>
<div class="box box-solid bg-green-gradient">
    <div class="box-header ui-sortable-handle" style="cursor: move;">
        <i class="fa fa-calendar"></i>

        <h3 class="box-title">Calendar</h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
            <!-- button with a dropdown -->
            <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
            </button>
        </div>
        <!-- /. tools -->
    </div>
    <!-- /.box-header -->
    <d class="box-body no-padding">
        <!--The calendar -->
        < id="calendar" style="width: 100%">
            < class="datepicker datepicker-inline">
                <div class="datepicker-days" style="">
                    <table class="table-condensed">
                        <thead>
                            <tr>
                                <th colspan="7" class="datepicker-title" style="display: none;"></th>
                            </tr>
                            <tr>
                                <th class="prev">«</th>
                                <th colspan="5" class="datepicker-switch">June 2020</th>
                                <th class="next">»</th>
                            </tr>
                            <tr>
                                <th class="dow">Su</th>
                                <th class="dow">Mo</th>
                                <th class="dow">Tu</th>
                                <th class="dow">We</th>
                                <th class="dow">Th</th>
                                <th class="dow">Fr</th>
                                <th class="dow">Sa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="old day" data-date="1590883200000">31</td>
                                <td class="day" data-date="1590969600000">1</td>
                                <td class="day" data-date="1591056000000">2</td>
                                <td class="day" data-date="1591142400000">3</td>
                                <td class="day" data-date="1591228800000">4</td>
                                <td class="day" data-date="1591315200000">5</td>
                                <td class="day" data-date="1591401600000">6</td>
                            </tr>
                            <tr>
                                <td class="day" data-date="1591488000000">7</td>
                                <td class="day" data-date="1591574400000">8</td>
                                <td class="day" data-date="1591660800000">9</td>
                                <td class="day" data-date="1591747200000">10</td>
                                <td class="day" data-date="1591833600000">11</td>
                                <td class="day" data-date="1591920000000">12</td>
                                <td class="day" data-date="1592006400000">13</td>
                            </tr>
                            <tr>
                                <td class="day" data-date="1592092800000">14</td>
                                <td class="day" data-date="1592179200000">15</td>
                                <td class="day" data-date="1592265600000">16</td>
                                <td class="day" data-date="1592352000000">17</td>
                                <td class="day" data-date="1592438400000">18</td>
                                <td class="day" data-date="1592524800000">19</td>
                                <td class="day" data-date="1592611200000">20</td>
                            </tr>
                            <tr>
                                <td class="day" data-date="1592697600000">21</td>
                                <td class="day" data-date="1592784000000">22</td>
                                <td class="day" data-date="1592870400000">23</td>
                                <td class="day" data-date="1592956800000">24</td>
                                <td class="day" data-date="1593043200000">25</td>
                                <td class="day" data-date="1593129600000">26</td>
                                <td class="day" data-date="1593216000000">27</td>
                            </tr>
                            <tr>
                                <td class="day" data-date="1593302400000">28</td>
                                <td class="day" data-date="1593388800000">29</td>
                                <td class="day" data-date="1593475200000">30</td>
                                <td class="new day" data-date="1593561600000">1</td>
                                <td class="new day" data-date="1593648000000">2</td>
                                <td class="new day" data-date="1593734400000">3</td>
                                <td class="new day" data-date="1593820800000">4</td>
                            </tr>
                            <tr>
                                <td class="new day" data-date="1593907200000">5</td>
                                <td class="new day" data-date="1593993600000">6</td>
                                <td class="new day" data-date="1594080000000">7</td>
                                <td class="new day" data-date="1594166400000">8</td>
                                <td class="new day" data-date="1594252800000">9</td>
                                <td class="new day" data-date="1594339200000">10</td>
                                <td class="new day" data-date="1594425600000">11</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="7" class="today" style="display: none;">Today</th>
                            </tr>
                            <tr>
                                <th colspan="7" class="clear" style="display: none;">Clear</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="datepicker-months" style="display: none;">
                    <table class="table-condensed">
                        <thead>
                            <tr>
                                <th colspan="7" class="datepicker-title" style="display: none;"></th>
                            </tr>
                            <tr>
                                <th class="prev">«</th>
                                <th colspan="5" class="datepicker-switch">2020</th>
                                <th class="next">»</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span
                                        class="month">Mar</span><span class="month">Apr</span><span
                                        class="month">May</span><span class="month focused">Jun</span><span
                                        class="month">Jul</span><span class="month">Aug</span><span
                                        class="month">Sep</span><span class="month">Oct</span><span
                                        class="month">Nov</span><span class="month">Dec</span></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="7" class="today" style="display: none;">Today</th>
                            </tr>
                            <tr>
                                <th colspan="7" class="clear" style="display: none;">Clear</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="datepicker-years" style="display: none;">
                    <table class="table-condensed">
                        <thead>
                            <tr>
                                <th colspan="7" class="datepicker-title" style="display: none;"></th>
                            </tr>
                            <tr>
                                <th class="prev">«</th>
                                <th colspan="5" class="datepicker-switch">2020-2029</th>
                                <th class="next">»</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7"><span class="year old">2019</span><span
                                        class="year focused">2020</span><span class="year">2021</span><span
                                        class="year">2022</span><span class="year">2023</span><span
                                        class="year">2024</span><span class="year">2025</span><span
                                        class="year">2026</span><span class="year">2027</span><span
                                        class="year">2028</span><span class="year">2029</span><span
                                        class="year new">2030</span></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="7" class="today" style="display: none;">Today</th>
                            </tr>
                            <tr>
                                <th colspan="7" class="clear" style="display: none;">Clear</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="datepicker-decades" style="display: none;">
                    <table class="table-condensed">
                        <thead>
                            <tr>
                                <th colspan="7" class="datepicker-title" style="display: none;"></th>
                            </tr>
                            <tr>
                                <th class="prev">«</th>
                                <th colspan="5" class="datepicker-switch">2000-2090</th>
                                <th class="next">»</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7"><span class="decade old">1990</span><span
                                        class="decade">2000</span><span class="decade">2010</span><span
                                        class="decade focused">2020</span><span class="decade">2030</span><span
                                        class="decade">2040</span><span class="decade">2050</span><span
                                        class="decade">2060</span><span class="decade">2070</span><span
                                        class="decade">2080</span><span class="decade">2090</span><span
                                        class="decade new">2100</span></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="7" class="today" style="display: none;">Today</th>
                            </tr>
                            <tr>
                                <th colspan="7" class="clear" style="display: none;">Clear</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="datepicker-centuries" style="display: none;">
                    <table class="table-condensed">
                        <thead>
                            <tr>
                                <th colspan="7" class="datepicker-title" style="display: none;"></th>
                            </tr>
                            <tr>
                                <th class="prev">«</th>
                                <th colspan="5" class="datepicker-switch">2000-2900</th>
                                <th class="next">»</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7"><span class="century old">1900</span><span
                                        class="century focused">2000</span><span class="century">2100</span><span
                                        class="century">2200</span><span class="century">2300</span><span
                                        class="century">2400</span><span class="century">2500</span><span
                                        class="century">2600</span><span class="century">2700</span><span
                                        class="century">2800</span><span class="century">2900</span><span
                                        class="century new">3000</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="7" class="today" style="display: none;">Today</th>
                            </tr>
                            <tr>
                                <th colspan="7" class="clear" style="display: none;">Clear</th>
                            </tr>
                        </tfoot>
                    </table>
            </div>
        </div>
    </div>
</div>
</section>
</div>
@endsection
