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
                '<li><div class="col-md-3"><label for="">Property type:</label>' +
                '<select class="form-control type-of-entity-property" id=""><!options!></select></div>' +
                '<div class="col-md-4"><label for="">Property name:</label>' +
                '<input type="text" class="form-control new-entity-property-name" value=""></div>' +
                '<div class="col-md-4"><label for="">Property value:</label>' +
                '<input type="text" class="form-control new-entity-property-value" value=""></div>' +
                '<div class="col-md-1"><span class="js-remove-property" style="cursor: pointer;">X</span></div></li>',
    templateTypesOptions: null,
    templateButton: '<button class="btn btn-success js-add-property">Add</button>',
    item: null,
    editing: false,
    data: null,
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
        if (this.editing) {
            createEntityButton.hide();
        } else {
            createEntityButton.show();
        }
    },
    getResponse: function (cb) {
        var that = this;
        $.ajax({
            url: "/wsdl/getresponse",
            method: "POST",
            data: that.data,
            dataType: "xml",
            success: function (data, status, xhr) {
                cb(data);
            },
            error: function (xhr, status, error) {
                console.log(error);
                var jsonResponseText = $.parseJSON(xhr.responseText);
                if (jsonResponseText.error.message) {
                    alert(jsonResponseText.error.message);
                }

            }
        });
    },
    prepareData: function (parentEl) {
        var parentEl = $(parentEl);
        var properties = undefined;
        try {
            properties = $.parseJSON(parentEl.find('.'+ENTITY_AREA).text());
            for (var prop in properties) {
                if (typeof properties[prop] == 'object') {
                    properties[prop] = 'some property';
                }
                var x = 0;
            }
        }
        catch (e) {
            //nothing
        }

        var that = this;

        this.data = {
            entityName: null,
            soapMethod: null,
            properties: []

        };

        if (typeof properties === 'object') {
            this.data.entityName = parentEl.find('.entity').text();
            this.data.soapMethod = parentEl.find('.soap-method').text();
            this.data.properties = properties;
        }
        else {
            this.data.entityName = parentEl.find('.new-entity-name').val();
            this.data.soapMethod = parentEl.find('.soap-method').text();
            parentEl.find('ul.properties-list li').each(function (index, el) {
                that.data.properties.push({
                    type: $(el).find('.type-of-entity-property').val(),
                    name: $(el).find('.new-entity-property-name').val(),
                    value: $(el).find('.new-entity-property-value').val()
                });
            });
        }
        this.data._token = $('#csrf-token').val();
        this.data.project_id = $('#project_id').val();
        return this;
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

    $(document).on('click', '.js-get-response', function (e) {
        var parentEl = $(e.target).parents('.item')[0];
        controller.prepareData(parentEl).getResponse(function (data) {

            if (data.error) {
                alert(data.error);
                return;
            }

            var xmlcontent = $('#xml-response').html(data.childNodes[0].innerHTML);
            var content = $('#xml-response').text();

            // var parser = new DOMParser();
            // var doc = parser.parseFromString(xmlcontent, "application/xml");

            $(parentEl)
                .find('.result-response pre code')
                .text(content.toString());
        });
    });
    
});