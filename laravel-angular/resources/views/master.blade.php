<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>Gallery App Angular Laravel SPA</title>
  </head>
  <body>
    <div class="container">
      <div ng-view>

      </div>
    </div>

    <script type="text/javascript" src="{{asset ('bower_components/angular/angular.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('bower_components/angular-route/angular-route.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('bower_components/angular-cookies/angular-cookies.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('../../js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/controllers.js')}}"></script>
  </body>
</html>
