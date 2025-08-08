<div class="mx-auto md:max-w-md max-w-[22rem] ease-in-out duration-500 z-[999999]" id="formRegist">
    <div class="bg-black p-4 rounded-xl shadow-2xl">
        <div id="myForm">
            <h2 class="text-white {{ !empty($fontSize) ? 'text-xl' : 'text-base' }}">Let us know you better by filling
                out this
                form</h2>
            <div class="mt-5">
                <div class="flex flex-col">
                    <div class="mb-3">
                        <div class="flex gap-10">
                            <div class="flex items-center">
                                <input type="radio" name="roles" value="student" id="student" checked required
                                    onchange="checkRole()">
                                <label for="student"
                                    class="text-white {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} ml-2">Student</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="roles" value="parent" id="parent" required
                                    onchange="checkRole()">
                                <label for="parent"
                                    class="text-white {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} ml-2">Parent</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text"
                            class="md:py-1 py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} text-dark rounded-xl w-full"
                            placeholder="Full Name *" id="primary_name" required
                            oninput="checkValidation('primary_name')">
                        <div id="primary_name_error" class="text-red text-[10px] mt-1 hidden">
                        </div>
                    </div>
                    <div>
                        <input type="text"
                            class="md:py-1 py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} text-dark rounded-xl w-full hidden mb-3"
                            placeholder="Child Name *" id="secondary_name" required
                            oninput="checkValidation('secondary_name')">
                        <div id="secondary_name_error" class="text-red text-[10px] mt-1 hidden">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text"
                            class="md:py-1 py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} text-dark rounded-xl w-full"
                            placeholder="Phone Number *" id="phone_number" required
                            oninput="checkValidation('phone_number')">
                        <div id="phone_number_error" class="text-red text-[10px] mt-1 hidden">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text"
                            class="md:py-1 py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} text-dark rounded-xl w-full"
                            placeholder="School Name *" id="school_name" required
                            oninput="checkValidation('school_name')">
                        <div id="school_name_error" class="text-red text-[10px] mt-1 hidden">
                        </div>
                    </div>
                    <div class="mb-3">
                        <select
                            class="md:py-1 py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} text-dark rounded-xl w-full"
                            id="graduation_year" required>
                            <option class="text-gray-300" value="">Select Graduation Year</option>
                            @for ($i = date('Y'); $i < date('Y') + 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="g-recaptcha" id="rcaptcha" class="w-full"></div>
                        <span id="captcha" class="text-red" />
                    </div>
                    <div class="mb-3">
                        <button type="button" class="w-full bg-newprimary text-white text-center py-2 rounded-xl"
                            onclick="submit()">
                            <span id="send">
                                <i class="fas fa-paper-plane mr-4"></i>
                            </span>
                            <span id="loading" class="hidden">
                                <i class="fas fa-spinner fa-spin mr-4"></i>
                            </span>
                            Submit </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="thanksForm" class="hidden">
            <div class="flex flex-col justify-center">
                <h3 class="mb-4 mt-4 text-white text-center text-lg">
                    Thank You <br />
                    For Submitting Your Form!
                </h3>
                <p class="text-white text-center">
                    You will receive a confirmation email and our team will contact you
                    shortly.
                </p>
            </div>
        </div>
    </div>
</div>
@push('style')
    <script script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('rcaptcha', {
                'sitekey': '6LeKwI8qAAAAAGA8ypgp-u0gDloCz27jeVQmniif',
                'callback': checkCaptcha
            });
        };
    </script>
