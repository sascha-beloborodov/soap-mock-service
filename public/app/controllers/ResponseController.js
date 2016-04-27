app.controller('ResponseController', function (requestsFactory, $scope, $http, $routeParams) {

    $scope.data = [];
    $scope.subEntities = [];
    $scope.projectId = 0;
    $scope.libraryTemp = {};
    $scope.totalItemsTemp = {};

    $scope.totalItems = 0;
    $scope.entitiList = [];

    $scope.primitiveTypes = ['string', 'decimal', 'int', 'float', 'integer', 'boolean'];

    $scope.currentEntity = {};
    $scope.currentSubEntity = {};
    $scope.currentProperty = '';
    $scope.currentEntity.subEntities = {};
    $scope.inputs= [];

    $scope.entityInSelect = '';


    function doForEdit(response) {
        var entity = $.parseJSON(response.response_value);
        $scope.entityInSelect = response.response_object;
        $scope.currentEntity.subEntities = entity.subEntities;

        for (var i = 0, len = entity.properties.length; i < len; i++) {
            for (var j in entity) {
                if (entity.properties[i].name == j) {
                    entity.properties[i].val = entity[j];
                }
            }
        }

        $scope.currentEntity = entity;

        return 0;
    }

    requestsFactory.httpRequest('/requests/' + $routeParams.id + '/edit').then(function (data) {

        $scope.data = data;

        if ($routeParams.type == 'edit') {
            try {
                doForEdit(data.response);
            }
            catch (e) {
                window.location = '/#/requests';
            }
        }

        $(".chosen-select").chosen({no_results_text: "Oops, nothing found!"});

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

    $scope.openAddTypePopUp = function (ent, prop) {
        if (['string', 'decimal', 'int', 'float', 'integer', 'boolean'].indexOf(prop.type) != -1) {
            alert('It is a primitive type');
            return;
        }

        $('.modal').modal('show');

        if (!requestsFactory.projectId) {
            requestsFactory.projectId = $('#select-project-id').val();
        }

        $scope.currentProperty = prop.type;

            requestsFactory.httpRequest(
            'responses/get_entity?project_id='+requestsFactory.projectId +
            '&entity=' + prop.type, 'GET').then(function (data) {
            // $scope.currentEntity.subEntitiesArray.push(data);
            $scope.currentEntity.subEntities[prop.type] =
                $scope.currentEntity.subEntities[prop.type] || [];
            // $scope.currentEntity.subEntities[prop.type].push(data);
            $scope.currentSubEntity = data;
        });

    };

    $scope.selectEntity = function (ent) {

        if (!Number(requestsFactory.projectId)) {
            requestsFactory.projectId = $('#select-project-id').val();
        }
        
        requestsFactory.httpRequest(
            'responses/get_main_entity?project_id='+requestsFactory.projectId +
            '&entity=' + ent, 'GET').then(function (data) {
            $scope.currentEntity = data;
            $scope.currentEntity.subEntities = {};
            // $scope.currentEntity.subEntitiesArray = [];
        });
    };


    $scope.addToCurrentArray = function (currentProp, subEntity) {
        var obj = {};
        $('#sub-' + subEntity.class_name + ' input').each(function (ind, val) {
            subEntity.properties[ind].val = val.value;
        });

        $scope.currentEntity.subEntities[currentProp].push(subEntity);
        $scope.currentSubEntity = $.extend(true, {}, $scope.currentSubEntity);
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
        sendObject.entity = $scope.currentEntity;

        requestsFactory.httpRequest('requests/add_response', 'POST', {}, sendObject).then(function (data) {
            // TODO success or fail
            alert('Response was created');
        });
    };

    
    $scope.removeSubObject = function (i, currentProperty) {
        $scope.currentEntity.subEntities[currentProperty].splice(i, 1);
    };

    $scope.getValueFromReques = function (id, inputName) {
        var strVal = $('textarea').text();
        var pattern = new RegExp('<ns1:'+inputName+'[^>]*>((.|[\n\r])*)<\/ns1:'+inputName+'>');
        // var pattern = new RegExp('/<ns1:'+inputName+'[^>]*>((.|[\n\r])*)<\/ns1:'+inputName+'>/im');
        // var pattern = /<ns1:order_number[^>]*>((.|[\n\r])*)<\/ns1:order_number>/im
        var array_matches = pattern.exec(strVal);
        $('#'+id).find('input[name=' + inputName + ']').val(array_matches[1]);

    };
    initRouter();
});