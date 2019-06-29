@extends('layouts.app')

@section('content')

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
    @include('inc.headbar')
    <!-- <div class="content" style="background: #f1f1fb; height:  -webkit-fill-available;position: fixed; width: 100%;"> -->
        <div class="content" style="overflow: auto;">
            <!-- To Do and Live Chat -->
            <div class="row" style="margin-left: 10%;margin-right: 10%;">
                <div style="width:100%; color: rgb(112, 157, 253);">
                    <table>
                        <tr>
                            <td>
                                <i class="fa fa-group"
                                   style="background: rgb(230, 230, 255);padding: 5px; border-radius: 5px;"></i>
                            </td>
                            <td style="font-weight: 600;">&nbsp;&nbsp;ACCOUNTS</td>
                        </tr>
                    </table>
                </div>
                @include('component.account')
                @include('component.account')
                @include('component.account')
                @include('component.newaccount')
                <div style="width:100%; color: rgb(173, 112, 253);">
                    <table>
                        <tr>
                            <td><i class="fa fa-arrow-up"
                                   style="background: rgb(255, 230, 254);padding: 5px; border-radius: 5px;"></i></td>
                            <td style="font-weight: 600;">&nbsp;&nbsp;GRPWTH TOPS</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 20px;">
                    <div class="row" id="grpwth_1"
                         style="box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);padding:5px;border-radius: 5px;cursor: pointer;">
                        <div class="col-md-4 col-sm-12 col-xs-12" style="background: azure;padding: 0px;">
                            <img src="{{asset('assets/images/grp1.jpg')}}" style="height: 150px;width: 100%;">
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12"
                             style="background: rgb(255, 255, 255); padding: 15px; ">
                            <table>
                                <tr>
                                    <td style="color: red; font-weight: 600;font-size: 14px;">STORIES</td>
                                    <td style="color: rgb(200, 200, 200); font-weight: 600;font-size: 14px;"> •</td>
                                    <td style="color: rgb(200, 200, 200); font-weight: 600;font-size: 14px;">2 MIN
                                        READ
                                    </td>
                                </tr>
                            </table>
                            <h4 class="grpwth_1" style="color: rgb(115, 115, 116);max-lines: 3; ">How to 10x Your Engagement With
                                Instagram Stories</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 20px;">
                    <div class="row"
                         style="box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);padding:5px;border-radius: 5px;cursor: pointer;">
                        <div class="col-md-4 col-sm-12 col-xs-12" style="background: azure;padding: 0px;">
                            <img src="{{asset('assets/images/grp2.jpg')}}" style="height: 150px;width: 100%;">
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12"
                             style="background: rgb(255, 255, 255); padding: 15px; ">
                            <table>
                                <tr>
                                    <td style="color: red; font-weight: 600;font-size: 14px;">GROWTH</td>
                                    <td style="color: rgb(200, 200, 200); font-weight: 600;font-size: 14px;"> •</td>
                                    <td style="color: rgb(200, 200, 200); font-weight: 600;font-size: 14px;">4 MIN
                                        READ
                                    </td>
                                </tr>
                            </table>
                            <h4 class="grpwth_2" style="color: rgb(115, 115, 116);max-lines: 3">12 Ways to Get More Instagram
                                    Followers With Automation</h4>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /To Do and Live Chat -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /#right-panel -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5cfdd7b4267b2e57853193ed/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection

{{--@section('sidebar')--}}{{--It can bring content of home.blade.php--}}
{{--@parent--}}{{--It can use content of home.blade.php--}}
{{--<p>come here</p>--}}
{{--@endsection--}}