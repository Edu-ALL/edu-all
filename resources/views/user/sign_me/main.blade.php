@extends('layout.user.main')

@section('content')
    <section class="py-20 bg-sign-me bg-cover bg-center">
        <div class="main-container w-full mx-auto md:max-w-[1440px]">
            <div class="flex flex-col">
                <h2 class="font-title font-semibold text-3xl text-white">
                    #TakeOnYourFuture
                    <br>
                    with ALL-in Eduspace
                </h2>
                <p class="mt-6 w-full font-body text-lg text-white md:max-w-3xl ">
                    <span class="block"> DARE TO DREAM!</span>
                    Let’s find out how to get into your dream university and future career path through the first
                    consultation with our top-notch mentors.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="main-container w-full mx-auto md:max-w-[1440px]">
            <div class="grid grid-cols-1 gap-x-12 md:grid-cols-5">
                <div class="flex flex-col w-full md:col-span-2">
                    <div class="mb-6 flex flex-col gap-x-10">
                        <h4 class="font-body font-bold text-2xl text-primary">
                            What you will earn in the consultation:
                        </h4>
                        <ul class="mt-4 font-body text-lg text-black">
                            <li class="flex">
                                <i class="fa-solid fa-check text-blue-500 mt-1 mr-2"></i>
                                <span>
                                    Big picture of what you will face in your dream universities’ application
                                    process
                                </span>
                            </li>
                            <li class="flex">
                                <i class="fa-solid fa-check text-blue-500 mt-1 mr-2"></i>
                                <span>

                                    Personalized assessment of strengths and area of improvements on your profile
                                </span>
                            </li>
                            <li class="flex justify-start">
                                <i class="fa-solid fa-check text-blue-500 mt-1 mr-2"></i>
                                <span class="w-full">
                                    Your needs and how ALL-in can help you professionally
                                </span>
                            </li>
                            <li class="flex">
                                <i class="fa-solid fa-check text-blue-500 mt-1 mr-2"></i>
                                <span>

                                    Recommendation and timeline on the next action to take for your application
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-x-10">
                        <h4 class="mb-6 font-body font-bold text-2xl text-primary">
                            Your current profile will be assessed based on Four Pillars of University Application
                        </h4>
                        <img src="{{ asset('assets/img/sign-me/four-pillars.webp') }}" alt="four pillars">
                    </div>
                </div>
                <div class="md:col-span-3">
                    <div class="w-full">
                        <style type="text/css">
                            @import url(https://assets.mlcdn.com/fonts.css?version=1670858);
                        </style>
                        <style type="text/css">
                            .ml-form-embedSubmitLoad {
                                display: inline-block;
                                width: 20px;
                                height: 20px
                            }

                            .g-recaptcha {
                                transform: scale(1);
                                -webkit-transform: scale(1);
                                transform-origin: 0 0;
                                -webkit-transform-origin: 0 0
                            }

                            .sr-only {
                                position: absolute;
                                width: 1px;
                                height: 1px;
                                padding: 0;
                                margin: -1px;
                                overflow: hidden;
                                clip: rect(0, 0, 0, 0);
                                border: 0
                            }

                            .ml-form-embedSubmitLoad:after {
                                content: " ";
                                display: block;
                                width: 11px;
                                height: 11px;
                                margin: 1px;
                                border-radius: 50%;
                                border: 4px solid #fff;
                                border-color: #fff #fff #fff transparent;
                                animation: ml-form-embedSubmitLoad 1.2s linear infinite
                            }

                            @keyframes ml-form-embedSubmitLoad {
                                0% {
                                    transform: rotate(0)
                                }

                                100% {
                                    transform: rotate(360deg)
                                }
                            }

                            #mlb2-5784670.ml-form-embedContainer {
                                box-sizing: border-box;
                                display: table;
                                margin: 0 auto;
                                position: static;
                                width: 100% !important
                            }

                            #mlb2-5784670.ml-form-embedContainer button,
                            #mlb2-5784670.ml-form-embedContainer h4,
                            #mlb2-5784670.ml-form-embedContainer p,
                            #mlb2-5784670.ml-form-embedContainer span {
                                text-transform: none !important;
                                letter-spacing: normal !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper {
                                background-color: #233872;
                                border-width: 0;
                                border-color: transparent;
                                border-radius: 4px;
                                border-style: solid;
                                box-sizing: border-box;
                                display: inline-block !important;
                                margin: 0;
                                padding: 0;
                                position: relative
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper.embedDefault,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper.embedPopup {
                                width: 100%
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper.embedForm {
                                max-width: 100%;
                                width: 100%
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-align-left {
                                text-align: left
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-align-center {
                                text-align: center
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-align-default {
                                display: table-cell !important;
                                vertical-align: middle !important;
                                text-align: center !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-align-right {
                                text-align: right
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedHeader img {
                                border-top-left-radius: 4px;
                                border-top-right-radius: 4px;
                                height: auto;
                                margin: 0 auto !important;
                                max-width: 100%;
                                width: undefinedpx
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody {
                                padding: 20px 20px 0 20px
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody.ml-form-embedBodyHorizontal {
                                padding-bottom: 0
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent {
                                text-align: left;
                                margin: 0 0 20px 0
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent h4,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent h4 {
                                color: #fff;
                                font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                                font-size: 30px;
                                font-weight: 400;
                                margin: 0 0 10px 0;
                                text-align: center;
                                word-break: break-word
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p {
                                color: #fff;
                                font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 22px;
                                margin: 0 0 10px 0;
                                text-align: center
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ul,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ul {
                                color: #fff;
                                font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                                font-size: 16px
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol {
                                list-style-type: lower-alpha
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol ol,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol ol {
                                list-style-type: lower-roman
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p a,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p a {
                                color: #fff;
                                text-decoration: underline
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group {
                                text-align: left !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group label {
                                margin-bottom: 5px;
                                color: #fff;
                                font-size: 18px;
                                font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                                font-weight: 700;
                                font-style: normal;
                                text-decoration: none;
                                display: inline-block;
                                line-height: 24px
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p:last-child,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p:last-child {
                                margin: 0
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody form {
                                margin: 0;
                                width: 100%
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent {
                                margin: 0 0 20px 0;
                                width: 100%
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow {
                                float: left
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent.horozintalForm {
                                margin: 0;
                                padding: 0 0 20px 0;
                                width: 100%;
                                height: auto;
                                float: left
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow {
                                margin: 0 0 10px 0;
                                width: 100%
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-last-item {
                                margin: 0
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-formfieldHorizintal {
                                margin: 0
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input {
                                background-color: #fff !important;
                                color: #736767 !important;
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
                                max-width: 100% !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-webkit-input-placeholder,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-webkit-input-placeholder {
                                color: #736767
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-moz-placeholder,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-moz-placeholder {
                                color: #736767
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-ms-input-placeholder,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-ms-input-placeholder {
                                color: #736767
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-moz-placeholder,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-moz-placeholder {
                                color: #736767
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow textarea,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow textarea {
                                background-color: #fff !important;
                                color: #736767 !important;
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
                                max-width: 100% !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {
                                border-color: #736767 !important;
                                background-color: #fff !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input.custom-control-input[type=checkbox] {
                                box-sizing: border-box;
                                padding: 0;
                                position: absolute;
                                z-index: -1;
                                opacity: 0;
                                margin-top: 5px;
                                margin-left: -1.5rem;
                                overflow: visible
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {
                                border-radius: 4px !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked~.label-description::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked~.label-description::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked~.custom-control-label::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked~.custom-control-label::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked~.label-description::after {
                                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e")
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::after {
                                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked~.label-description::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked~.label-description::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input:checked~.custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked~.label-description::before {
                                border-color: #ee7011 !important;
                                background-color: #ee7011 !important;
                                color: #fff !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before {
                                top: 5px;
                                box-sizing: border-box
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before {
                                top: 3px !important;
                                box-sizing: border-box !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {
                                top: 0 !important;
                                box-sizing: border-box !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after {
                                top: 0 !important;
                                box-sizing: border-box !important;
                                position: absolute;
                                left: -1.5rem;
                                display: block;
                                width: 1rem;
                                height: 1rem;
                                content: ""
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {
                                top: 0 !important;
                                box-sizing: border-box !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::before {
                                position: absolute;
                                top: 4px;
                                left: -1.5rem;
                                display: block;
                                width: 16px;
                                height: 16px;
                                pointer-events: none;
                                content: "";
                                background-color: #fff;
                                border: #adb5bd solid 1px;
                                border-radius: 50%
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::after {
                                position: absolute;
                                top: 5px !important;
                                left: -1.5rem;
                                display: block;
                                width: 1rem;
                                height: 1rem;
                                content: ""
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {
                                position: absolute;
                                top: 4px;
                                left: -1.5rem;
                                display: block;
                                width: 16px;
                                height: 16px;
                                pointer-events: none;
                                content: "";
                                background-color: #fff;
                                border: #adb5bd solid 1px;
                                border-radius: 50%
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after {
                                position: absolute;
                                top: 3px !important;
                                left: -1.5rem;
                                display: block;
                                width: 1rem;
                                height: 1rem;
                                content: ""
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                                position: absolute;
                                top: 0 !important;
                                left: -1.5rem;
                                display: block;
                                width: 1rem;
                                height: 1rem;
                                content: ""
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-radio .custom-control-label::after {
                                background: no-repeat 50%/50% 50%
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-checkbox .custom-control-label::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after {
                                background: no-repeat 50%/50% 50%
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-control,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-control {
                                position: relative;
                                display: block;
                                min-height: 1.5rem;
                                padding-left: 1.5rem
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input {
                                position: absolute;
                                z-index: -1;
                                opacity: 0;
                                box-sizing: border-box;
                                padding: 0
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label {
                                color: #f6f6f6;
                                font-size: 15px !important;
                                font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                                line-height: 25px;
                                margin-bottom: 0;
                                position: relative;
                                vertical-align: top;
                                font-style: normal;
                                font-weight: 400
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-select,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-select {
                                background-color: #fff !important;
                                color: #736767 !important;
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
                                background: url(https://cdn.mailerlite.com/images/default/dropdown.svg) no-repeat right .75rem center/8px 10px;
                                -webkit-appearance: none;
                                -moz-appearance: none;
                                appearance: none
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow {
                                height: auto;
                                width: 100%;
                                float: left
                            }

                            .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal {
                                width: 70%;
                                float: left
                            }

                            .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal {
                                width: 30%;
                                float: left
                            }

                            .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal.labelsOn {
                                padding-top: 29px
                            }

                            .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields {
                                box-sizing: border-box;
                                float: left;
                                padding-right: 10px
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input {
                                background-color: #fff;
                                color: #736767;
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
                                overflow-y: initial
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button {
                                background-color: #ee7011 !important;
                                border-color: #ee7011;
                                border-style: solid;
                                border-width: 1px;
                                border-radius: 4px;
                                box-shadow: none;
                                color: #fff !important;
                                cursor: pointer;
                                font-family: Verdana, Geneva, sans-serif;
                                font-size: 19px !important;
                                font-weight: 700;
                                line-height: 20px;
                                margin: 0 !important;
                                padding: 10px !important;
                                width: 100%;
                                height: auto
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button:hover {
                                background-color: #333 !important;
                                border-color: #333 !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox] {
                                box-sizing: border-box;
                                padding: 0;
                                position: absolute;
                                z-index: -1;
                                opacity: 0;
                                margin-top: 5px;
                                margin-left: -1.5rem;
                                overflow: visible
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description {
                                color: #000;
                                display: block;
                                font-family: 'Open Sans', Arial, Helvetica, sans-serif;
                                font-size: 12px;
                                text-align: left;
                                margin-bottom: 0;
                                position: relative;
                                vertical-align: top
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label {
                                font-weight: 400;
                                margin: 0;
                                padding: 0;
                                position: relative;
                                display: block;
                                min-height: 24px;
                                padding-left: 24px
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label a {
                                color: #000;
                                text-decoration: underline
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p {
                                color: #000 !important;
                                font-family: 'Open Sans', Arial, Helvetica, sans-serif !important;
                                font-size: 12px !important;
                                font-weight: 400 !important;
                                line-height: 18px !important;
                                padding: 0 !important;
                                margin: 0 5px 0 0 !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p:last-child {
                                margin: 0
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit {
                                margin: 0 0 20px 0;
                                float: left;
                                width: 100%
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button {
                                background-color: #ee7011 !important;
                                border: none !important;
                                border-radius: 4px !important;
                                box-shadow: none !important;
                                color: #fff !important;
                                cursor: pointer;
                                font-family: Verdana, Geneva, sans-serif !important;
                                font-size: 19px !important;
                                font-weight: 700 !important;
                                line-height: 21px !important;
                                height: auto;
                                padding: 10px !important;
                                width: 100% !important;
                                box-sizing: border-box !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button.loading {
                                display: none
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button:hover {
                                background-color: #333 !important
                            }

                            .ml-subscribe-close {
                                width: 30px;
                                height: 30px;
                                background: url(https://cdn.mailerlite.com/images/default/modal_close.png) no-repeat;
                                background-size: 30px;
                                cursor: pointer;
                                margin-top: -10px;
                                margin-right: -10px;
                                position: absolute;
                                top: 0;
                                right: 0
                            }

                            .ml-error input,
                            .ml-error select,
                            .ml-error textarea {
                                border-color: red !important
                            }

                            .ml-error .custom-checkbox-radio-list {
                                border: 1px solid red !important;
                                border-radius: 4px;
                                padding: 10px
                            }

                            .ml-error .label-description,
                            .ml-error .label-description p,
                            .ml-error .label-description p a,
                            .ml-error label:first-child {
                                color: red !important
                            }

                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p,
                            #mlb2-5784670.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p:first-letter {
                                color: red !important
                            }

                            @media only screen and (max-width:460px) {

                                .ml-form-embedWrapper.embedDefault,
                                .ml-form-embedWrapper.embedPopup {
                                    width: 100% !important
                                }

                                .ml-form-formContent.horozintalForm {
                                    float: left !important
                                }

                                .ml-form-formContent.horozintalForm .ml-form-horizontalRow {
                                    height: auto !important;
                                    width: 100% !important;
                                    float: left !important
                                }

                                .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal {
                                    width: 100% !important
                                }

                                .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal>div {
                                    padding-right: 0 !important;
                                    padding-bottom: 10px
                                }

                                .ml-form-formContent.horozintalForm .ml-button-horizontal {
                                    width: 100% !important
                                }

                                .ml-form-formContent.horozintalForm .ml-button-horizontal.labelsOn {
                                    padding-top: 0 !important
                                }
                            }
                        </style>
                        <style type="text/css">
                            @media only screen and (max-width:460px) {
                                .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields {
                                    margin-bottom: 10px !important;
                                    width: 100% !important
                                }
                            }
                        </style>
                        <div id="mlb2-5784670" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-5784670">
                            <div class="ml-form-align-center">
                                <div class="ml-form-embedWrapper embedForm">
                                    <div class="ml-form-embedBody ml-form-embedBodyHorizontal row-form">
                                        <div class="ml-form-embedContent" style="">
                                            <h4></h4>
                                            <p><strong><span style="font-size:28px">Let us know you better by filling out
                                                        this
                                                        form!</span></strong></p>
                                        </div>
                                        <form class="ml-block-form"
                                            action="https://static.mailerlite.com/webforms/submit/t7r7w8" data-code="t7r7w8"
                                            method="post" target="_blank">
                                            <div class="ml-form-formContent">
                                                <div class="ml-form-fieldRow">
                                                    <div class="ml-field-group ml-field-name ml-validate-required">
                                                        <input aria-label="name" aria-required="true" type="text"
                                                            class="form-control" data-inputmask="" name="fields[name]"
                                                            placeholder="Name" autocomplete="name">
                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow">
                                                    <div
                                                        class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
                                                        <input aria-label="email" aria-required="true" type="email"
                                                            class="form-control" data-inputmask="" name="fields[email]"
                                                            placeholder="Email" autocomplete="email">
                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow">
                                                    <div class="ml-field-group ml-field-phone ml-validate-required">
                                                        <input aria-label="phone" aria-required="true" type="text"
                                                            class="form-control" data-inputmask="" name="fields[phone]"
                                                            placeholder="Phone Number" autocomplete="">
                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow">
                                                    <div class="ml-field-group ml-field-sekolah ml-validate-required">
                                                        <input aria-label="sekolah" aria-required="true" type="text"
                                                            class="form-control" data-inputmask="" name="fields[sekolah]"
                                                            placeholder="School" autocomplete="">
                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow">
                                                    <div
                                                        class="ml-field-group ml-field-graduation_year ml-validate-required">
                                                        <label>Expected Graduation Year</label>
                                                        <select class="custom-select" name="fields[graduation_year]"
                                                            aria-label="graduation_year" aria-required="true">
                                                            <option value="">-</option>
                                                            <option> 2023 </option>
                                                            <option> 2024 </option>
                                                            <option> 2025 </option>
                                                            <option> 2026 </option>
                                                            <option> 2027 </option>
                                                            <option> 2028 </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow">
                                                    <div class="ml-field-group ml-field-audience ml-validate-required">
                                                        <label>You are a</label>
                                                        <div class="custom-checkbox-radio-list">
                                                            <div class="custom-control custom-radio">
                                                                <input aria-label="audience" aria-required="true"
                                                                    name="fields[audience]" class="custom-control-input"
                                                                    type="radio" value="Parents"
                                                                    id="radio-5784670-53}-0">
                                                                <label class="custom-control-label"
                                                                    for="radio-5784670-53}-0">
                                                                    Parents </label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input aria-label="audience" aria-required="true"
                                                                    name="fields[audience]" class="custom-control-input"
                                                                    type="radio" value="Student"
                                                                    id="radio-5784670-53}-1">
                                                                <label class="custom-control-label"
                                                                    for="radio-5784670-53}-1">
                                                                    Student </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow">
                                                    <div class="ml-field-group ml-field-session ml-validate-required">
                                                        <label>I would like to know more about</label>
                                                        <div class="custom-checkbox-radio-list">
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[session][]" aria-label="session"
                                                                    aria-required="true" class="custom-control-input"
                                                                    type="checkbox"
                                                                    value="Admission Mentoring &amp; Scholarship Application"
                                                                    id="checkbox-5784670-63-0">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-63-0"> Admission Mentoring &
                                                                    Scholarship Application </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[session][]" aria-label="session"
                                                                    aria-required="true" class="custom-control-input"
                                                                    type="checkbox" value="University Application Essay"
                                                                    id="checkbox-5784670-63-1">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-63-1"> University Application
                                                                    Essay
                                                                </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[session][]" aria-label="session"
                                                                    aria-required="true" class="custom-control-input"
                                                                    type="checkbox" value="Academic Tutoring"
                                                                    id="checkbox-5784670-63-2">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-63-2"> Academic Tutoring </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[session][]" aria-label="session"
                                                                    aria-required="true" class="custom-control-input"
                                                                    type="checkbox" value="Master/ Transfer Mentoring"
                                                                    id="checkbox-5784670-63-3">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-63-3"> Master/ Transfer Mentoring
                                                                </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[session][]" aria-label="session"
                                                                    aria-required="true" class="custom-control-input"
                                                                    type="checkbox" value="SAT &amp; ACT"
                                                                    id="checkbox-5784670-63-4">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-63-4"> SAT & ACT </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[session][]" aria-label="session"
                                                                    aria-required="true" class="custom-control-input"
                                                                    type="checkbox" value="CV &amp; Personal Branding"
                                                                    id="checkbox-5784670-63-5">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-63-5"> CV & Personal Branding
                                                                </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[session][]" aria-label="session"
                                                                    aria-required="true" class="custom-control-input"
                                                                    type="checkbox"
                                                                    value="Entrepreneurship &amp; Scientific Research Program"
                                                                    id="checkbox-5784670-63-6">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-63-6"> Entrepreneurship &
                                                                    Scientific
                                                                    Research Program </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[session][]" aria-label="session"
                                                                    aria-required="true" class="custom-control-input"
                                                                    type="checkbox" value="ALL of Them!!"
                                                                    id="checkbox-5784670-63-7">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-63-7"> ALL of Them!! </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-form-fieldRow ml-last-item">
                                                    <div
                                                        class="ml-field-group ml-field-negara_study_abroad ml-validate-required">
                                                        <label>Study Destination</label>
                                                        <div class="custom-checkbox-radio-list">
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[negara_study_abroad][]"
                                                                    aria-label="negara_study_abroad" aria-required="true"
                                                                    class="custom-control-input" type="checkbox"
                                                                    value="US" id="checkbox-5784670-73-0">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-73-0"> US </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[negara_study_abroad][]"
                                                                    aria-label="negara_study_abroad" aria-required="true"
                                                                    class="custom-control-input" type="checkbox"
                                                                    value="UK" id="checkbox-5784670-73-1">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-73-1"> UK </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[negara_study_abroad][]"
                                                                    aria-label="negara_study_abroad" aria-required="true"
                                                                    class="custom-control-input" type="checkbox"
                                                                    value="Asia" id="checkbox-5784670-73-2">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-73-2"> Asia </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[negara_study_abroad][]"
                                                                    aria-label="negara_study_abroad" aria-required="true"
                                                                    class="custom-control-input" type="checkbox"
                                                                    value="Canada" id="checkbox-5784670-73-3">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-73-3"> Canada </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[negara_study_abroad][]"
                                                                    aria-label="negara_study_abroad" aria-required="true"
                                                                    class="custom-control-input" type="checkbox"
                                                                    value="Australia" id="checkbox-5784670-73-4">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-73-4"> Australia </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input name="fields[negara_study_abroad][]"
                                                                    aria-label="negara_study_abroad" aria-required="true"
                                                                    class="custom-control-input" type="checkbox"
                                                                    value="Europe" id="checkbox-5784670-73-5">
                                                                <label class="custom-control-label"
                                                                    for="checkbox-5784670-73-5"> Europe </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="ml-submit" value="1">
                                            <div class="ml-form-embedSubmit">
                                                <button type="submit" class="primary">Meet our Mentors</button>
                                                <button disabled="disabled" style="display:none" type="button"
                                                    class="loading">
                                                    <div class="ml-form-embedSubmitLoad"></div> <span
                                                        class="sr-only">Loading...</span>
                                                </button>
                                            </div>
                                            <input type="hidden" name="anticsrf" value="true">
                                        </form>
                                    </div>
                                    <div class="ml-form-successBody row-success" style="display:none">
                                        <div class="ml-form-successContent">
                                            <h4>Thanks!</h4>
                                            <p style="text-align:center">Our team will contact you very soon</p>
                                            <p><br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function ml_webform_success_5784670() {
                                try {
                                    window.top.location.href = "https://all-inedu.com/thank-you-for-your-interest-in-our-programs/"
                                } catch (o) {
                                    window.location.href = "https://all-inedu.com/thank-you-for-your-interest-in-our-programs/"
                                }
                            }
                        </script>
                        <img src="https://track.mailerlite.com/webforms/o/5784670/t7r7w8?v1670913789" width="1"
                            height="1"
                            style="max-width:1px;max-height:1px;visibility:hidden;padding:0;margin:0;display:block"
                            alt="." border="0">
                        <script src="https://static.mailerlite.com/js/w/webforms.min.js?v7316d10e2931a97c7b0f5c7e7e7be3ea"
                            type="text/javascript"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="flex flex-col main-container">
            <h4 class="font-body font-bold text-2xl text-primary">
                FAQ
            </h4>
            <div class="mt-4 w-full">
                <ul class="flex flex-col">
                    @foreach (__('pages/about_us/about.qna_list') as $item)
                        <li class="flex flex-col w-full -mt-px border border-[#7e7e7e]">
                            <div id="question" class="flex items-center cursor-pointer px-4 py-2 ">
                                <i class="fa-solid fa-plus text-xl text-primary mr-3"></i>
                                <h4 class="mr-4 font-primary font-semibold text-xl text-primary">
                                    {{ $item['question'] }}
                                </h4>
                            </div>
                            <div id="answer"
                                class="max-h-0 px-4 invisible overflow-hidden border-t border-[#7e7e7e] transition-all ease-linear duration-1000">
                                <p class="font-primary py-5 text-lg text-[#7e7e7e]">
                                    {!! $item['answer'] !!}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

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
                answers_texts[old].classList.remove('text-yellow');
                answers_icons[old].classList.remove('text-yellow');
                answers_icons[old].classList.add('fa-plus');
                answers_icons[old].classList.remove('fa-minus');

                answers[it].classList.remove('max-h-0');
                answers[it].classList.add(`max-h-[400px]`);
                answers[it].classList.add('duration-[1s]');
                answers[it].classList.remove('duration-500');
                answers[it].classList.remove('invisible');
                answers_texts[it].classList.add('text-yellow');
                answers_icons[it].classList.add('text-yellow');
                answers_icons[it].classList.remove('fa-plus');
                answers_icons[it].classList.add('fa-minus');
                console.log(answers_texts[it]);
                old = it;
            })
        })
    </script>
@endsection
