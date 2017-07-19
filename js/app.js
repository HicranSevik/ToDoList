
var app=angular.module("App", []);

app.controller("todos",function($scope){
  $scope.todos=[
    {"isim":"Yapılacak1","yapildimi":false},
    {"isim":"Yapılacak2","yapildimi":false},
    {"isim":"Yapılacak3","yapildimi":false},
    {"isim":"Yapılacak4","yapildimi":false}
  ];

    $scope.newTodo=function(){
        $scope.todos.push({
          "isim":$scope.todo,
          "yapildimi":false,
        });
          $scope.todo="";
    }
    $scope.sil=function(){
      $scope.todos=$scope.todos.filter(function(x){
        return !x.yapildimi;
      })
    }



  });
