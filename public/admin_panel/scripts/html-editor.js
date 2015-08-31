var HtmlEditor = function () {    
    var handleSummernote = function () {
        $.each($(document).find('.html-editor'), function(index, element) {
            $(element).summernote({            
                height: 300,
                onblur: function(event) {
                    $(element).val($(this).code());
                }
            }); 
        });                     
        //API:
        //var sHTML = $('#summernote_1').code(); // get code        
        //$('#summernote_1').destroy(); // destroy                           
    }
    
    return {
        //main function to initiate the module
        init: function () {            
            handleSummernote();            
        }
    };
}();