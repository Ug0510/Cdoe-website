@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

    <!-- breadcrumb start -->
    <div class="programme-banner">
        <img src="{{ asset('assets/img/programmes/programme-banner.webp') }}" alt="Programme Banner">

    </div>
    <!-- breadcrumb end -->
    <div class="bg-gray-100 min-h-screen py-10">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-dark-blue text-center mb-5">Admission Rules & Regulations</h1>
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
                <p class="text-gray-600 mb-6 leading-relaxed">
                    The University invites applications from eligible candidates for admission to different professional
                    programmes. Admission to these programmes will be based on merit determined as per the following
                    procedure.
                </p>
                <ul class="list-none space-y-3 mb-6">
                    <li class="flex items-start">

                        <span>
                            If you have appeared in a qualifying examination and the result is awaited, you can take
                            provisional admission. However, in all circumstances, you shall have to submit the result in the
                            university latest by October 31, except where the Regulatory Council’s norms prescribe
                            otherwise.
                        </span>
                    </li>
                    <li class="flex items-start ml-6">

                        <span class="text-sm text-gray-500">
                            Attach self-certified copies of your mark sheets/testimonials with the Application Form. At this
                            stage, do not send any original copies of mark-sheets/testimonials.
                        </span>
                    </li>
                    <li class="flex items-start ml-6">

                        <span class="text-sm text-gray-500">
                            Paste your latest photograph in the space provided in the Application Form.
                        </span>
                    </li>
                    <li class="flex items-start ml-6">

                        <span class="text-sm text-gray-500">
                            Before submitting/mailing the duly filled-up application form, go through all the points
                            contained in the form.
                        </span>
                    </li>
                    <li class="flex items-start ml-6">

                        <span class="text-sm text-gray-500">
                            The merit list declared by the University shall be final and binding.
                        </span>
                    </li>
                    <li class="flex items-start">

                        <span class="text-gray-600">
                            If any document/declaration submitted by the candidate is found to be false/forged at any stage,
                            his or her admission shall be cancelled and he/she may be liable for prosecution under law.
                        </span>
                    </li>
                    <li class="flex items-start">

                        <span class="text-gray-600">
                            The selection to the programme will be provisional until the candidate furnishes the required
                            documents and testimonials, including the final results of the qualifying examination at the
                            time of admission.
                        </span>
                    </li>
                    <li class="flex items-start">

                        <span class="text-gray-600">
                            Involvement of a candidate in any form of criminal activities debars the candidate from seeking
                            admission in any programme of the university. Concealment of information on this account will
                            lead to cancellation of admission, if detected subsequently.
                        </span>
                    </li>
                    <li class="flex items-start">

                        <span class="text-gray-600">
                            If the University is not satisfied with the character, past behaviour or antecedents of a
                            candidate, it may refuse to admit him/her to any programme of study in the University.
                        </span>
                    </li>
                    <li class="flex items-start">

                        <span class="text-gray-600">
                            It is advisable that students seeking admission in the University should visit along with their
                            parents/guardians to see the infrastructural facilities such as classrooms, laboratories,
                            library, hostel, and transportation. This may facilitate their decision at the time of
                            counselling/admission.
                        </span>
                    </li>
                    <li class="flex items-start">

                        <span class="text-gray-600">
                            At the time of admission, students are required to submit an affidavit duly signed by him/her
                            along with their parents/guardians with regard to disciplinary behaviour during the entire
                            period of the programme. If any violation is found, he/she shall be subject to the
                            punishment/suspension/rustication as per the University rules and regulations.
                        </span>
                    </li>
                    <li class="flex items-start">

                        <span class="text-gray-600">
                            In case of any legal dispute, the jurisdiction will be limited to Moradabad courts only.
                        </span>
                    </li>
                </ul>
                <div class="bg-light-blue p-4 rounded-lg mb-6">
                    <p class="italic text-gray-700">
                        Note: Payment of fee in ‘Cash’ is accepted only at the designated cash counter(s) at the university
                        campus. Students are advised to obtain the receipt for the same from the cash counter immediately
                        after making the cash payment.
                    </p>
                </div>
                <div class="bg-light-pink p-4 rounded-lg mb-6">
                    <p class="text-gray-700">
                        In case of any inconvenience in the Admission Process, please contact the Joint Director
                        (Admissions) in his office at Admission Cell, Administrative Block, Moradabad (Mob: <span
                            class="font-bold text-orange-500">+91-9837848862</span>).
                    </p>
                </div>
                <div class="text-center">
                    <a href="#"
                        class="bg-orange-500 text-white font-bold py-2 px-4 rounded hover:bg-orange-600 transition duration-300">
                        Download Admission Guide
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .text-dark-blue {
            color: #1A3C5A;
        }

        .bg-light-blue {
            background-color: #E6F0FA;
        }

        .bg-light-pink {
            background-color: #FFE6E6;
        }

        .text-orange-500 {
            color: #F5A623;
        }

        .bg-orange-500 {
            background-color: #F5A623;
        }

        .bg-orange-600 {
            background-color: #E69520;
        }
    </style>
@endsection