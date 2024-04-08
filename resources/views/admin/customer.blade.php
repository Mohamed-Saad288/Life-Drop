<x-admin-layout>
    <div class="donors-home">
    <div class="word1">
        <h1>Find doner</h1>
    </div>
    <table class="table1 table1-hover">
        <thead>
        <tr>
            <th scope="col">Blood type</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Address patient</th>
            <th scope="col">id image</th>
            <th scope="col">Reason to find</th>
            <th scope="col">phone number</th>
            <th scope="col">count of blood</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @unless(count($customers) == 0)
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->blood_type }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->age }}</td>
                <td>{{ $customer->address }}</td>
                <td><img width="85" src="{{ asset('storage/'.$customer->id_image) }}"></td>
                <td>{{ $customer->reason }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->amount }}</td>
                <td>
                    <form action="{{ route('customer.destroy',$customer) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        @else
            <p style="color: red;font-size: 18px;text-align: center;font-weight: bolder">No Customers Now</p>
        @endunless
        </tbody>
    </table>
    <div style="display: flex;align-items: center;justify-content: space-around;margin-top: 30px">
        {{ $customers->links() }}
    </div>
    </div>
</x-admin-layout>
