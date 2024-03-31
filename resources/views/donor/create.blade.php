<x-layout>
    <!-- title -->
    <div class="word2">
        <h1 data-translate="donate">Donate Now</h1>
    </div>
    <!-- end of title -->

    <!-- start of form -->
    <form class="form-group3" action="{{ route('donor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- username -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-regular fa-user"></i>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control" required placeholder="name">
                <x-form.erorr name="name" />
            </div>
        </div>
        <!-- end of username -->

        <!-- blood type -->
        <div class="mail row">
            <label for="blood_type"></label>
            <select class="form-select"  name="blood_type" id="blood_type" >
                <option   selected data-translate="donor-type">Blood type</option>
                <option id="blood_type" value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>

        <x-form.erorr name="blood-type" />
        </div>

        <!-- end of blood type -->

        <!-- address -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-solid fa-address-card"></i>
                <input type="text" value="{{ old('address') }}"  class="form-control" name="address" required placeholder="address">
                <x-form.erorr name="address" />
            </div>
        </div>
        <!-- end of address -->

        <!-- form file -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-solid fa-id-card"></i>
                <input class="form-control" value="{{ old('id_image') }}"  name="id_image" type="file" id="formFile">
            </div>
            <x-form.erorr name="id_image" />
        </div>
        <!-- end form file -->

        <!-- phone -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-solid fa-phone"></i>
                <input type="text" class="form-control" value="{{ old('phone') }}"  name="phone" id="inputnumber" required placeholder="phone number">
            </div>
            <x-form.erorr name="phone" />
        </div>
        <!-- end of phone  -->

        <!-- age -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-brands fa-adn"></i>
                <input type="text" class="form-control" value="{{ old('age') }}"  name="age" required placeholder="age">
            </div>
            <x-form.erorr name="age" />
        </div>
        <!-- end of age -->

        <!-- last donation -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-solid fa-calendar-days"></i>
                <input type="date" value="{{ old('date') }}"  class="form-control" name="date" required placeholder="Last Donation">
                <x-form.erorr name="date" />
            </div>
            <!-- end of last donation -->


            <!-- gender -->
            <div class="mail row">
                <div class="gender">
                    <p class="star" data-translate="sign-gen">Gender</p>
                    <div class="check">
                        <input type="radio" id="Gender1" name="gender" value="Male" data-translate="sign-male">
                        <label for="Gender1" data-translate="sign-male">Male</label>
                        <input type="radio" value="Female" id="Gender2" name="gender" class="mr-4" data-translate="sign-female">
                        <label for="Gender2" data-translate="sign-female">Female</label>
                    </div>
                    <x-form.erorr name="gender" />
                </div>
            </div>
            <!-- end of gender -->

            <a href="#" class="save-btn"  role="button" aria-pressed="true">
                <button id="btn-save" data-translate="donate-btn">
                    Save
                </button>
            </a>
        </div>
    </form>
    <!-- end of form -->
</x-layout>
