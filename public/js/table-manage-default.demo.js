/*   
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 1.8.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v1.8/admin/
*/

var handleDataTableDefault = function() {
    "use strict";

    if ($('#data-table').length !== 0) {
        var table = $('#data-table').DataTable({
            columnDefs: [ 
                { orderable: false, targets: ['no-sort'] }
            ],
            language: {
                emptyTable: "No Data"
            }
        });
        // new $.fn.dataTable.FixedHeader(table);
    }

    if ($('#data-table-fixedheader').length !== 0) {
        var table_fixedheader = $('#data-table-fixedheader').DataTable({
            searching: false,
            paging: false,
        });
        new $.fn.dataTable.FixedHeader(table_fixedheader);
    }
};

var TableManageDefault = function () {
    "use strict";
    return {
        //main function
        init: function () {
            handleDataTableDefault();
        }
    };
}();