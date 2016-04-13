var App = function () {};



App.prototype.setWsdlName = function (event, jquery, formId) {
    var file = event.target.value;
    if (!file || file == '') {
        alert('File did not select');
    }

    var fileNameArr = file.split(/\/|\\/) || file.split('/');
    try {
        var fileName = fileNameArr[fileNameArr.length - 1];
        if (fileName.indexOf("wsdl") == -1) {
            alert('File should be wsdl')
        }
        else {
            jquery('.' + formId).val(fileName);
        }
    }
    catch (e) {
        alert("Error ");
    }


};

var appInstance = new App();

$(function() {

    if (!appInstance) {
        appInstance = new App();
    }

    $(document).on('change', '#wsdl_file', function (e) {
        appInstance.setWsdlName(e, $, "wsdl_name");
    });

});