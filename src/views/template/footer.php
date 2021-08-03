</div>
<footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">Sisgafi</a>.</strong>
    Todos os direitos reservados
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
    </div>
</footer>

<aside class="control-sidebar control-sidebar-dark">
</aside>

</div>

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery-validation/jquery.validate.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<!-- InputMask -->
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src='assets/packages/core/main.js'></script>
<script src='assets/packages/interaction/main.js'></script>
<script src='assets/packages/daygrid/main.js'></script>
<script src='assets/packages/timegrid/main.js'></script>
<script src='assets/packages/list/main.js'></script>

<script>
    $(function () {

        // Tradução de Tabelas

        var traducao = {
            lengthMenu: "Exibindo _MENU_ registros por página",
            zeroRecords: "Não há dados para exibir",
            info: "Exibindo página _PAGE_ de _PAGES_",
            infoEmpty: "Não foram encontrados registros",
            infoFiltered: "(Filtrado de _MAX_ registros totais)",
            sSearch: "Pesquisar",
            oPaginate: {
                sPrevious: "Anterior",
                sNext: "Próxima"
            }
        };

        // Tabelas

        $("#revenue").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "buttons": ["csv", "excel", "pdf"],
            "language": traducao
        }).buttons().container().appendTo('#revenue_wrapper .col-md-6:eq(0)');

        $("#expense").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "buttons": ["csv", "excel", "pdf"],
            "language": traducao
        }).buttons().container().appendTo('#expense_wrapper .col-md-6:eq(0)');

        $('#extract').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": ["csv", "excel", "pdf"],
            "language": traducao
        }).buttons().container().appendTo('#extract_wrapper .col-md-6:eq(0)');

        $('#department').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": traducao
        });

        $('#role').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": traducao
        });

        $('#contribution').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": ["csv", "excel", "pdf"],
            "language": traducao
        }).buttons().container().appendTo('#contribution_wrapper .col-md-6:eq(0)');

        $('#events').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": traducao
        });

        $("#revenue-report").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "language": traducao,
            "buttons": ["csv", "excel", "pdf"]
        }).buttons().container().appendTo('#revenue-report_wrapper .col-md-6:eq(0)');

        $("#expense-report").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "language": traducao,
            "buttons": ["csv", "excel", "pdf"]
        }).buttons().container().appendTo('#expense-report_wrapper .col-md-6:eq(0)');

        $("#members").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "language": traducao,
            "buttons": ["csv", "excel", "pdf"]
        }).buttons().container().appendTo('#members_wrapper .col-md-6:eq(0)');

        $("#tithe").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "language": traducao,
            "buttons": ["csv", "excel", "pdf"]
        }).buttons().container().appendTo('#tithe_wrapper .col-md-6:eq(0)');

        //Mascara de dinheiro

        $("#money").inputmask('currency', {
            "autoUnmask": true,
            radixPoint: ".",
            groupSeparator: ",",
            allowMinus: false,
            prefix: 'R$ ',
            digits: 2,
            digitsOptional: false,
            rightAlign: true,
            unmaskAsNumber: true
        });

        // Apagar Receita

        $('.delreceita').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            $('#delete_id').val(data[0]);
        });

        // Editar Receita

        $('.upreceita').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            $('#update_id').val(data[0]);
            $('#categoria').val(data[1]);
            $('#origem').val(data[2]);
            $('#valor').val(data[5]);
            $('#forma_pagamento').val(data[6]);
            $('#status').val(data[7]);

            nome = data[3];

            $("#id_membro").val($('option:contains("' + nome + '")').val())
        });

        // Apagar Despesa

        $('.deldespesa').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            $('#delete_id').val(data[0]);
        });

        // Editar Despesa

        $('.updespesa').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            $('#update_id').val(data[0]);
            $('#categoria').val(data[1]);
            $('#entrada').val(data[2]);
            $('#descricao').val(data[3]);
            $('#tipo').val(data[4]);
            $('#centro_custo').val(data[5]);
            $('#valor').val(data[6]);
            $('#status').val(data[7]);
        });

        // Editar Cargo
        $('.upcargo').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#nome_cargo').val(data[1]);
            $('#descricao').val(data[2]);
        
        });

        // Excluir Cargo

        $('.delcargo').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            $('#delete_id').val(data[0]);
        });


        // Editar Departamento

        $('.updepto').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            $('#update_id').val(data[0]);
            $('#nome_departamento').val(data[1]);
            $('#descricao').val(data[2]);

            nome = data[3];

            $("#id_lider").val($('option:contains("' + nome + '")').val())
        });

        // Apagar Departamento

        $('.deldepto').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            $('#delete_id').val(data[0]);
        });

        // Apagar Evento

        $('.delagenda').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            $('#delete_id').val(data[0]);
        });

        // Atualizar Evento

        $('.upagenda').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            $('#update_id').val(data[0]);
            $('#title').val(data[1]);
            $('#start').val(data[2]);
            $('#end').val(data[3]);

        });

        // Apagar Membro

        $('.delmembro').on('click', function () {
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);
        });

        // Gráfico de Rosca - Total de Receitas por Categoria

        var categoriaReceita = [
            <?php
                $totalByCategory = Receita::getTotalByCategory();

                foreach ($totalByCategory as $category) {
                    echo "'" . $category['categoria'] . "',";
                }
            ?>
        ];

        var totalReceita = [
            <?php
            $totalByCategory = Receita::getTotalByCategory();

            foreach ($totalByCategory as $category) {
                echo "'" . $category['total'] . "',";
            }
            ?>
        ];

        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: categoriaReceita,
            datasets: [
                {
                    data: totalReceita,
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                },
            ],
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }

        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        });
        
        
        // Gráfico de Colunas - Total de Despesas por Categoria

        var categoriaDespesa = [
            <?php
            $totalByCategory = Despesa::getTotalByCategory();

            foreach ($totalByCategory as $category) {
                echo "'" . $category['categoria'] . "',";
            }
            ?>
        ];

        var totalDespesa = [
            <?php
            $totalByCategory = Despesa::getTotalByCategory();

            foreach ($totalByCategory as $category) {
                echo "'" . $category['total'] . "',";
            }
            ?>
        ];

        var data = {
            labels  : categoriaDespesa,
            datasets: [
                {
                    label               : 'Total R$',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : totalDespesa
                },
            ],
        }

        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, data)
        var temp0 = data.datasets[0]
        barChartData.datasets[0] = temp0

        var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        min: 0,
                        stepSize: 50,
                    }
                }]
            },
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions,
        })

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale:'pt-br',
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
            businessHours: true,
            editable: true,

            events: 'events.php'
        });

        calendar.render();
    });

</script>
<style>
    #calendar {
        max-width: 800px;
        margin: 0 auto;
    }
</style>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendarioHome');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale:'pt-br',
            plugins: [ 'list' ],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'listDay,listWeek,dayGridMonth'
            },

            views: {
                listDay: { buttonText: 'list day' },
                listWeek: { buttonText: 'list week' }
            },

            defaultView: 'listWeek',
            navLinks: true,
            editable: true,
            eventLimit: true,
            events:'events.php'
        });
        calendar.render();
    });

</script>

<style>
    #calendarioHome {
        max-width: 400px;
        margin: 0 auto;
    }
</style>
</body>
</html>
