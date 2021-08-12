
@extends('Layout.app')
@section ('content')
<!-- App Capsule -->
<div id="appCapsule" class="app-calendar">
<div class="calendar-wrapper">
<div class="calendar-sidebar">
<div class="calendar-sidebar-header">
<i data-feather="search"></i>
<div class="search-form">
<input type="search" class="form-control" placeholder="Search calendar">
</div>
<a href="" class="btn btn-sm btn-primary btn-icon calendar-add">
<div data-toggle="tooltip" title="Create New Event"><i data-feather="plus"></i></div>
</a><!-- calendar-add -->
</div><!-- calendar-sidebar-header -->
<div id="calendarSidebarBody" class="calendar-sidebar-body">
<div class="calendar-inline">
<div id="calendarInline"></div>
</div><!-- calendar-inline -->
</div><!-- calendar-sidebar-body -->
</div><!-- calendar-sidebar -->
<div class="calendar-content">
<div id="calendar" class="calendar-content-body"></div>
</div><!-- calendar-content -->
</div><!-- calendar-wrapper -->
</div>
@endsection
<!-- * App Capsule -->