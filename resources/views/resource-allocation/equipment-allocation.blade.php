@extends('layout')

@section('title')
{{ get_label('Resource Allocation', 'Resource Allocation') }}
@endsection

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ url('/home') }}">{{ get_label('home', 'Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ get_label('Resource Allocation', 'Resource Allocation') }}
            </li>
        </ol>
    </nav>

    <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
    <a href="{{ route('allEquipmentAlloation.activity') }}" class="text-success font-weight-bold" style="text-decoration: none;">
        View allocated equipment 
    </a>
</div>
        <div class="card-body">
            <div class="row project-task-activity-hierarchy">
                <div class="col-md-4">
                    <div class="project">
                        <div class="project-title">{{ $activity->task->project->title }}</div>
                        <div class="project-dates">
                            <span class="start-date">{{ $activity->task->project->start_date }}</span>
                            <span class="arrow">&#8594;</span>
                            <span class="end-date">{{ $activity->task->project->end_date }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="task">
                        <div class="task-title">{{ $activity->task->title }}</div>
                        <div class="task-dates">
                            <span class="start-date">{{ $activity->task->start_date }}</span>
                            <span class="arrow">&#8594;</span>
                            <span class="end-date">{{ $activity->task->end_date }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="activity">
                        <div class="activity-title">{{ $activity->name }}</div>
                        <div class="activity-dates">
                            <span class="start-date">{{ $activity->start_date }}</span>
                            <span class="arrow">&#8594;</span>
                            <span class="end-date">{{ $activity->end_date }}</span>
                        </div>
                    </div>
                </div>
                <div class="table-responsive text-nowrap">
            @csrf
            <div class="table-responsive text-nowrap">  
                <form action="{{ route('materialcosts.equipmentSelection') }}" method="POST">  
                    @csrf  
                    <input type="hidden" name="selected_subtask_id" id="selected_subtask_id" value="{{ $activity->id}}">
                    <table class="table">  
                        <thead>  
                            <tr>  
                                <th>No</th>
                                <th>Equipment</th>  
                                <th>Unit</th>  
                                <th>Quantity</th>  
                                <th>Rate with VAT</th>  
                                <th>Select</th>  
                            </tr>  
                        </thead>  
                        <tbody>  
                        @foreach($equipmentsInventory as $key => $material)
                            <tr>  
                               <td>{{ $key + 1 }}</td>
                                   <td>{{ $material['item'] }}</td>
                                    <td>{{ $material['unit'] }}</td>
                                    <td>{{ $material['approved_quantity'] }}</td>
                                    <td>{{ $material['rate_with_vat'] }}</td>
                                <td>  
                                    <div class="form-check">  
                                        <input class="form-check-input" type="checkbox" name="selected_materials[]"  
                                        value="{{ json_encode($material) }}">
                                        <label class="form-check-label"></label>  
                                    </div>  
                                </td> 
                            </tr>  
                            @endforeach  
                        </tbody>  
                    </table>  
                    <div class="text-center">  
                        <button type="submit" class="btn btn-primary">Continue</button>  
                    </div>  
                </form>  
            </div>  
    </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

<script>
    // Initialize DataTables
    $(document).ready(function() {
        $('table').DataTable({
            responsive: true,
            paging: true,
            searching: true,
            ordering: true,
            lengthMenu: [5, 10, 25, 50],
            language: {
                search: "Filter records:",
                lengthMenu: "Display _MENU_ records per page"
            },
            // Custom styles for the table
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('<select class="form-select"><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? '^'+val+'$' : '', true, false).draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="'+d+'">'+d+'</option>')
                    });
                });
            }
        });
    });
</script>
@endsection