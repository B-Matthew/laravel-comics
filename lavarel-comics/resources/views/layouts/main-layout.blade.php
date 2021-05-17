<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- MEDIA QUERY -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    {{-- FONT GOOGLE --}}
    <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap');</style>
    <!-- Font AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
  </body>
</html>
