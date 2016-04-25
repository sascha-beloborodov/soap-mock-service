app.controller('ResponseController', function(requestsFactory,$scope,$http, $routeParams){
 
  $scope.data = [];
  $scope.libraryTemp = {};
  $scope.totalItemsTemp = {};

  $scope.totalItems = 0;
  $scope.entitiList = [];

    $scope.primitiveTypes = ['string', 'decimal', 'int', 'float', 'integer'];


  requestsFactory.httpRequest('/requests/' + $routeParams.id + '/edit').then(function(data) {
    $scope.data = data;
    $scope.totalItems = data.total;
  });

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
    requestsFactory.httpRequest('items','POST',{},$scope.form).then(function(data) {
      $scope.data.push(data);
      $(".modal").modal("hide");
    });
  }

  $scope.edit = function(id){
    requestsFactory.httpRequest('requests/'+id+'/edit').then(function(data) {
    	console.log(data);
        if (!data) {
            throw new Error("Not data");
        }
      	$scope.form = data;
    });
  };

  $scope.saveEdit = function(){
    requestsFactory.httpRequest('requests/'+$scope.form.id,'PUT',{},$scope.form).then(function(data) {
      	$(".modal").modal("hide");
        $scope.data = apiModifyTable($scope.data,data.id,data);
    });
  };

  $scope.remove = function(item,index){
    var result = confirm("Are you sure delete this item?");
   	if (result) {
      requestsFactory.httpRequest('requests/'+item.id,'DELETE').then(function(data) {
          $scope.data.splice(index,1);
      });
    }
  };

    $scope.sendEntity = function (entity) {
        var sendObject = {
            class_name: entity.class_name,
            properties: {}
        };
        $('#' + entity.class_name + ' input').each(function (ind, val) {
            var x = 0;
            sendObject.properties[val.name] = val.value
        });
        sendObject.id = $routeParams.id;

        requestsFactory.httpRequest('requests/add_response','POST', {}, sendObject).then(function(data) {
            var x = 0
        });
    };

  initRouter();
});