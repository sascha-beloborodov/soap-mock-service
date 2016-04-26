app.controller('AdminController', function($scope,$http){
 
  $scope.pools = [];
   
});

app.controller('ItemController', function(dataFactory,$scope,$http, $routeParams){
 
  $scope.data = [];
  $scope.libraryTemp = {};
  $scope.totalItemsTemp = {};

  $scope.totalItems = 0;
  $scope.pageChanged = function(newPage) {
    getResultsPage(newPage);
  };

  getResultsPage(1);
  function getResultsPage(pageNumber) {
      if(! $.isEmptyObject($scope.libraryTemp)){
          dataFactory.httpRequest('/items?search='+$scope.searchText+'&page='+pageNumber).then(function(data) {
            $scope.data = data.data;
            $scope.totalItems = data.total;
          });
      }else{
        dataFactory.httpRequest('/items?page='+pageNumber).then(function(data) {
          $scope.data = data.data;
          $scope.totalItems = data.total;
        });
      }
  }

    function initRouter() {
        if ($routeParams.type != undefined) {
            if ($routeParams.id != undefined) {
                var method = $routeParams.type;
                for (var scopeMethod in $scope) {
                    if (scopeMethod == method) {
                        $scope.edit($routeParams.id);
                        // $scope.scopeMethod.call($scope, $routeParams.id);
                    }
                }
            }
        }
    }

  $scope.searchDB = function(){
      if($scope.searchText.length >= 3){
          if($.isEmptyObject($scope.libraryTemp)){
              $scope.libraryTemp = $scope.data;
              $scope.totalItemsTemp = $scope.totalItems;
              $scope.data = {};
          }
          getResultsPage(1);
      }else{
          if(! $.isEmptyObject($scope.libraryTemp)){
              $scope.data = $scope.libraryTemp ;
              $scope.totalItems = $scope.totalItemsTemp;
              $scope.libraryTemp = {};
          }
      }
  }

  $scope.saveAdd = function(){
    dataFactory.httpRequest('items','POST',{},$scope.form).then(function(data) {
      $scope.data.push(data);
      $(".modal").modal("hide");
    });
  }

  $scope.edit = function(id){
    dataFactory.httpRequest('items/'+id+'/edit').then(function(data) {
    	console.log(data);
        if (!data) {
            throw new Error("Not data");
        }
      	$scope.form = data;
    });
  };

  $scope.saveEdit = function(){
    dataFactory.httpRequest('items/'+$scope.form.id,'PUT',{},$scope.form).then(function(data) {
      	$(".modal").modal("hide");
        $scope.data = apiModifyTable($scope.data,data.id,data);
    });
  };

  $scope.remove = function(item,index){
    var result = confirm("Are you sure delete this item?");
   	if (result) {
      dataFactory.httpRequest('items/'+item.id,'DELETE').then(function(data) {
          $scope.data.splice(index,1);
      });
    }
  };

  initRouter();
});