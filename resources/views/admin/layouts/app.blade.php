<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body class="hold-transition skin-purple layout-fixed">
<div class="wrapper">

    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

    @section('main-content')
    
        @show
    
    @include('admin.layouts.footer')
    
</body>
</html>