@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/sign_me/sat_prep.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/sign_me/sat_prep.meta_title') }}" />
    <meta name="description" content="{{ __('pages/sign_me/sat_prep.meta_description') }}" />
@endsection

@section('content')
    <section class="py-16 bg-sign-me-banner bg-cover bg-center">
        <div class="main-container w-full mx-auto md:max-w-[1440px]">
            <div class="flex flex-col justify-between pt-10 pb-6">
                <h2 class="font-newprimary text-3xl md:text-4xl font-bold text-white">
                    WHAT’S NEXT?
                </h2>
                <p class="mt-4 w-full font-newprimary text-lg text-white md:max-w-lg">
                    <span class="block font-bold mb-3">Prepare, Achieve, Flourish Together with EduALL!</span>
                    Let’s find out how to maximize your academic performance with our Standardized Test Prep Programs FREE Diagnostic Test. Our expert and professional tutors will help you through them all!
                </p>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="main-container w-full mx-auto md:max-w-[1440px]">
            <div class="grid grid-cols-1 gap-x-6 md:grid-cols-7">
                <div class="flex flex-col w-full md:col-span-3">
                    <div class="mb-6 flex flex-col gap-x-10">
                        <h4 class="font-newprimary font-bold text-2xl text-newprimary">
                            What you will earn in the free diagnostic test:
                        </h4>
                        <ul class="mt-4 font-newprimary text-lg text-black">
                            <li class="flex">
                                <i class="fa-solid fa-check text-newprimary mt-1 mr-2"></i>
                                <span>
                                    Big picture of what you will face in your SAT and how the SAT could help you for your dream universities’ application process
                                </span>
                            </li>
                            <li class="flex">
                                <i class="fa-solid fa-check text-newprimary mt-1 mr-2"></i>
                                <span>
                                    Personalized assessment of strengths and areas of improvement on your profile
                                </span>
                            </li>
                            <li class="flex justify-start">
                                <i class="fa-solid fa-check text-newprimary mt-1 mr-2"></i>
                                <span class="w-full">
                                    Your needs and how EduALL can help you professionally
                                </span>
                            </li>
                            <li class="flex">
                                <i class="fa-solid fa-check text-newprimary mt-1 mr-2"></i>
                                <span>
                                    Recommendation and timeline on the next action to take for your application
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-x-10">
                        <h4 class="mb-6 font-newprimary font-bold text-2xl text-newprimary">
                            Your current profile will be assessed based on:
                        </h4>
                        <img data-original="{{ asset('assets/img/sign-me/four-pillars.webp') }}" alt="four pillars">
                    </div>
                </div>
                <div class="md:col-span-4">
                    {{-- Emmbed Form --}}
                    <div class="w-full">
                        <style type="text/css">
                            @import url("https://assets.mlcdn.com/fonts.css?version=1679399");
                        </style>
                        <style type="text/css">
                            /* LOADER */
                            .ml-form-embedSubmitLoad {
                                display: inline-block;
                                width: 20px;
                                height: 20px;
                            }

                            .g-recaptcha {
                                transform: scale(1);
                                -webkit-transform: scale(1);
                                transform-origin: 0 0;
                                -webkit-transform-origin: 0 0;
                                height: ;
                            }

                            .sr-only {
                                position: absolute;
                                width: 1px;
                                height: 1px;
                                padding: 0;
                                margin: -1px;
                                overflow: hidden;
                                clip: rect(0, 0, 0, 0);
                                border: 0;
                            }

                            .ml-form-embedSubmitLoad:after {
                                content: " ";
                                display: block;
                                width: 11px;
                                height: 11px;
                                margin: 1px;
                                border-radius: 50%;
                                border: 4px solid #fff;
                                border-color: #ffffff #ffffff #ffffff transparent;
                                animation: ml-form-embedSubmitLoad 1.2s linear infinite;
                            }

                            @keyframes ml-form-embedSubmitLoad {
                                0% {
                                    transform: rotate(0deg);
                                }

                                100% {
                                    transform: rotate(360deg);
                                }
                            }

                            #mlb2-2547743.ml-form-embedContainer {
                                box-sizing: border-box;
                                display: table;
                                margin: 0 auto;
                                position: static;
                                width: 100% !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer h4,
                            #mlb2-2547743.ml-form-embedContainer p,
                            #mlb2-2547743.ml-form-embedContainer span,
                            #mlb2-2547743.ml-form-embedContainer button {
                                text-transform: none !important;
                                letter-spacing: normal !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper {
                                background-color: #233872;

                                border-width: 0px;
                                border-color: transparent;
                                border-radius: 4px;
                                border-style: solid;
                                box-sizing: border-box;
                                display: inline-block !important;
                                margin: 0;
                                padding: 0;
                                position: relative;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper.embedPopup,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper.embedDefault {
                                width: 100%;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper.embedForm {
                                max-width: 100%;
                                width: 100%;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-align-left {
                                text-align: left;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-align-center {
                                text-align: center;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-align-default {
                                display: table-cell !important;
                                vertical-align: middle !important;
                                text-align: center !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-align-right {
                                text-align: right;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedHeader img {
                                border-top-left-radius: 4px;
                                border-top-right-radius: 4px;
                                height: auto;
                                margin: 0 auto !important;
                                max-width: 100%;
                                width: undefinedpx;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody {
                                padding: 20px 20px 0 20px;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody.ml-form-embedBodyHorizontal {
                                padding-bottom: 0;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent {
                                text-align: left;
                                margin: 0 0 20px 0;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent h4,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent h4 {
                                color: #fffafa;
                                font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                                font-size: 30px;
                                font-weight: 400;
                                margin: 0 0 10px 0;
                                text-align: center;
                                word-break: break-word;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p {
                                color: #ffffff;
                                font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 22px;
                                margin: 0 0 10px 0;
                                text-align: center;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ul,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ul,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol {
                                color: #ffffff;
                                font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                                font-size: 16px;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol {
                                list-style-type: lower-alpha;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol ol,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol ol {
                                list-style-type: lower-roman;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p a,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p a {
                                color: #000000;
                                text-decoration: underline;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group {
                                text-align: left !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group label {
                                margin-bottom: 5px;
                                color: #ffffff;
                                font-size: 18px;
                                font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                                font-weight: bold;
                                font-style: normal;
                                text-decoration: none;
                                ;
                                display: inline-block;
                                line-height: 24px;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p:last-child,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p:last-child {
                                margin: 0;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody form {
                                margin: 0;
                                width: 100%;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow {
                                margin: 0 0 20px 0;
                                width: 100%;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow {
                                float: left;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent.horozintalForm {
                                margin: 0;
                                padding: 0 0 20px 0;
                                width: 100%;
                                height: auto;
                                float: left;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow {
                                margin: 0 0 10px 0;
                                width: 100%;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-last-item {
                                margin: 0;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-formfieldHorizintal {
                                margin: 0;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input {
                                background-color: #ffffff !important;
                                color: #000000 !important;
                                border-color: #736767;
                                border-radius: 4px !important;
                                border-style: solid !important;
                                border-width: 1px !important;
                                font-family: Verdana, Geneva, sans-serif;
                                font-size: 16px !important;
                                height: auto;
                                line-height: 21px !important;
                                margin-bottom: 0;
                                margin-top: 0;
                                margin-left: 0;
                                margin-right: 0;
                                padding: 10px 10px !important;
                                width: 100% !important;
                                box-sizing: border-box !important;
                                max-width: 100% !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-webkit-input-placeholder,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-webkit-input-placeholder {
                                color: #000000;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-moz-placeholder,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-moz-placeholder {
                                color: #000000;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-ms-input-placeholder,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-ms-input-placeholder {
                                color: #000000;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-moz-placeholder,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-moz-placeholder {
                                color: #000000;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow textarea,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow textarea {
                                background-color: #ffffff !important;
                                color: #000000 !important;
                                border-color: #736767;
                                border-radius: 4px !important;
                                border-style: solid !important;
                                border-width: 1px !important;
                                font-family: Verdana, Geneva, sans-serif;
                                font-size: 16px !important;
                                height: auto;
                                line-height: 21px !important;
                                margin-bottom: 0;
                                margin-top: 0;
                                padding: 10px 10px !important;
                                width: 100% !important;
                                box-sizing: border-box !important;
                                max-width: 100% !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {
                                border-color: #736767 !important;
                                background-color: #ffffff !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input.custom-control-input[type="checkbox"] {
                                box-sizing: border-box;
                                padding: 0;
                                position: absolute;
                                z-index: -1;
                                opacity: 0;
                                margin-top: 5px;
                                margin-left: -1.5rem;
                                overflow: visible;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {
                                border-radius: 4px !important;
                            }


                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked~.label-description::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked~.label-description::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked~.custom-control-label::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked~.custom-control-label::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked~.label-description::after {
                                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::after {
                                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input:checked~.custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked~.label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked~.label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked~.label-description::before {
                                border-color: #EDA659 !important;
                                background-color: #EDA659 !important;
                                color: #ffffff !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::after {
                                top: 5px;
                                box-sizing: border-box;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                                top: 3px !important;
                                box-sizing: border-box !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                                top: 0px !important;
                                box-sizing: border-box !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after {
                                top: 0px !important;
                                box-sizing: border-box !important;
                                position: absolute;
                                left: -1.5rem;
                                display: block;
                                width: 1rem;
                                height: 1rem;
                                content: "";
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {
                                top: 0px !important;
                                box-sizing: border-box !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::before {
                                position: absolute;
                                top: 4px;
                                left: -1.5rem;
                                display: block;
                                width: 16px;
                                height: 16px;
                                pointer-events: none;
                                content: "";
                                background-color: #ffffff;
                                border: #adb5bd solid 1px;
                                border-radius: 50%;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::after {
                                position: absolute;
                                top: 5px !important;
                                left: -1.5rem;
                                display: block;
                                width: 1rem;
                                height: 1rem;
                                content: "";
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {
                                position: absolute;
                                top: 4px;
                                left: -1.5rem;
                                display: block;
                                width: 16px;
                                height: 16px;
                                pointer-events: none;
                                content: "";
                                background-color: #ffffff;
                                border: #adb5bd solid 1px;
                                border-radius: 50%;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after {
                                position: absolute;
                                top: 3px !important;
                                left: -1.5rem;
                                display: block;
                                width: 1rem;
                                height: 1rem;
                                content: "";
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                                position: absolute;
                                top: 0px !important;
                                left: -1.5rem;
                                display: block;
                                width: 1rem;
                                height: 1rem;
                                content: "";
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-radio .custom-control-label::after {
                                background: no-repeat 50%/50% 50%;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-checkbox .custom-control-label::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                                background: no-repeat 50%/50% 50%;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-control,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-control {
                                position: relative;
                                display: block;
                                min-height: 1.5rem;
                                padding-left: 1.5rem;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input {
                                position: absolute;
                                z-index: -1;
                                opacity: 0;
                                box-sizing: border-box;
                                padding: 0;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label {
                                color: #ffffff;
                                font-size: 15px !important;
                                font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                                line-height: 25px;
                                margin-bottom: 0;
                                position: relative;
                                vertical-align: top;
                                font-style: normal;
                                font-weight: 400;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-select,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-select {
                                background-color: #ffffff !important;
                                color: #000000 !important;
                                border-color: #736767;
                                border-radius: 4px !important;
                                border-style: solid !important;
                                border-width: 1px !important;
                                font-family: Verdana, Geneva, sans-serif;
                                font-size: 16px !important;
                                line-height: 20px !important;
                                margin-bottom: 0;
                                margin-top: 0;
                                padding: 10px 28px 10px 12px !important;
                                width: 100% !important;
                                box-sizing: border-box !important;
                                max-width: 100% !important;
                                height: auto;
                                display: inline-block;
                                vertical-align: middle;
                                background: url('https://assets.mlcdn.com/ml/images/default/dropdown.svg') no-repeat right .75rem center/8px 10px;
                                -webkit-appearance: none;
                                -moz-appearance: none;
                                appearance: none;
                            }


                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow {
                                height: auto;
                                width: 100%;
                                float: left;
                            }

                            .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal {
                                width: 70%;
                                float: left;
                            }

                            .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal {
                                width: 30%;
                                float: left;
                            }

                            .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal.labelsOn {
                                padding-top: 29px;
                            }

                            .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields {
                                box-sizing: border-box;
                                float: left;
                                padding-right: 10px;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input {
                                background-color: #ffffff;
                                color: #000000;
                                border-color: #736767;
                                border-radius: 4px;
                                border-style: solid;
                                border-width: 1px;
                                font-family: Verdana, Geneva, sans-serif;
                                font-size: 16px;
                                line-height: 20px;
                                margin-bottom: 0;
                                margin-top: 0;
                                padding: 10px 10px;
                                width: 100%;
                                box-sizing: border-box;
                                overflow-y: initial;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button {
                                background-color: #EDA659 !important;
                                border-color: #EDA659;
                                border-style: solid;
                                border-width: 1px;
                                border-radius: 4px;
                                box-shadow: none;
                                color: #ffffff !important;
                                cursor: pointer;
                                font-family: Verdana, Geneva, sans-serif;
                                font-size: 19px !important;
                                font-weight: 700;
                                line-height: 20px;
                                margin: 0 !important;
                                padding: 10px !important;
                                width: 100%;
                                height: auto;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button:hover {
                                background-color: #333333 !important;
                                border-color: #333333 !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type="checkbox"] {
                                box-sizing: border-box;
                                padding: 0;
                                position: absolute;
                                z-index: -1;
                                opacity: 0;
                                margin-top: 5px;
                                margin-left: -1.5rem;
                                overflow: visible;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description {
                                color: #000000;
                                display: block;
                                font-family: 'Open Sans', Arial, Helvetica, sans-serif;
                                font-size: 12px;
                                text-align: left;
                                margin-bottom: 0;
                                position: relative;
                                vertical-align: top;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label {
                                font-weight: normal;
                                margin: 0;
                                padding: 0;
                                position: relative;
                                display: block;
                                min-height: 24px;
                                padding-left: 24px;

                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label a {
                                color: #000000;
                                text-decoration: underline;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p {
                                color: #000000 !important;
                                font-family: 'Open Sans', Arial, Helvetica, sans-serif !important;
                                font-size: 12px !important;
                                font-weight: normal !important;
                                line-height: 18px !important;
                                padding: 0 !important;
                                margin: 0 5px 0 0 !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p:last-child {
                                margin: 0;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit {
                                margin: 0 0 20px 0;
                                float: left;
                                width: 100%;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button {
                                background-color: #EDA659 !important;
                                border: none !important;
                                border-radius: 4px !important;
                                box-shadow: none !important;
                                color: #ffffff !important;
                                cursor: pointer;
                                font-family: Verdana, Geneva, sans-serif !important;
                                font-size: 19px !important;
                                font-weight: 700 !important;
                                line-height: 21px !important;
                                height: auto;
                                padding: 10px !important;
                                width: 100% !important;
                                box-sizing: border-box !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button.loading {
                                display: none;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button:hover {
                                background-color: #333333 !important;
                            }

                            .ml-subscribe-close {
                                width: 30px;
                                height: 30px;
                                background: url('https://assets.mlcdn.com/ml/images/default/modal_close.png') no-repeat;
                                background-size: 30px;
                                cursor: pointer;
                                margin-top: -10px;
                                margin-right: -10px;
                                position: absolute;
                                top: 0;
                                right: 0;
                            }

                            .ml-error input,
                            .ml-error textarea,
                            .ml-error select {
                                border-color: red !important;
                            }

                            .ml-error .custom-checkbox-radio-list {
                                border: 1px solid red !important;
                                border-radius: 4px;
                                padding: 10px;
                            }

                            .ml-error .label-description,
                            .ml-error .label-description p,
                            .ml-error .label-description p a,
                            .ml-error label:first-child {
                                color: #ff0000 !important;
                            }

                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p,
                            #mlb2-2547743.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p:first-letter {
                                color: #ff0000 !important;
                            }

                            @media only screen and (max-width: 460px) {

                                .ml-form-embedWrapper.embedDefault,
                                .ml-form-embedWrapper.embedPopup {
                                    width: 100% !important;
                                }

                                .ml-form-formContent.horozintalForm {
                                    float: left !important;
                                }

                                .ml-form-formContent.horozintalForm .ml-form-horizontalRow {
                                    height: auto !important;
                                    width: 100% !important;
                                    float: left !important;
                                }

                                .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal {
                                    width: 100% !important;
                                }

                                .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal>div {
                                    padding-right: 0px !important;
                                    padding-bottom: 10px;
                                }

                                .ml-form-formContent.horozintalForm .ml-button-horizontal {
                                    width: 100% !important;
                                }

                                .ml-form-formContent.horozintalForm .ml-button-horizontal.labelsOn {
                                    padding-top: 0px !important;
                                }

                            }
                        </style>


                        <style type="text/css">
                            @media only screen and (max-width: 460px) {
                                .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields {
                                    margin-bottom: 10px !important;
                                    width: 100% !important;
                                }
                            }
                        </style>






























































































































































                        <div id="mlb2-2547743" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-2547743">
                            <div class="ml-form-align-center ">
                                <div class="ml-form-embedWrapper embedForm">




                                    <div class="ml-form-embedBody ml-form-embedBodyHorizontal row-form">

                                        <div class="ml-form-embedContent" style=" ">

                                            <h4>COME TAKE YOUR FREE SAT/ACT DIAGNOSTIC TEST!</h4>
                                            <p>Let us know you better before you sit for the test</p>

                                        </div>

                                        <form class="ml-block-form"
                                            action="https://assets.mailerlite.com/jsonp/253019/forms/74073341993944933/subscribe"
                                            data-code="" method="post" target="_blank">
                                            <div class="ml-form-formContent">



                                                <div class="ml-form-fieldRow ">
                                                    <div class="ml-field-group ml-field-name ml-validate-required">




                                                        <!-- input -->
                                                        <input aria-label="name" aria-required="true" type="text"
                                                            class="form-control" data-inputmask="" name="fields[name]"
                                                            placeholder="Name" autocomplete="name">
                                                        <!-- /input -->

                                                        <!-- textarea -->

                                                        <!-- /textarea -->

                                                        <!-- select -->

                                                        <!-- /select -->

                                                        <!-- checkboxes -->

                                                        <!-- /checkboxes -->

                                                        <!-- radio -->

                                                        <!-- /radio -->

                                                        <!-- countries -->

                                                        <!-- /countries -->





                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow ">
                                                    <div class="ml-field-group ml-field-nama_anak ml-validate-required">




                                                        <!-- input -->
                                                        <input aria-label="nama_anak" aria-required="true" type="text"
                                                            class="form-control" data-inputmask="" name="fields[nama_anak]"
                                                            placeholder="My Child's Name (if you are a student, then fill in this column with your name)"
                                                            autocomplete="">
                                                        <!-- /input -->

                                                        <!-- textarea -->

                                                        <!-- /textarea -->

                                                        <!-- select -->

                                                        <!-- /select -->

                                                        <!-- checkboxes -->

                                                        <!-- /checkboxes -->

                                                        <!-- radio -->

                                                        <!-- /radio -->

                                                        <!-- countries -->

                                                        <!-- /countries -->





                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow ">
                                                    <div
                                                        class="ml-field-group ml-field-email ml-validate-email ml-validate-required">




                                                        <!-- input -->
                                                        <input aria-label="email" aria-required="true" type="email"
                                                            class="form-control" data-inputmask="" name="fields[email]"
                                                            placeholder="Email" autocomplete="email">
                                                        <!-- /input -->

                                                        <!-- textarea -->

                                                        <!-- /textarea -->

                                                        <!-- select -->

                                                        <!-- /select -->

                                                        <!-- checkboxes -->

                                                        <!-- /checkboxes -->

                                                        <!-- radio -->

                                                        <!-- /radio -->

                                                        <!-- countries -->

                                                        <!-- /countries -->





                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow ">
                                                    <div class="ml-field-group ml-field-phone ml-validate-required">




                                                        <!-- input -->
                                                        <input aria-label="phone" aria-required="true" type="text"
                                                            class="form-control" data-inputmask="" name="fields[phone]"
                                                            placeholder="Phone Number" autocomplete="">
                                                        <!-- /input -->

                                                        <!-- textarea -->

                                                        <!-- /textarea -->

                                                        <!-- select -->

                                                        <!-- /select -->

                                                        <!-- checkboxes -->

                                                        <!-- /checkboxes -->

                                                        <!-- radio -->

                                                        <!-- /radio -->

                                                        <!-- countries -->

                                                        <!-- /countries -->





                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow ">
                                                    <div class="ml-field-group ml-field-sekolah ml-validate-required">




                                                        <!-- input -->
                                                        <input aria-label="sekolah" aria-required="true" type="text"
                                                            class="form-control" data-inputmask="" name="fields[sekolah]"
                                                            placeholder="School" autocomplete="">
                                                        <!-- /input -->

                                                        <!-- textarea -->

                                                        <!-- /textarea -->

                                                        <!-- select -->

                                                        <!-- /select -->

                                                        <!-- checkboxes -->

                                                        <!-- /checkboxes -->

                                                        <!-- radio -->

                                                        <!-- /radio -->

                                                        <!-- countries -->

                                                        <!-- /countries -->





                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow ml-last-item">
                                                    <div
                                                        class="ml-field-group ml-field-graduation_year ml-validate-required">

                                                        <label>Graduation Year</label>


                                                        <!-- input -->

                                                        <!-- /input -->

                                                        <!-- textarea -->

                                                        <!-- /textarea -->

                                                        <!-- select -->
                                                        <select class="custom-select" name="fields[graduation_year]"
                                                            aria-label="graduation_year" aria-required="true">
                                                            <option value="">-</option>
                                                            <!-- Visible if current or any next has value -->
                                                            <option>
                                                                2023
                                                            </option>

                                                            <option>
                                                                2024
                                                            </option>

                                                            <option>
                                                                2025
                                                            </option>

                                                            <option>
                                                                2026
                                                            </option>

                                                            <option>
                                                                2027
                                                            </option>

                                                            <option>
                                                                2028
                                                            </option>








                                                        </select>
                                                        <!-- /select -->

                                                        <!-- checkboxes -->

                                                        <!-- /checkboxes -->

                                                        <!-- radio -->

                                                        <!-- /radio -->

                                                        <!-- countries -->

                                                        <!-- /countries -->





                                                    </div>
                                                </div>

                                            </div>



                                            <!-- Privacy policy -->

                                            <!-- /Privacy policy -->













                                            <input type="hidden" name="ml-submit" value="1">

                                            <div class="ml-form-embedSubmit">

                                                <button type="submit" class="primary">SUBMIT</button>

                                                <button disabled="disabled" style="display: none;" type="button"
                                                    class="loading">
                                                    <div class="ml-form-embedSubmitLoad"></div>
                                                    <span class="sr-only">Loading...</span>
                                                </button>
                                            </div>


                                            <input type="hidden" name="anticsrf" value="true">
                                        </form>
                                    </div>

                                    <div class="ml-form-successBody row-success" style="display: none">

                                        <div class="ml-form-successContent">

                                            <h4>Thank Your for Letting Us Know A Little Bit About You</h4>
                                            <p style="text-align: center;">Anggie or Derry Will Contact You Soon for
                                                The&nbsp;SAT/ACT DIAGNOSTIC TEST!<br></p>
                                            <p><br></p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>





                        <script>
                            function ml_webform_success_2547743() {
                                try {
                                    window.top.location.href = '{{ route('thank_page', app()->getLocale()) }}';
                                } catch (e) {
                                    window.location.href = '{{ route('thank_page', app()->getLocale()) }}';
                                }
                            }
                        </script>


                        <script src="https://groot.mailerlite.com/js/w/webforms.min.js?v300817f630ad0e957914d0b28a2b6d78"
                            type="text/javascript"></script>
                        <script>
                            fetch("https://assets.mailerlite.com/jsonp/253019/forms/74073341993944933/track-view")
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="flex flex-col main-container">
            <h4 class="font-newprimary font-bold text-2xl text-newprimary">
                FAQ
            </h4>
            <div class="mt-4 w-full">
                <ul class="flex flex-col gap-y-4">
                    @foreach (__('pages/sign_me/sat_prep.qna_list') as $item)
                        <li class="flex flex-col w-full rounded-[10px] bg-[#F2F7FF] overflow-hidden">
                            <div id="question"
                                class="flex justify-between items-center cursor-pointer px-4 py-2 rounded-[10px]">
                                <h4 class="mr-4 font-newprimary font-semibold text-xl text-newprimary">
                                    {{ $item['question'] }}
                                </h4>
                                <i class="fa-solid fa-chevron-down text-xl text-newprimary mr-3"></i>
                            </div>
                            <div id="answer"
                                class="max-h-0 px-4 invisible overflow-hidden transition-all ease-linear duration-1000">
                                <p class="font-newprimary py-5 text-lg text-newprimary">
                                    {!! $item['answer'] !!}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        const questions = document.querySelectorAll('#question');
        const answers = document.querySelectorAll('#answer');
        const answers_texts = document.querySelectorAll('#question h4');
        const answers_icons = document.querySelectorAll('#question i');

        let old = 0;

        questions.forEach((question, it) => {
            question.addEventListener('click', () => {
                answers[old].classList.add('max-h-0');
                answers[old].classList.remove('duration-[1s]');
                answers[old].classList.add('duration-500');
                answers[old].classList.remove(`max-h-[400px]`);
                answers[old].classList.add('invisible');
                questions[old].classList.remove('bg-[#EAB91F]');

                answers[it].classList.remove('max-h-0');
                answers[it].classList.add(`max-h-[400px]`);
                answers[it].classList.add('duration-[1s]');
                answers[it].classList.remove('duration-500');
                answers[it].classList.remove('invisible');
                questions[it].classList.add('bg-[#EAB91F]');
                old = it;
            })
        })
    </script>
@endsection
