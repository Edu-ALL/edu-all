@php
    $uniqueId = uniqid();
    $color = $color ?? 'light';
@endphp

<div class="w-full ease-in-out duration-500 z-[999999]" id="formRegist_{{ $uniqueId }}">
    <div id="myForm_{{ $uniqueId }}">
        <div class="mt-5">
            <div class="flex flex-col">
                <div class="mb-3">
                    <div class="flex gap-10">
                        <div class="flex items-center">
                            <input type="radio" name="roles_{{ $uniqueId }}" value="student"
                                id="student_{{ $uniqueId }}" checked required
                                onchange="window.FormHandler_{{ $uniqueId }}.checkRole()">
                            <label for="student_{{ $uniqueId }}"
                                class="{{ $color && $color == 'dark' ? 'text-dark' : 'text-white' }} {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-base' }} ml-2">Student</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="roles_{{ $uniqueId }}" value="parent"
                                id="parent_{{ $uniqueId }}" required
                                onchange="window.FormHandler_{{ $uniqueId }}.checkRole()">
                            <label for="parent_{{ $uniqueId }}"
                                class="{{ $color && $color == 'dark' ? 'text-dark' : 'text-white' }} {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-base' }} ml-2">Parent</label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input type="text"
                        class="md:py-1 py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-base' }} text-dark rounded-xl w-full"
                        placeholder="Full Name *" id="primary_name_{{ $uniqueId }}" required
                        oninput="window.FormHandler_{{ $uniqueId }}.checkValidation('primary_name')">
                    <div id="primary_name_error_{{ $uniqueId }}" class="text-red text-[10px] mt-1 hidden">
                    </div>
                </div>

                <div>
                    <input type="text"
                        class="md:py-1 py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-base' }} text-dark rounded-xl w-full hidden mb-3"
                        placeholder="Child Name *" id="secondary_name_{{ $uniqueId }}" required
                        oninput="window.FormHandler_{{ $uniqueId }}.checkValidation('secondary_name')">
                    <div id="secondary_name_error_{{ $uniqueId }}" class="text-red text-[10px] mt-1 hidden">
                    </div>
                </div>

                <div class="mb-3">
                    <input type="text"
                        class="md:py-1 py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-base' }} text-dark rounded-xl w-full"
                        placeholder="Phone Number *" id="phone_number_{{ $uniqueId }}" required
                        oninput="window.FormHandler_{{ $uniqueId }}.checkValidation('phone_number')">
                    <div id="phone_number_error_{{ $uniqueId }}" class="text-red text-[10px] mt-1 hidden">
                    </div>
                </div>

                <div class="mb-3">
                    <input type="text"
                        class="md:py-1 py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-base' }} text-dark rounded-xl w-full"
                        placeholder="School Name *" id="school_name_{{ $uniqueId }}" required
                        oninput="window.FormHandler_{{ $uniqueId }}.checkValidation('school_name')">
                    <div id="school_name_error_{{ $uniqueId }}" class="text-red text-[10px] mt-1 hidden"></div>
                </div>

                <div class="mb-3">
                    <select
                        class="md:py-1 py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-base' }} text-dark rounded-xl w-full"
                        id="graduation_year_{{ $uniqueId }}" required>
                        <option class="text-gray-300" value="">Select Graduation Year</option>
                        @for ($i = date('Y'); $i < date('Y') + 5; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="mb-3">
                    <div class="g-recaptcha" id="rcaptcha_{{ $uniqueId }}"></div>
                    <span id="captcha_{{ $uniqueId }}" class="text-red"></span>
                </div>

                <div class="mb-3">
                    <button type="button" class="w-full text-white text-center py-2 rounded-xl"
                        style="background-color: {{ !empty($submitColor) ? $submitColor : '#302974' }}"
                        onclick="window.FormHandler_{{ $uniqueId }}.submitForm()">
                        <span id="send_{{ $uniqueId }}">
                            <i class="fas fa-paper-plane mr-4"></i>
                        </span>
                        <span id="loading_{{ $uniqueId }}" class="hidden">
                            <i class="fas fa-spinner fa-spin mr-4"></i>
                        </span>
                        {{ !empty($submitTitle) ? $submitTitle : 'Submit' }}
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="thanksForm_{{ $uniqueId }}" class="hidden">
        <div class="flex flex-col justify-center">
            <h3 class="mb-4 mt-4 text-white text-center text-lg">
                Thank You <br /> For Submitting Your Form!
            </h3>
            <p class="text-white text-center">
                You will receive a confirmation email and our team will contact you shortly.
            </p>
        </div>
    </div>
</div>

@push('style')
    @once
        <script src="https://www.google.com/recaptcha/api.js?onload=initAllRecaptchas&render=explicit" async defer></script>
    @endonce
@endpush

@push('script')
    <!-- Meta Pixel (once) -->
    @once
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1067393485185284');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=1067393485185284&ev=PageView&noscript=1" /></noscript>
    @endonce

    {{-- Store form instance data --}}
    <script>
        window.FormInstances = window.FormInstances || [];
        window.recaptchaWidgetId = window.recaptchaWidgetId || {};

        (function(uid) {
            const validation = {};

            function checkRole() {
                const role = document.querySelector('input[name="roles_' + uid + '"]:checked');
                const secondaryName = document.getElementById('secondary_name_' + uid);
                if (role && role.value === 'parent') {
                    secondaryName.classList.remove('hidden');
                } else {
                    secondaryName.classList.add('hidden');
                    secondaryName.value = '';
                }
            }

            function checkValidation(field) {
                const el = document.getElementById(field + '_' + uid);
                const errorEl = document.getElementById(field + '_error_' + uid);
                const forbidden = /[<>'"();{}$%&#!?+=\/\\|\[\]*^`~]/;
                let msg = '';

                if (forbidden.test(el.value)) {
                    msg = 'This field must not contain symbols.';
                }

                errorEl.textContent = msg;
                errorEl.classList.toggle('hidden', !msg);
                el.classList.toggle('border-red', !!msg);
                el.classList.toggle('border-none', !msg);

                validation[field] = !msg;
            }

            function checkCaptcha() {
                const response = grecaptcha.getResponse(window.recaptchaWidgetId[uid]);
                const errorEl = document.getElementById('captcha_' + uid);
                if (!response || response.length === 0) {
                    errorEl.textContent = "Please verify you are not a robot.";
                    return false;
                } else {
                    errorEl.textContent = "";
                    return true;
                }
            }

            function submitForm() {
                const formValid = !Object.values(validation).includes(false);
                const inputs = document.querySelectorAll('#myForm_' + uid + ' input[required]:not(.hidden), #myForm_' +
                    uid + ' select[required]');
                let allFilled = true;

                inputs.forEach(function(input) {
                    if (!input.value.trim()) {
                        allFilled = false;
                        input.classList.add('border-red');
                    } else {
                        input.classList.remove('border-red');
                    }
                });

                const sendIcon = document.getElementById('send_' + uid);
                const loadingIcon = document.getElementById('loading_' + uid);
                loadingIcon.classList.remove('hidden');
                sendIcon.classList.add('hidden');

                if (allFilled && formValid && checkCaptcha()) {
                    const role = document.querySelector('input[name="roles_' + uid + '"]:checked').value;
                    const formData = {
                        'role': role,
                        'fullname': document.getElementById('primary_name_' + uid).value,
                        'mail': null,
                        'phone': document.getElementById('phone_number_' + uid).value,
                        'secondary_name': document.getElementById('secondary_name_' + uid).value,
                        'secondary_mail': null,
                        'secondary_phone': null,
                        'school_id': 'new',
                        'other_school': document.getElementById('school_name_' + uid).value,
                        'graduation_year': document.getElementById('graduation_year_' + uid).value,
                        'interest_prog': "{{ $programId }}",
                        'destination_country': [],
                        'lead_id': "{{ $leadId }}",
                    };

                    fetch('{{ env('CRM_DOMAIN') }}register/public', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(formData)
                        })
                        .then(function(response) {
                            if (response.ok) {
                                window.location.href =
                                    "https://edu-all.com/id-en/programs/thank-you-for-your-interest-in-our-programs";
                            } else {
                                throw new Error('Submission failed');
                            }
                        })
                        .catch(function(err) {
                            console.error(err);
                            loadingIcon.classList.add('hidden');
                            sendIcon.classList.remove('hidden');
                        });
                } else {
                    loadingIcon.classList.add('hidden');
                    sendIcon.classList.remove('hidden');
                }
            }

            window['FormHandler_' + uid] = {
                checkRole: checkRole,
                checkValidation: checkValidation,
                submitForm: submitForm
            };

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', function() {
                    checkRole();
                });
            } else {
                checkRole();
            }

            window.FormInstances.push({
                uid: uid,
                sitekey: '6LeKwI8qAAAAAGA8ypgp-u0gDloCz27jeVQmniif'
            });

        })('{{ $uniqueId }}');
    </script>
@endpush

{{-- Define the required global reCAPTCHA callback --}}
@once
    <script>
        window.initAllRecaptchas = function() {
            if (!window.FormInstances || !window.grecaptcha) return;

            window.FormInstances.forEach(form => {
                const containerId = `rcaptcha_${form.uid}`;
                const container = document.getElementById(containerId);
                if (container && !container.hasAttribute('data-rendered')) {
                    try {
                        const widgetId = grecaptcha.render(containerId, {
                            sitekey: form.sitekey,
                            // Optional: add size, theme, etc.
                        });
                        window.recaptchaWidgetId[form.uid] = widgetId;
                        container.setAttribute('data-rendered', 'true');
                    } catch (e) {
                        console.error('Failed to render reCAPTCHA for', containerId, e);
                    }
                }
            });
        };
    </script>
@endonce
