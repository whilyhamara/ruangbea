var table;

$(document).ready(function() {
  ajaxcsrf();

  table = $("#hasil").DataTable({
    initComplete: function() {
      var api = this.api();
      $("#hasil_filter input")
        .off(".DT")
        .on("keyup.DT", function(e) {
          api.search(this.value).draw();
        });
    },
    dom:
      "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-5'i><'col-sm-7'p>>",
    buttons: [
      {
        extend: "copy",
        exportOptions: { columns: [0, 1, 2, 3, 4, 5] }
      },
      {
        extend: "print",
        exportOptions: { columns: [0, 1, 2, 3, 4, 5] }
      },
      {
        extend: "excel",
        exportOptions: { columns: [0, 1, 2, 3, 4, 5] }
      },
      {
        extend: "pdf",
        exportOptions: { columns: [0, 1, 2, 3, 4, 5] }
      }
    ],
    oLanguage: {
      sProcessing: "loading..."
    },
    processing: true,
    serverSide: true,
    ajax: {
      url: base_url + "hasilujian/data",
      type: "POST"
    },
    columns: [
      {
        data: "id_ujian",
        orderable: false,
        searchable: false
      },
      { data: "nama_ujian",
        orderable: false,
        searchable: false
      },
      { data: "nama_matkul", 
        orderable: false,
        searchable: false
      },
      { data: "jumlah_soal", 
        orderable: false,
        searchable: false
      },
      { data: "waktu", 
        orderable: false,
        searchable: false
      },
      { data: "tgl_mulai",
        orderable: true,
        searchable: false
      }
    ],
    columnDefs: [
      {
        // targets: 7,
        targets: 6,
        data: "id_ujian",
        render: function(data, type, row, meta) {
          return `
                    <div class="text-center">
                        <a class="btn btn-xs bg-maroon" href="${base_url}hasilujian/detail/${data}" >
                            <i class="fa fa-search"></i> Lihat Hasil
                        </a>
                    </div>
                    `;
        }
      }
    ],
    order: [[5, "asc"]],
    rowId: function(a) {
      return a;
    },
    rowCallback: function(row, data, iDisplayIndex) {
      var info = this.fnPagingInfo();
      var page = info.iPage;
      var length = info.iLength;
      var index = page * length + (iDisplayIndex + 1);
      $("td:eq(0)", row).html(index);
    }
  });
});

table
  .buttons()
  .container()
  .appendTo("#hasil_wrapper .col-md-6:eq(0)");
