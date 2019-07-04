@extends('layouts.app')
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
@include('inc.headbar')
<!-- <div class="content" style="background: #f1f1fb; height:  -webkit-fill-available;position: fixed; width: 100%;"> -->
    <div class="content" style="overflow: auto;">
        <div class="row" style="margin-left: 10%;margin-right: 10%;">
            @include('component.membership')
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /#right-panel -->
@section('content')