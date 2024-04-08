<x-layout>
<!-- start of title -->
    <div class="donors-home">
<div class="word1">
    <h1 data-translate="donor">Donors</h1>
</div>
<!-- end of title -->

<!-- start of table  -->
<table class="table1 table1-hover">
    <thead>
    <tr>
        <th scope="col" data-translate="donor-address">Address</th>
        <th scope="col" data-translate="donor-type">Blood type</th>
        <th scope="col" data-translate="donor-age">Age</th>
        <th scope="col" data-translate="donor-gender">Gender</th>
        <th scope="col" data-translate="donor-last">Last Donation</th>
    </tr>
    </thead>
    <tbody>
    @unless(count($donors) == 0)
        @foreach($donors as $donor)
            <tr>
                <td >{{ $donor->address }}</td>
                <td>{{ $donor->blood_type }}</td>
                <td>{{ $donor->age }}</td>
                <td>{{ $donor->gender }}</td>
                <td>{{ $donor->date }}</td>
            </tr>
        @endforeach
    @else
        <p style="color: red;font-size: 18px;text-align: center;font-weight: bolder">No Donors Now</p>
    @endunless
    </tbody>
</table>
    <div style="display: flex;align-items: center;justify-content: space-around;margin-top: 30px">
        {{ $donors->links() }}
    </div>
<!-- end of table -->
<!-- start of find donor btn -->
<div class="table-btn">
    <a href="{{ route('find-donor.create') }}" class="send-btn"  role="button" aria-pressed="true">
        <button id="btn-send" data-translate="sign-find">
            Find Donor
        </button>
    </a>
</div>
    </div>
<!-- end of find donor btn -->
</x-layout>





