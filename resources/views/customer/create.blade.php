<x-layout>
    <!-- start of title -->
    <div class="word1">
        <h1 data-translate="sign-find">Find Doner</h1>
    </div>
    <!-- end of title -->

    <!-- start of form -->
    <form class="form-group2" action="{{ route('find-donor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- blood type -->
        <div class="mail row">
            <select class="form-select"  name="blood_type">
                <option selected data-translate="donor-type">Blood type</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <x-form.erorr name="blood_type" />
        </div>
        <!-- end of blood type -->

        <!-- username -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-regular fa-user"></i>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control" required placeholder="Name">
            </div>
            <x-form.erorr name="name" />
        </div>
        <!-- end of user name -->

        <!-- age -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-regular fa-calendar-days"></i>
                <input type="text" name="age" value="{{ old('age') }}" class="form-control" required placeholder="Age">
            </div>
            <x-form.erorr name="age" />
        </div>
        <!-- end of age -->

        <!-- address -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-solid fa-address-card"></i>
                <input type="text" name="address" value="{{ old('address') }}"  class="form-control" required placeholder="Address Patient">
            </div>
            <x-form.erorr name="Address" />
        </div>
        <!-- end of address -->

        <!-- form file -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-solid fa-id-card"></i>
                <input class="form-control" type="file" name="id_image" id="formFile">
            </div>
            <x-form.erorr name="id_image" />
        </div>
        <!-- end formfile -->

        <!-- reason -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-solid fa-question"></i>
                <input type="text" class="form-control" name="reason" value="{{ old('reason') }}" required placeholder="Reason To Find Doner">
            </div>
            <x-form.erorr name="reason" />
        </div>
        <!-- end of reason -->

        <!-- -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-solid fa-phone"></i>
                <input type="text" class="form-control" id="inputnumber" name="phone" value="{{ old('phone') }}" required placeholder="Phone Number">
            </div>
            <x-form.erorr name="phone" />
        </div>
        <!-- end of phone number   -->
        <div class="mail row">
            <div class="one1">
                <i class="fa-solid fa-droplet"></i>
                <input type="number" class="form-control" id="inputnumber" name="amount" value="{{ old('amount') }}"  required placeholder="Count Of Blood">
            </div>
            <x-form.erorr name="amount" />
        </div>

        <!-- gender -->
        <div class="mail row">
            <div class="gender">
                <p class="star" data-translate="sign-gen">Gender</p>
                <div class="check">
                    <input type="radio" value="Male" id="Gender1" name="gender" data-translate="sign-male">
                    <label for="Gender1" data-translate="sign-male">Male</label>
                    <input type="radio" value="Female" id="Gender2" name="gender" class="mr-4" data-translate="sign-female">
                    <label for="Gender2" data-translate="sign-female">Female</label>
                </div>
            </div>
            <x-form.erorr name="gender" />
        </div>
        <!-- end of gender -->

        <!--send btn  -->
        <a href="#" class="send-btn"  role="button" aria-pressed="true">
            <button id="btn-send" data-translate="donate-btn">
                send
            </button>
        </a>
        <!-- end of send btn -->

    </form>
</x-layout>