@endpush
@push('script')
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
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
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1067393485185284');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1067393485185284&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <script>
        const checkRole = () => {
            const role = document.querySelector('input[name="roles"]:checked');
            const secondaryName = document.getElementById('secondary_name');

            if (role.value === 'parent') {
                secondaryName.classList.remove('hidden')
            } else {
                secondaryName.classList.add('hidden')
                secondaryName.value = ''
            }
        }

        const checkCaptcha = () => {
            var v = grecaptcha.getResponse();

            if (v.length == 0) {
                document.getElementById('captcha').innerHTML = "Please verify you are not a robot.";
                return false;
            } else {
                return true;
                // Here you can perform an actual form submission if needed, e.g., using an AJAX request or form.submit().
            }
        }

        let validation = []

        const checkValidation = (id) => {
            const element = document.getElementById(id);
            const errorMsg = document.getElementById(id + '_error');
            const forbiddenSymbols = /[<>'"();{}$%&#!?+=\/\\|\[\]*^`~]/;
            let msg = ''

            if (forbiddenSymbols.test(element.value)) msg = 'This field must not contain symbols.';

            errorMsg.textContent = msg;
            errorMsg.classList.toggle('hidden', !msg);
            element.classList.toggle('border-none', !msg);
            element.classList.toggle('border-red', !!msg);

            validation[id] = msg ? false : true
        }


        const submit = () => {
            const checkValidation = Object.values(validation).includes(false)

            // Get value
            const role = document.querySelector('input[name="roles"]:checked');
            const primaryName = document.getElementById('primary_name');
            const secondaryName = document.getElementById('secondary_name');
            const phoneNumber = document.getElementById('phone_number');
            const schoolName = document.getElementById('school_name');
            const graduationYear = document.getElementById('graduation_year');
            const loadingIcon = document.getElementById('loading')
            const sendIcon = document.getElementById('send')
            const formPage = document.getElementById('myForm')
            const thanksPage = document.getElementById('thanksForm')
            const formRegistPage = document.getElementById('formRegist')


            loadingIcon.classList.remove('hidden')
            sendIcon.classList.add('hidden')

            const formData = {
                'role': role.value,
                'fullname': primaryName.value,
                'mail': null,
                'phone': phoneNumber.value,
                'secondary_name': secondaryName.value,
                'secondary_mail': null,
                'secondary_phone': null,
                'school_id': 'new',
                'other_school': schoolName.value,
                'graduation_year': graduationYear.value,
                'interest_prog': "{{ $programId }}",
                'destination_country': [],
                'lead_id': "{{ $leadId }}",
            }

            const inputs = document.querySelectorAll('#myForm input, #myForm select');
            let isValid = true;

            // Loop through inputs and check for validation
            inputs.forEach(function(input) {
                if (input.required && !input.value && input.value != ' ' && !input.classList.contains(
                        'hidden')) {
                    isValid = false;
                    input.setCustomValidity('Please fill in required fields');
                    input.classList.add('border-red'); // Add red border to invalid inputs (optional)
                    input.classList.remove('border-green-500'); // Remove green border if any
                } else {
                    input.setCustomValidity('');
                    input.classList.remove('border-red');
                    input.classList.add('border-green-500');
                }
            });

            // If the form is valid, proceed with submission
            if (isValid && !checkValidation) {
                const captcha = checkCaptcha();
                if (captcha) {

                    $.ajax({
                        url: '{{ env('CRM_DOMAIN') }}register/public', // Replace with the API endpoint
                        type: 'POST', // Specify the request type (POST)
                        contentType: 'application/json', // Set content type to JSON
                        data: JSON.stringify(formData), // Convert formData to a JSON string
                        success: function(response) {
                            // Handle the response on success
                            loadingIcon.classList.add('hidden')
                            sendIcon.classList.remove('hidden')

                            // Move to Success Response 
                            // formPage.classList.add('hidden')
                            // thanksPage.classList.remove('hidden')

                            location.href =
                                "https://edu-all.com/id-en/programs/thank-you-for-your-interest-in-our-programs";
                        },
                        error: function(xhr, status, error) {
                            // Handle errors here
                            console.error(error);
                            loadingIcon.classList.add('hidden')
                            sendIcon.classList.remove('hidden')
                        }
                    });


                } else {
                    loadingIcon.classList.add('hidden')
                    sendIcon.classList.remove('hidden')
                }
            } else {
                loadingIcon.classList.add('hidden')
                sendIcon.classList.remove('hidden')
            }

            return true;
        }
    </script>
@endpush
