@extends('layout')

@section('title')
    {{ get_label('tasks', 'Tasks') }} - {{ get_label('list_view', 'List view') }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-2 mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="{{ url('/home') }}">{{ get_label('home', 'Home') }}</a>
                </li>
                @isset($project->id)
                    <li class="breadcrumb-item">
                        <a href="{{ url('/projects') }}">{{ get_label('projects', 'Projects') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/projects/information/'.$project->id) }}">{{ $project->title }}</a>
                    </li>
                @endisset
                <li class="breadcrumb-item active">{{ get_label('tasks', 'Tasks') }}</li>
            </ol>
        </nav>

        <div>
            @php
                $url = isset($project->id) ? '/projects/tasks/draggable/' . $project->id : '/tasks/draggable';
                $additionalParams = request()->has('project') ? '/projects/tasks/draggable/' . request()->project : '';
                $finalUrl = url($additionalParams ?: $url);
            @endphp

            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_activity_modal" class="btn btn-sm btn-primary" title="{{ get_label('create_Activity', 'Create Activity') }}">
                <i class="bx bx-plus"></i> {{ get_label('create_Activity', 'Create Activity') }}
            </a>
        </div>
    </div>

    <div class="row mb-4">
        @foreach ($statusData as $status => $dtatusdata)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <div class="avatar flex-shrink-0 mb-2">
                            <i class="menu-icon tf-icons bx bx-briefcase-alt-2 bx-md" style="color: {{ $dtatusdata['color'] }};"></i>
                        </div>
                        <span class="fw-semibold d-block mb-1">{{ get_label($status, ucfirst(str_replace('_', ' ', $status))) }}</span>
                        <h3 class="card-title mb-2">{{ $dtatusdata['count'] }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <x-activities-card :activities="$activities" :id="$id" :users="$users" :clients="$clients" :projects="$projects" />
    <!-- Modal for Creating Activity -->
    <div class="modal fade" id="create_activity_modal" tabindex="-1" aria-labelledby="createActivityModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createActivityModalLabel">{{ get_label('create_activity', 'Create Activity') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createActivityForm" method="POST" action="{{ route('activities.store') }}" onsubmit="resetModalInputs()">
                    @csrf
                    <input type="hidden" class="form-control" id="taskId" name="task_id" value="{{ $id }}">

                    <div class="mb-3">
                        <label for="activityName" class="form-label">{{ get_label('activity_name', 'Activity Name') }}</label>
                        <input type="text" class="form-control" id="activityName" name="name" required>
                    </div>
                  
                    <div class="mb-3">
                        <label for="activityPriority" class="form-label">{{ get_label('activity_priority', 'Activity Priority') }}</label>
                        <select class="form-select" id="activityPriority" name="priority" required>
                            <option value="" disabled selected>{{ get_label('select_priority', 'Select Priority') }}</option>
                            @foreach($priority as $pri)
                                <option value="{{ $pri->id }}">{{ $pri->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="status"><?= get_label('status', 'Status') ?> <span class="asterisk">*</span></label>
                        <div class="input-group">

                            <select class="form-select" name="status_id">
                                @foreach($statuses as $status)
                                <option value="{{$status->id}}" class="badge bg-label-{{$status->color}}" {{ old('status') == $status->id ? "selected" : "" }}>{{$status->title}} ({{$status->color}})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_status_modal"><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_status', 'Create status') ?>"><i class="bx bx-plus"></i></button></a>
                            <a href="/status/manage" target="_blank"><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="<?= get_label('manage_statuses', 'Manage statuses') ?>"><i class="bx bx-list-ul"></i></button></a>
                        </div>
                        @error('status_id')
                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="user_id"><?= get_label('select_members', 'Select members') ?></label>
                        <div class="input-group">
                            <select id="" class="form-control js-example-basic-multiple" name="user_id[]" multiple="multiple" data-placeholder="<?= get_label('type_to_search', 'Type to search') ?>">
                                @foreach($users as $user)
                                <?php $selected = $user->id == getAuthenticatedUser()->id ? "selected" : "" ?>
                                <option value="{{$user->id}}" {{ (collect(old('user_id'))->contains($user->id)) ? 'selected':'' }} <?= $selected ?>>{{$user->first_name}} {{$user->last_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                   
                    <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="start_date"><?= get_label('starts_at', 'Starts at') ?> <span class="asterisk">*</span></label>
                        <input type="date" id="update_start_date" name="start_date" class="form-control" value="">
                        @error('start_date')
                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                 <div class="mb-3 col-md-6">
                        <label class="form-label" for="ends_at"><?= get_label('starts_at', 'Starts at') ?> <span class="asterisk">*</span></label>
                        <input type="date" id="update_start_date" name="ends_at" class="form-control" value="">
                        @error('ends_at')
                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                </div>
                    <button type="submit" class="btn btn-primary">{{ get_label('submit', 'Submit') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .chart-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .chart-container {
        flex: 1 1 100%;
        margin-bottom: 20px;
        height: 400px;
        max-width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (min-width: 768px) {
        .chart-container {
            flex-basis: 50%;
            max-width: 50%;
        }
    }
</style>