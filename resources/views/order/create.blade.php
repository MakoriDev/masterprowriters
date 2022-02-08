@extends('layouts.app')

@section('title', 'Order Now')

@section('single-page-header')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Order Now</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('site-root') }}">Home</a></li>
                        <li class="breadcrumb-item active">Order Now</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2>Place Order Now</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab
                            maxime nam ut numquam molestiae quaerat incidunt?</p>
                        <div class="border"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show d-none" id="successMessage">
                        <p></p>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show d-none" id="errorMessage">
                        <p></p>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>


                <div class="contact-form col-md-8">
                    <div class="card">
                        <div class="card-header bg-custom">
                            Order Details
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('order.store') }}" role="form" id="order-form">
                                @csrf
                                <input type="hidden" name="amount" id="amount">
                                <div class="form-group">
                                    <label for="email">Email: <span class="required">*</span></label>
                                    <input type="email" placeholder="Your Email" class="form-control" name="email"
                                        id="email">
                                    <span class="invalid-feedback" id="emailError">
                                        <strong></strong>
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="paper_type">Paper Type: <span class="required">*</span></label>
                                    <select name="paper_type" id="paper_type" class="form-control">
                                    </select>
                                    <span class="invalid-feedback" id="paperTypeError">
                                        <strong></strong>
                                    </span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="spacing">Spacing: <span class="required">*</span></label>
                                            <select name="spacing" id="spacing" class="form-control">
                                                <option value="single">Single</option>
                                                <option value="double" selected>Double</option>
                                            </select>
                                            <span class="invalid-feedback" id="spacingError">
                                                <strong></strong>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="style">Style: <span class="required">*</span></label>
                                            <select name="style" id="style" class="form-control">
                                                <option value="mla">MLA</option>
                                                <option value="chicago">Chicago</option>
                                                <option value="apa" selected>APA</option>
                                                <option value="havard">Havard</option>
                                                <option value="vancouver">Vancouver</option>
                                            </select>
                                            <span class="invalid-feedback" id="styleError">
                                                <strong></strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pages">Pages: <span class="required">*</span></label>
                                            <select name="pages" id="pages" class="form-control">
                                            </select>
                                            <span class="invalid-feedback" id="pagesError">
                                                <strong></strong>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="level">Select Level: <span class="required">*</span></label>
                                            <select name="level" id="level" class="form-control">
                                                <option value="high school">High School</option>
                                                <option value="college" selected>College</option>
                                                <option value="masters">Masters</option>
                                                <option value="phd">PhD</option>
                                            </select>
                                            <span class="invalid-feedback" id="levelError">
                                                <strong></strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="deadline">Choose Deadline: <span class="required">*</span></label>
                                    <select name="deadline" id="deadline" class="form-control">
                                        <option value="12 hours">12 hours</option>
                                        <option value="24 hours">1 day</option>
                                        <option value="48 hours" selected>2 days</option>
                                        <option value="72 hours">3 days</option>
                                    </select>
                                    <span class="invalid-feedback" id="deadlineError">
                                        <strong></strong>
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="files">Additional information: <span class="required">*</span></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="files[]" id="orderFiles"
                                            multiple>
                                        <label class="custom-file-label" for="files">Choose file</label>
                                        <span class="invalid-feedback" id="filteredFilesError">
                                            <strong></strong>
                                        </span>
                                    </div>

                                </div>

                                <div id="files-container">

                                </div>

                                <button type="submit" id="contact-submit" class="btn btn-transparent">Place Order</button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="contact-details col-md-4 ">
                    <div class="card">
                        <div class="card-header bg-custom">
                            Order Summary
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Level:</strong><span id="levelSummary"
                                        class="ml-2"></span></li>
                                <li class="list-group-item"><strong>Deadline:</strong><span id="deadlineSummary"
                                        class="ml-2"></span></li>
                                <li class="list-group-item"><strong>Paper Type:</strong><span id="paperTypeSummary"
                                        class="ml-2"></span></li>
                                <li class="list-group-item"><strong>No. of Pages:</strong><span id="numberOfPagesSummary"
                                        class="ml-2"></span></li>
                                <li class="list-group-item h5"><strong class="text-danger">Total Cost:<span
                                            id="totalCostSummary" class="ml-2"></span></strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $(document).ready(() => {
            const priceUrl = '{{ route('get-price') }}'
            const paperTypeUrl = '{{ route('get-paper-type') }}'

            // Populate paperType and pages drop down

            populatePaperType(paperTypeUrl)
            populatePages()

            // Get initial order price
            getOrderPrice(priceUrl)


            updateFieldsUsingSessionValues()

            getOrderPrice(priceUrl)

            $('#spacing').on('change', function() {
                const spacing = $(this).val()
                const selectedPage = parseInt($('#pages').val())
                populatePages(spacing, selectedPage)
                getOrderPrice(priceUrl)
            })

            $('#pages').on('change', function() {
                getOrderPrice(priceUrl)
            })

            $('#level').on('change', function() {
                getOrderPrice(priceUrl)
            })

            $('#deadline').on('change', function() {
                getOrderPrice(priceUrl)
            })

            $('#paper_type').on('change', function() {
                const paperType = $(this).val()
                $("#paperTypeSummary").text(paperType);
            })


            const orderFiles = []
            const filesContainer = $('#files-container')

            $('#orderFiles').change(function() {
                const files = this.files
                addFile(files, orderFiles, filesContainer)
            })

            $(document).on('click', 'i#remove-file', function(e) {
                const fileName = e.target.previousElementSibling.children[0].innerText
                removeFile(fileName, orderFiles)
                $(this).parent().parent().remove()
                console.log(orderFiles)
            })

            $('#order-form').on('submit', function(e) {
                e.preventDefault()

                $('button[type="submit"]').html(
                    `Processing order...<i class="fa fa-spinner fa-spin ml-2"></i>`);
                $('button[type="submit"]').prop('disabled', true);

                let orderForm = $(this);
                let orderFormData = new FormData($(this)[0]);

                // console.log(Array.from(orderFormData))

                for (let i = 0; i < orderFiles.length; i++) {
                    orderFormData.append('filteredFiles[]', orderFiles[i])
                }
                orderFormData.delete('files[]');

                $.ajax({
                    url: orderForm.attr('action'),
                    type: orderForm.attr('method'),
                    data: orderFormData,
                    processData: false,
                    contentType: false,
                    async: true,
                    dataType: "json",
                    success(response) {
                        $('button[type="submit"]').html('Place Order');
                        $('button[type="submit"]').prop('disabled', false);

                        clearAllInputErrors([{
                                name: 'emailError',
                                type: 'input'
                            },
                            {
                                name: 'paperTypeError',
                                type: 'select'
                            },
                            {
                                name: 'spacingError',
                                type: 'select'
                            },
                            {
                                name: 'styleError',
                                type: 'select'
                            },
                            {
                                name: 'levelError',
                                type: 'select'
                            },
                            {
                                name: 'pagesError',
                                type: 'select'
                            },
                            {
                                name: 'deadlineError',
                                type: 'select'
                            },
                            {
                                name: 'filteredFilesError',
                                type: 'input'
                            }
                        ])
                        console.log(response)
                        // let url = `${response.redirectUrl}?number=${response.number}`;
                        // location.reload();
                        // window.location.href = url;



                    },
                    error(response) {
                        $('button[type="submit"]').html('Place Order');
                        $('button[type="submit"]').prop('disabled', false);
                        $('#successMessage').addClass('d-none');
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage p').text(
                            'Please make sure that all required fields are filled.')


                        if (response.responseJSON.errors.email) {
                            addInputError({
                                name: 'emailError',
                                message: response.responseJSON.errors.email,
                                type: 'input'
                            })
                        } else {
                            clearInputError({
                                name: 'emailError',
                                type: 'input'
                            })
                        }

                        if (response.responseJSON.errors.paper_type) {
                            addInputError({
                                name: 'paperTypeError',
                                message: response.responseJSON.errors.paper_type,
                                type: 'select'
                            })
                        } else {
                            clearInputError({
                                name: 'paperTypeError',
                                type: 'select'
                            })
                        }


                        if (response.responseJSON.errors.spacing) {
                            addInputError({
                                name: 'spacingError',
                                message: response.responseJSON.errors.spacing,
                                type: 'select'
                            })
                        } else {
                            clearInputError({
                                name: 'spacingError',
                                type: 'select'
                            })
                        }


                        if (response.responseJSON.errors.style) {
                            addInputError({
                                name: 'styleError',
                                message: response.responseJSON.errors.style,
                                type: 'select'
                            })
                        } else {
                            clearInputError({
                                name: 'styleError',
                                type: 'select'
                            })
                        }


                        if (response.responseJSON.errors.level) {
                            addInputError({
                                name: 'levelError',
                                message: response.responseJSON.errors.level,
                                type: 'select'
                            })
                        } else {
                            clearInputError({
                                name: 'levelError',
                                type: 'select'
                            })
                        }


                        if (response.responseJSON.errors.pages) {
                            addInputError({
                                name: 'pagesError',
                                message: response.responseJSON.errors.pages,
                                type: 'select'
                            })
                        } else {
                            clearInputError({
                                name: 'pagesError',
                                type: 'select'
                            })
                        }



                        if (response.responseJSON.errors.deadline) {
                            addInputError({
                                name: 'deadlineError',
                                message: response.responseJSON.errors.deadline,
                                type: 'select'
                            })
                        } else {
                            clearInputError({
                                name: 'deadlineError',
                                type: 'select'
                            })
                        }

                        if (response.responseJSON.errors.filteredFiles) {
                            addInputError({
                                name: 'filteredFilesError',
                                message: response.responseJSON.errors.filteredFiles,
                                type: 'input'
                            })
                        } else {
                            clearInputError({
                                name: 'filteredFilesError',
                                type: 'input'
                            })
                        }

                    }
                })



            })
        })

        function updateFieldsUsingSessionValues(){
            @if(Session::has('paperType'))
                $('select[name="paper_type"]').val("{{ session('paperType') }}")
            @endif

            @if(Session::has('spacing'))
                $('select[name="spacing"]').val("{{ session('spacing') }}")
            @endif


            @if(Session::has('pages'))
                const spacing = $('select[name="spacing"]').val()
                const pages = parseInt("{{ session('pages') }}")

                populatePages(spacing, pages)
            @endif


             @if(Session::has('level'))
                $('select[name="level"]').val("{{ session('level') }}")
            @endif

             @if(Session::has('deadline'))
                $('select[name="deadline"]').val("{{ session('deadline') }}")
            @endif
        }


        function addFile(files, fileArrayName, filesContainer) {
            for (let i = 0; i < files.length; i++) {
                fileArrayName.push(files[i])
            }
            filesContainer.empty();
            fileArrayName.forEach((item, index, array) => {
                const fileItemTemplate =
                    `<div class="bg-success mb-1 text-white p-2 rounded">
                    <div class="d-flex justify-content-between">
                        <p class="text-white"><span>${item.name}</span> - ${(item.size / 1000).toFixed(2)} KB</p>
                        <i class="fas fa-trash-alt my-auto mr-4" id="remove-file" data-toggle="tooltip" data-placement="top" title="Click to remove file"></i>
                    </div>
                </div>`
                filesContainer.append(fileItemTemplate)
            });
        }


        function removeFile(fileName, fileArrayName) {
            fileArrayName.forEach((item, index) => {
                if (item.name === fileName.trim()) {
                    fileArrayName.splice(index, 1);
                }
            });
        }

        function clearAllInputErrors(inputs) {
            inputs.forEach(input => {
                $(`#${input.name} strong`).text('');
                $(`#${input.name}`).siblings(`${input.type}`).removeClass('is-invalid');
                $(`#${input.name}`).siblings(`${input.type}`).addClass('is-valid');
            })
        }

        function clearInputError(input) {
            $(`#${input.name} strong`).text('');
            $(`#${input.name}`).siblings(`${input.type}`).removeClass('is-invalid');
            $(`#${input.name}`).siblings(`${input.type}`).addClass('is-valid');
        }

        function addInputError(input) {
            $(`#${input.name} strong`).text(input.message);
            $(`#${input.name}`).siblings(`${input.type}`).addClass('is-invalid');
        }


    </script>
@endsection
