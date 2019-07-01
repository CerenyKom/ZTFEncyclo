<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{setting('site.title')}}</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
           <div class="container">
               <div class="row">
                   <div class="col-xs-5 col-md-4">
                       <a href="{{route('SKSG')}}" class="thumbnail">
                           SKSG <img src="/storage/pages/SKSG.png" alt="...">
                       </a>
                   </div>
                   <div class="col-xs-5 col-md-4">
                       <a href="#" class="thumbnail">
                           Our Books<img src="/storage/pages/ourbooks.jpg" alt="...">
                       </a>
                   </div>
               </div>
           </div>

    </div>
</div>

</body>
</html>
