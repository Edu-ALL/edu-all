<div class="mx-auto max-w-md">
    <div class="bg-black p-4 rounded-xl shadow-2xl">
        <h2 class="text-white text-lg">Let us know you better by filling out this form</h2>
        <div id="myForm">
            <div class="mt-5">
                <div class="flex flex-col">
                    <div class="mb-3">
                        <div class="flex gap-10">
                            <div class="flex items-center">
                                <input type="radio" name="roles" value="student" id="student" checked required
                                    onchange="checkRole()">
                                <label for="student" class="text-white ml-2">Student</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="roles" value="parent" id="parent" required
                                    onchange="checkRole()">
                                <label for="parent" class="text-white ml-2">Parent</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control text-dark rounded-xl w-full" placeholder="Full Name *"
                            id="primary_name" required>
                    </div>
                    <div>
                        <input type="text" class="form-control text-dark rounded-xl w-full hidden mb-3"
                            placeholder="Child Name *" id="secondary_name" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control text-dark rounded-xl w-full"
                            placeholder="Phone Number *" id="phone_number" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control text-dark rounded-xl w-full"
                            placeholder="School Name *" id="school_name" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control text-dark rounded-xl w-full" id="graduation_year" required>
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
                            onclick="submit()"> Submit </button>
                    </div>
                </div>
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
                document.getElementById('captcha').innerHTML = "You can't leave Captcha Code empty";
                return false;
            } else {
                return true;
                // Here you can perform an actual form submission if needed, e.g., using an AJAX request or form.submit().
            }
        }


        const submit = () => {
            // Get value
            const role = document.querySelector('input[name="roles"]:checked');
            const primaryName = document.getElementById('primary_name');
            const secondaryName = document.getElementById('secondary_name');
            const phoneNumber = document.getElementById('phone_number');
            const schoolName = document.getElementById('school_name');
            const graduationYear = document.getElementById('graduation_year');

            const formData = {
                'roles': role.value,
                'primary_name': primaryName.value,
                'secondary_name': secondaryName.value,
                'phone_number': phoneNumber.value,
                'school_name': schoolName.value,
                'graduation_year': graduationYear.value,
                'lead_source_id': "{{ $leadId }}",
                'program_id': "{{ $programId }}",
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
            if (isValid) {

                const captcha = checkCaptcha();
                if (captcha) {
                    alert('Submitted')
                }
            }

            return true;
        }
    </script>
@endpush
