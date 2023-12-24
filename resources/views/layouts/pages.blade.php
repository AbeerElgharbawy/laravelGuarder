<!DOCTYPE html>
<html>
@include('includes.head')
<body class="sub_page">
<div class="hero_area">
    @include('includes.hero')
    <header class="header_section">
    @include('includes.headerTop')
    @include('includes.headerBtm')
    </header>
  </div>
@yield('content')
@include('includes.footer')
@include('includes.footerJs')  
</body>

</html>

