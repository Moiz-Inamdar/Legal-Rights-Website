$(function () {
   'use strict'

   //Data table example
   var table = $('#exportexample').DataTable({
      lengthChange: false,
      buttons: ['copy', 'excel', 'pdf', 'colvis']
   });
   table.buttons().container()
      .appendTo('#exportexample_wrapper .col-md-6:eq(0)');

   $('#example1').DataTable({
      paging: true,
      "ordering": true,
      info: false,
      dom: 'lBfrtip', // Include 'l' to display page length dropdown
      "aoColumnDefs": [{
         'bSortable': false,
         'aTargets': [0, -1]
      }],
      // "responsive": true,
      "bProcessing": true,
      "iDisplayLength": 10,
      aLengthMenu: [
         [5, 10, 25, 50, 100, 99999999999999],
         [5, 10, 25, 50, 100, "ALL"]
      ],
      "sPaginationType": "full_numbers",
      language: {
         "sSearchPlaceholder": "Search..",
         "lengthMenu": "_MENU_",
         "search": "_INPUT_",
         "sInfo": 'Showing _START_ to _END_ of _TOTAL_ entries',
         "sZeroRecords": "No matching records found"
      },
      buttons: [{
         extend: 'excelHtml5',
         exportOptions: {
             columns: [0, 1, 2, 3, 4],
             orientation: 'A4',
         }
     },
     {
         extend: 'csvHtml5',
         exportOptions: {
             columns: [0, 1, 2, 3, 4]
         }
     },
     {
         extend: 'pdfHtml5',
         exportOptions: {
             columns: [0, 1, 2, 3, 4],
         },
         orientation: 'A4',
     },
 ]
   });
   
   $('#example2').DataTable({
      responsive: true,
      language: {
         searchPlaceholder: 'Search...',
         sSearch: '',
         lengthMenu: '_MENU_ items/page',
      }
   });
   $('#example3').DataTable({
      responsive: {
         details: {
            display: $.fn.dataTable.Responsive.display.modal({
               header: function (row) {
                  var data = row.data();
                  return 'Details for ' + data[0] + ' ' + data[1];
               }
            }),
            renderer: $.fn.dataTable.Responsive.renderer.tableAll({
               tableClass: 'table'
            })
         }
      }
   });

   /*Input Datatable*/
   var table = $('#example-input').DataTable({
      'columnDefs': [
         {
            'targets': [1, 2, 3, 4, 5],
            'render': function (data, type, row, meta) {
               if (type === 'display') {
                  var api = new $.fn.dataTable.Api(meta.settings);

                  var $el = $('input, select, textarea', api.cell({ row: meta.row, column: meta.col }).node());

                  var $html = $(data).wrap('<div/>').parent();

                  if ($el.prop('tagName') === 'INPUT') {
                     $('input', $html).attr('value', $el.val());
                     if ($el.prop('checked')) {
                        $('input', $html).attr('checked', 'checked');
                     }
                  } else if ($el.prop('tagName') === 'TEXTAREA') {
                     $('textarea', $html).html($el.val());

                  } else if ($el.prop('tagName') === 'SELECT') {
                     $('option:selected', $html).removeAttr('selected');
                     $('option', $html).filter(function () {
                        return ($(this).attr('value') === $el.val());
                     }).attr('selected', 'selected');
                  }

                  data = $html.html();
               }

               return data;
            }
         }
      ],
      'responsive': true
   });
   $('#example-input tbody').on('keyup change', '.child input, .child select, .child textarea', function (e) {
      var $el = $(this);
      var rowIdx = $el.closest('ul').data('dtr-index');
      var colIdx = $el.closest('li').data('dtr-index');
      var cell = table.cell({ row: rowIdx, column: colIdx }).node();
      $('input, select, textarea', cell).val($el.val());
      if ($el.is(':checked')) {
         $('input', cell).prop('checked', true);
      } else {
         $('input', cell).removeProp('checked');
      }
   });

   $('table').on('draw.dt', function () {
      $('.select2-no-search').select2({
         minimumResultsForSearch: Infinity,
         placeholder: 'Choose one'
      });
   });

});