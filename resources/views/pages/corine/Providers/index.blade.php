@extends('layouts.master-backoffice')

@section('content')
    <div class="container-fluid">

        <div class="row mt-1">
            {{-- <div class="col-xl-3">
                <div class="card custom-card">
                    <div class="card-body p-0">
                        <div class="p-3 d-grid border-bottom border-block-end-dashed">
                            <button class="btn btn-primary d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#addtask">
                                <i class="ri-add-circle-line fs-16 align-middle me-1"></i>Create New Task
                            </button>
                            <div class="modal fade" id="addtask" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="mail-ComposeLabel">Create Task</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body px-4">
                                            <div class="row gy-2">
                                                <div class="col-xl-12">
                                                    <label for="task-name" class="form-label">Task Name</label>
                                                    <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label class="form-label">Assigned To</label>
                                                    <div class="choices" data-type="select-multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" name="choices-multiple-remove-button" id="choices-multiple-remove-button" multiple="" hidden="" tabindex="-1" data-choice="active"><option value="Choice 1" data-custom-properties="[object Object]">Angelina May</option></select><div class="choices__list choices__list--multiple"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="[object Object]" aria-selected="true" data-deletable="">Angelina May<button type="button" class="choices__button" aria-label="Remove item: 'Choice 1'" data-button="">Remove item</button></div></div><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="null"></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" aria-multiselectable="true" role="listbox"><div id="choices--choices-multiple-remove-button-item-choice-2" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="2" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Hercules Jhon</div><div id="choices--choices-multiple-remove-button-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">Kiara advain</div><div id="choices--choices-multiple-remove-button-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="">Mayor Kim</div></div></div></div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">Assigned Date</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                            <input type="text" class="form-control flatpickr-input" id="addignedDate" placeholder="Choose date and time" readonly="readonly">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">Target Date</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                            <input type="text" class="form-control flatpickr-input" id="targetDate" placeholder="Choose date and time" readonly="readonly">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <label class="form-label">Priority</label>
                                                    <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" data-trigger="" name="choices-single-default" id="choices-single-default" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Select</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Select</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="Select" placeholder="Search"><div class="choices__list" role="listbox"><div id="choices--choices-single-default-item-choice-5" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="5" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Select</div><div id="choices--choices-single-default-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Critical" data-select-text="Press to select" data-choice-selectable="">Critical</div><div id="choices--choices-single-default-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="High" data-select-text="Press to select" data-choice-selectable="">High</div><div id="choices--choices-single-default-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Low" data-select-text="Press to select" data-choice-selectable="">Low</div><div id="choices--choices-single-default-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Medium" data-select-text="Press to select" data-choice-selectable="">Medium</div></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border-bottom border-block-end-dashed">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0" placeholder="Search Task Here" aria-describedby="button-addon2">
                                <button class="btn btn-light" type="button" id="button-addon2"><i class="ri-search-line text-muted"></i></button>
                            </div>
                        </div>
                        <div class="p-3 task-navigation border-bottom border-block-end-dashed">
                            <ul class="list-unstyled task-main-nav mb-0">
                                <li class="px-0 pt-0">
                                    <span class="fs-11 text-muted op-7 fw-semibold">TASKS</span>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-task-line align-middle fs-14"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                All Tasks
                                            </span>
                                            <span class="badge bg-success-transparent rounded-pill">167</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-star-line align-middle fs-14"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Starred
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-delete-bin-5-line align-middle fs-14"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Trash
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-0 pt-2">
                                    <span class="fs-11 text-muted op-7 fw-semibold">CATEGORIES</span>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-primary"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Personal
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-secondary"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Work
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-warning"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Health &amp; Fitness
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-success"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Daily Goals
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li> 
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 lh-1">
                                                <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-danger"></i>
                                            </span>
                                            <span class="flex-fill text-nowrap">
                                                Financial Management
                                            </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-3 text-center">
                            <img src="../assets/images/media/media-66.png" alt="">
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body p-0">
                                <div class="d-flex p-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-semibold mb-0">Mes Daos </h6>
                                    </div>
                                    <div>
                                        {{-- <ul class="nav nav-tabs nav-tabs-header mb-0 d-sm-flex d-block" role="tablist">
                                            <li class="nav-item m-1" role="presentation">
                                                <a class="nav-link active" href={{ route('register',$dao) }}
                                                    aria-selected="true">S'inscrire</a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row"
                        style="
                 display: grid;
                 grid-template-columns: repeat(auto-fit, 18rem);
                 align-items: start;
                 justify-content: center;
             ">
                        @forelse($mesDaos as $mesDao)
                            {{-- @if ($dateString < date('d-M-y', strtotime($mesDao->end_at))) --}}
                            <div class="tab-content task-tabs-container">
                                <div class="tab-pane show active p-0" id="all-tasks" role="tabpanel">
                                    <div class="row" id="tasks-container">

                                        <div class=" task-card">
                                            <div class="card custom-card task-pending-card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between flex-wrap gap-2">
                                                        <div>
                                                            <p class="fw-semibold mb-3 d-flex align-items-center"><a
                                                                    href="javascript:void(0);"><i
                                                                        class="ri-star-s-fill fs-16 op-5 me-1 text-muted"></i></a>{{ $mesDao->daos->name }}
                                                            </p>
                                                            <p class="mb-3">{{ __('Date de debut') }} : <span
                                                                    class="fs-12 mb-1 text-muted">{{ date('d-M-y', strtotime($mesDao->daos->start_at)) }}</span>

                                                            </p>

                                                            <p class="mb-3">{{ __('Date de fin') }} : <span
                                                                    class="fs-12 mb-1 text-muted">{{ date('d-M-y', strtotime($mesDao->daos->end_at)) }}</span>
                                                            </p>
                                                            <p class="mb-3">{{ __('Categorie') }} : <span
                                                                    class="fs-12 mb-1 text-muted">{{ $mesDao->daos->category }}</span>
                                                            </p>
                                                            <p class="mb-3">{{ __('Prix') }} : <span
                                                                    class="fs-12 mb-1 text-muted">{{ $mesDao->daos->prices }}
                                                                    fcfa</span>
                                                            </p>

                                                        </div>

                                                    </div>
                                                    <div class="mb-2">

                                                        <a class="nav-link active btn btn-primary white"
                                                            href={{ route('dao.details', $mesDao->id) }}
                                                            aria-selected="true">Voir
                                                            plus</a>

                                                    </div>
                                                    <div>

                                                        <a class="nav-link  btn btn-success white"
                                                            href={{ route('soumission.dao', $mesDao->id) }}
                                                            aria-selected="true">Soumissioner</a>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            {{-- @endif --}}
                        @empty
                            <div>
                                <h5>
                                    Aucune DAO disponible!!!!
                                </h5>
                            </div>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
@push('js')
    <script src="../assets/libs/libs/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/js/date&time_pickers.js"></script>
@endpush
