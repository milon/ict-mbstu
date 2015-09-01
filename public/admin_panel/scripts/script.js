(function(){
    //summernote init
    HtmlEditor.init();

    //delete form init
    laravel.initialize();

    //DataTables
    jQuery.fn.dataTable && $('table.dataTable').dataTable({
        "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
        "pageLength": 20,
        "order": [[0, 'desc']],
        "stateSave": true,
        "pagingType": "simple_numbers"
    });

    //datepicker
    jQuery.fn.dataTable && $('.date-picker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });

    //select2
    $('.select2').select2();

})();