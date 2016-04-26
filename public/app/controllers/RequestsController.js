app.controller('RequestsController', function(requestsFactory,$scope,$http, $routeParams){
 
  $scope.data = [];
  $scope.libraryTemp = {};
  $scope.totalItemsTemp = {};
  $scope.data.projects = [];
  $scope.projectId = 0;
  $scope.currentItem = {};
  // $scope.project = {};

  $scope.totalItems = 0;
  $scope.pageChanged = function(newPage) {
    getResultsPage(newPage);
  };

  getResultsPage(1);
  function getResultsPage(pageNumber) {
      if(! $.isEmptyObject($scope.libraryTemp)){
          requestsFactory.httpRequest('/requests?search='+$scope.searchText+'&page='+pageNumber).then(function(data) {
            $scope.data = data.data;
            $scope.totalItems = data.total;
          });
      }else{
        requestsFactory.httpRequest('/requests?page='+pageNumber).then(function(data) {
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

    $scope.bindProjectPopUp = function (item, index) {
        $scope.currentItem = item;
        $scope.projectId = 0;
        requestsFactory.httpRequest('requests/get_projects','GET').then(function(data) {
            $scope.data.projects = data;
        });
    };

    $scope.bindProject = function () {
        requestsFactory.httpRequest('requests/bind_to_project','POST', {}, {
            'project_id' : $scope.projectId,
            'request_id' : $scope.currentItem.id
        }).then(function(data) {
            $(".modal").modal("hide");
            $scope.data.projects.forEach(function (val, ind) {
                if (val.id == $scope.currentItem.id) {
                    $scope.currentItem.project_id = $scope.projectId;
                }
            });
            $scope.projectId = 0;
            $scope.currentItem = {};
        });
    };

    $scope.goToResponse = function (val) {
        requestsFactory.projectId = val.project_id;
    };

    // $scope.projectId = 0;

    // $scope.setProjectId = function (val) {
        // $scope.project = $scope.data.projects.filter(function (v) {
        //     return v.id == val;
        // })[0];
        // $scope.projectId = val;
    // };

  initRouter();
});