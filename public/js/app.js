var App = function () {};
var DATA_TYPES = [
    'integer',
    'decimal',
    'string',
    'array',
    'object'
];
var ITEM_CLASS = 'item';
var ENTITY_AREA = 'entity-area';
var PROPERTY_CLASS = 'properties-list';
var CREATE_ENTITY_BUTTON_CLASS = 'js-create-entity';


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

App.prototype.createEntityForm = function () {

};

var appInstance = new App();



var controller = {
    templateEntityName:
        '<span class="js-close-entity-area label label-danger">close</span>' +
        '<label for="">Entity name:</label><input type="text" class="form-control new-entity-name" value="">',
    templateEntityProperty :
                '<li><div class="col-md-4"><label for="">Property type:</label>' +
                '<select class="form-control type-of-entity-property" id=""><!options!></select></div>' +
                '<div class="col-md-7"><label for="">Property name:</label>' +
                '<input type="text" class="form-control new-entity-property" value=""></div>' +
                '<div class="col-md-1"><span class="js-remove-property" style="cursor: pointer;">X</span></div></li>',
    templateTypesOptions: null,
    templateButton: '<button class="btn btn-success js-add-property">Add</button>',
    item: null,
    editing: false,
    getCreateEntityForm: function (e, item) {
        this.item = item;
        this.editing = true;
        var options = this.createTypesOptions();
        var content =
            this.templateEntityName +
            '<ul class="'+PROPERTY_CLASS+'">' + this.templateEntityProperty.replace('<!options!>', options) + '</ul>' +
            this.templateButton;
        this.render(content);
        return this;
    },
    createTypesOptions: function () {
        if (!this.templateTypesOptions) {
            this.templateTypesOptions = '';
            for (var i = 0, len = DATA_TYPES.length; i < len; i++) {
                this.templateTypesOptions += '<option value="'+DATA_TYPES[i]+'">'+DATA_TYPES[i]+'</option>';
            }
        }
        return this.templateTypesOptions;

    },
    render: function (string) {
        if (!$(this.item).hasClass('item')) return;
        $(this.item).find('.'+ENTITY_AREA).html(string);
    },
    addProperty: function () {
        $('.'+PROPERTY_CLASS).append(this.templateEntityProperty.replace('<!options!>', this.createTypesOptions()));
    },
    deleteProperty: function (el) {
        $(el).remove();
    },
    closeEntityArea: function (el) {
        this.editing = false;
        $(el).html('');
        return this;
    },
    changeStateButton: function () {
        var createEntityButton = $('.'+CREATE_ENTITY_BUTTON_CLASS);
        this.editing ?
            createEntityButton.hide() :
            createEntityButton.show()
    },
    getResponse: function (cb) {
        $.ajax({
            url: "script.php",
            method: "POST",
            data: { id : 3 },
            dataType: "json",
            success: function () {

            },

        });
    }
};

$(function() {

    if (!appInstance) {
        appInstance = new App();
    }

    $(document).on('change', '#wsdl_file', function (e) {
        appInstance.setWsdlName(e, $, "wsdl_name");
    });

    $(document).on('click', '.'+CREATE_ENTITY_BUTTON_CLASS, function (e) {
        var parentEl = $(e.target).parents('.item')[0];
        controller.getCreateEntityForm(e, parentEl).changeStateButton();
    });

    $(document).on('click', '.js-add-property', function (e) {
        var parentEl = $(e.target).parents('.item')[0];
        controller.addProperty(e, parentEl);
    });

    $(document).on('click', '.js-remove-property', function (e) {
        var parentEl = $(e.target).parents('li')[0];
        controller.deleteProperty(parentEl);
    });

    $(document).on('click', '.js-close-entity-area', function (e) {
        var parentEl = $(e.target).parents('.' + ENTITY_AREA)[0];
        controller.closeEntityArea(parentEl).changeStateButton();
    });
});