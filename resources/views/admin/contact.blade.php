<x-admin-layout>
<div class="word1">
    <h1>contact us</h1>
</div>
<table class="table1 table1-hover">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
        <th scope="col">Delete</th>


    </tr>
    </thead>
    <tbody>
    @unless(count($contacts) == 0)
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->message }}</td>
                <td>
                    <form action="{{ route('contact.delete',$contact) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @else
        <p style="color: red;font-size: 18px;text-align: center;font-weight: bolder">No Contacts Now</p>
    @endunless
    </tbody>
</table>
    <div style="display: flex;align-items: center;justify-content: space-around;margin-top: 30px">
        {{ $contacts->links() }}
    </div>
</x-admin-layout>
