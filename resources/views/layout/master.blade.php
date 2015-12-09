<html>
    <head>
        <title>APP</title>
        
         <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">   
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>    
	<script src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>   
	
	
       
    
    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('assets/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ URL::asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    
    <script>
    
    	var app = angular.module('MyApp', ['ui.bootstrap']);  
    	
    	app.controller('MyController', function($scope, Config) {
		  $('#side-menu').metisMenu();
		});                                      	
    	
    	
    </script>
    
    @yield('script')
    
        
    </head>
    <body ng-app="MyApp" ng-controller="MyController">
    
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">                
                <a class="navbar-brand" href="javascript:;">ADDRESS</a>
            </div>                        
            
        </nav>
    
    @yield('content')
            
            
            </div>
    <!-- /#wrapper -->
       
        <!-- jQuery -->

        
    

    
    
    
    
        
    </body>
</html>