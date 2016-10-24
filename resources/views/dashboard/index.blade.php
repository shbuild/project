@extends('default')

@section('headtitle') 
    Dashboard
@endsection

@section('content')
<style>
.tabsdemoDynamicHeight md-content {
  background-color: transparent !important; }
  .tabsdemoDynamicHeight md-content md-tabs {
    background: #f6f6f6;
    border: 1px solid #e1e1e1; }
    .tabsdemoDynamicHeight md-content md-tabs md-tabs-wrapper {
      background: white; }
  .tabsdemoDynamicHeight md-content h1:first-child {
    margin-top: 0; }
</style>
<!-- <div class="container"> -->
<div ng-cloak="" class="tabsdemoDynamicHeight" ng-app="MyApp">
  <md-content>
    <md-tabs md-dynamic-height="" md-border-bottom="" md-stretch-tabs="always">
      
      @include('dashboard.pages.home')
      @include('dashboard.pages.sales')
      @include('dashboard.pages.tracking')
      @include('dashboard.pages.scheduling')
      @include('dashboard.pages.vehicle_monitoring')
      
    </md-tabs>
  </md-content>
</div>


 <!-- end main container -->

 <script src="{{ asset('/js/angular/controllers/project.js') }}"></script>
@endsection