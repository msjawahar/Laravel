@extends('layout.master')

@section('script')
	
	<script type="text/javascript">
	    
	    app.controller('MyController', function ($scope) {
	       $scope.ButtonClick = function () {
	            alert('ss');
	            alert('22');
	        }
	    });
	</script>
	

@endsection

@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Register</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control">   
                                            
                                                                                
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>                                            
                                            <input class="form-control">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>      
                                            <input class="form-control">
                                        </div>                                        
                                        
                                        <input  type="button" ng-click="ButtonClick()" value="Test" />
                                        
                                        
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            
        </div>
        <!-- /#page-wrapper -->

@endsection





