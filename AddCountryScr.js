var mod=angular.module("myApp",[]);
        mod.controller("insertCtrl",function($scope,$http){
                 console.log("in controller");
            /*$http.post('http://localhost/Practice/addCountry.php',this.myform);*/
              $scope.myform1={
                  name:"aditya",
                  country:"india"
              }
                    
                $scope.submitData = function(myform1){
                  
                    console.log("inside function");
                    console.log(this.myform1);
                    
                   var request = $http.post('http://localhost/Practice/addCountry.php',this.myform1);
                    
                  //  $.param(myform);
                 /*  var data="{name:'myform.name',country:'myform.country'}"
                    console.log(data); 
                    var request = $http ({
                    method:"POST",
                    url:"http://localhost/Practice/addCountry.php",
                    data: $scope.data
                   headers: {'Content-Type': 'application/json'}
                   */
                    
                    //headers={'Content-Type': 'application/json'};
                     
                    
            /*        $http.post("http://localhost/Practice/addCountry.php",data);*/
                    
                
        
                   request.success(function(response){
										//$scope.authorDetails = data;
										console.log(myform1);
										//alert(data);
										})
						
										request.error(function(data) {
											console.log(data);
											console.log("AJAX REQUEST FAILED.");
										});
                
                
            };
            
        });
        