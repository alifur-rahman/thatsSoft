@extends('app')

@section('content')
    <section class="bg-light al_privecy_page" id="dataProtectionImprint">
        <div class="container">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="al_privecy_page_wrapper">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="al_sujjection_wrapper">
                            <div class="card p-3 pt-0 pb-0 flex-1">
                                <div class="card-body p-2">
                                    <h2 class="text-center mb-1">{{ __('messages.data_protection') }}</h2>
                                    @foreach ($CoPolicyData as $index => $info)
                                        @php
                                            $lines = explode("\n", $info->data_protection_msg);
                                        @endphp
                                        @foreach ($lines as $line)
                                            <p>{!! $line !!}</p>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <div class="card mt-xl-3 p-3 pb-0 ">
                                <h2 class="text-center mb-1">{{ __('messages.imprint') }}</h2>
                                <address>
                                    {!! optional($CoPolicyData[0])->imprint_msg !!}
                                </address>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="al_sujjection_wrapper">
                            <div class="card w-100 h-100 position-relative">
                                <div class="card-body">
                                    <h3 class="text-center mb-2">{{ __('messages.agency_zip_code_title') }}</h3>
                                    @if (count($thatWeAgency) > 0)
                                        <p class="m-0 ps-4 text-primary">ZIP</p>
                                        <div class="al_tableyOverflow">

                                            <div class="row p-2">
                                                @foreach ($thatWeAgency as $index => $value)
                                                    <div class="mb-1 d-flex justify-content-between">
                                                        <div class="col-2 border  text-center"> <b> {{ $value->zip }} </b>
                                                        </div>
                                                        <div class="col-10 p-0 border">
                                                            <ul class="list-unstyled mb-0 ps-2 pe-2 pt-1 pb-1"
                                                                style="font-size: 15px; line-height: 20px;">

                                                                <li class=""> Compnay :
                                                                    {{ $value->company_name }}
                                                                </li>
                                                                <li class=""> Street : {{ $value->street }}
                                                                </li>
                                                                <li class=""> City : {{ $value->city }}
                                                                </li>
                                                                <li class=" "> Tel : {{ $value->telephone }}
                                                                </li>
                                                                <li class=" "> Email : {{ $value->email }}
                                                                </li>
                                                                <li class=""> WWW : {{ $value->site_url }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @else
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp; &nbsp;
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp; &nbsp;
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th>4</th>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th>5</th>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th>6</th>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th>7</th>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th>8</th>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th>9</th>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th>0</th>
                                                    <td> </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    @endif

                                    <div class="text-center al_card_footer">
                                        <div class="mt-2">
                                            <button type="submit"
                                                class="btn btn-primary">{{ __('messages.load_info') }}</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-xl-4 col-md-6">
                        <div class="al_sujjection_wrapper h-100">
                            <div class="card w-100 h-100 position-relative">
                                <div class="card-body">
                                    <h3 class="text-center mb-2">{{ __('messages.recommend_to_friend') }}</h3>

                                    <form action="{{ route('submit-recommendation') }}" method="POST">
                                        @csrf
                                        <div class="row justify-content-center">
                                            <!-- Other form fields -->
                                            <div class="col-md-12">
                                                <div class="mb-2">
                                                    <label for="yourName"
                                                        class="form-label">{{ __('messages.your_name') }}</label>
                                                    <input type="text" class="form-control" id="yourName"
                                                        name="yourName" placeholder="{{ __('messages.your_name') }}">
                                                    @error('yourName')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="mb-2">
                                                    <label for="personEmail1"
                                                        class="form-label">{{ __('messages.person_email') }}
                                                        #1</label>
                                                    <input type="email" class="form-control" id="personEmail1"
                                                        name="personEmail1"
                                                        placeholder="{{ __('messages.person_email') }} #1">
                                                    @error('personEmail1')
                                                        <span class="text-danger">At least enter one friend's email </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="mb-2">
                                                    <label for="personEmail2"
                                                        class="form-label">{{ __('messages.person_email') }}
                                                        #2</label>
                                                    <input type="email" class="form-control" id="personEmail2"
                                                        name="personEmail2"
                                                        placeholder="{{ __('messages.person_email') }} #2">
                                                    @error('personEmail2')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="mb-2">
                                                    <label for="personEmail3"
                                                        class="form-label">{{ __('messages.person_email') }}
                                                        #3</label>
                                                    <input type="email" class="form-control" id="personEmail3"
                                                        name="personEmail3"
                                                        placeholder="{{ __('messages.person_email') }} #3">
                                                    @error('personEmail3')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="mb-2">
                                                    <label for="personEmail3"
                                                        class="form-label">{{ __('messages.person_email') }}
                                                        #4</label>
                                                    <input type="email" class="form-control" id="personEmail4"
                                                        name="personEmail4"
                                                        placeholder="{{ __('messages.person_email') }} #4">
                                                    @error('personEmail4')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="mb-2">
                                                    <label for="personEmail3"
                                                        class="form-label">{{ __('messages.person_email') }}
                                                        #5</label>
                                                    <input type="email" class="form-control" id="personEmail5"
                                                        name="personEmail5"
                                                        placeholder="{{ __('messages.person_email') }} #5">
                                                    @error('personEmail5')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-md-12 text-center mt-3">
                                                <div class="">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ __('messages.send') }}</button>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Add more email input fields if needed -->


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>



    <div class="modal" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="showTitleModla" class="modal-title">{{ __('messages.full_inoformation') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="shoWMoreInfo"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('messages.close') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .al_tableyOverflow {
            display: block;
            height: 410px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .al_privecy_page {
            height: 100%;
            position: initial;
        }

        .al_privecy_page_wrapper {
            padding-bottom: 40px;
        }

        .al_textarea {
            height: 100%;
            min-height: 260px !important;
        }

        .al_card_footer {
            position: absolute;
            bottom: 40px;
            left: 0;
            width: 100%;
        }

        .al_view_info {
            cursor: pointer;
            transition: .3s;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
            width: 100%;
            cursor: pointer;
        }

        .al_view_info:hover {
            color: #6f42c1;
        }

        .al_sujjection_wrapper {
            height: 100%;
        }

        @media (max-width: 1200px) {
            .al_sujjection_wrapper {
                height: inherit;
                display: flex;
                justify-content: space-between;
                gap: 20px;
                padding: 10px 0;
            }

            .al_card_footer {
                position: inherit;
            }

            .al_textarea {
                height: 100%;
                min-height: 100px !important;
            }
        }

        @media (max-width: 768px) {
            .al_sujjection_wrapper {
                height: inherit;
                display: flex;
                justify-content: space-between;
                gap: 20px;
                padding: 10px 0;
                flex-direction: column;
            }

        }

        .text-danger {
            font-size: 12px;
            display: block;
        }

        address p {
            margin: 0;
        }
    </style>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            const myModalEl = $('#exampleModal');
            $(document).on('click', '.al_view_info', function() {
                $('#shoWMoreInfo').html($(this).find('.al_lognText').html());
                $('#showTitleModla').text($(this).find('.info_title').text());
                myModalEl.modal('show');
                return false;
            });
            myModalEl.on('hidden.bs.modal', function(event) {
                $('#showTitleModla').text('');
                $('#shoWMoreInfo').html('');
            });
        });
    </script>
@endsection
