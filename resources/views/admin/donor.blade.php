<x-admin-layout>
    <div class="donors-home">
    <div class="word1">
        <h1>Donors</h1>
    </div>
    <table class="table1 table1-hover">
        <thead>
        <tr>
            <th scope="col">Blood type</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Address </th>
            <th scope="col">id image</th>
            <th scope="col">phone number</th>
            <th scope="col">Last donation</th>
            <th scope="col">Delete</th>

        </thead>
        <tbody>
        @unless(count($donors) == 0)
        @foreach($donors as  $donor)
            <tr>
                <td>{{ $donor->blood_type }}</td>
                <td>{{ $donor->name }}</td>
                <td>{{ $donor->age }}</td>
                <td>{{ $donor->address }}</td>
                <td><img width="80" src="{{ asset('storage/'.$donor->id_image)  }}"></td>
                <td>{{ $donor->phone }}</td>
                <td>{{ $donor->date }}</td>
                <td>
                    <form action="{{ route('donors.destroy',$donor) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        @else
            <p style="color: red;font-size: 18px;text-align: center;font-weight: bolder">No Donors Now</p>
        </tbody>
        @endunless
    </table>
    <div style="display: flex;align-items: center;justify-content: space-around;margin-top: 30px">
        {{ $donors->links() }}
    </div>
    </div>
</x-admin-layout>
