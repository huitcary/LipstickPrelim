<div>
    <table class="table table-striped shadow border border-light">
        <thead class="bg-info">
            <tr>
                <th>ID No</th>
                <th>Brand Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Shades</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lipsticks as $lipstick)
                <tr>
                    <td>{{ $lipstick->id }}</td>
                    <td>{{ $lipstick->brand_name }}</td>
                    <td>{{ $lipstick->type }}</td>
                    <td>{{ $lipstick->price }}</td>
                    <td>{{ $lipstick->shades }}</td>
                    <td>
                        <a href="{{ url('edit', ['lipstick' => $lipstick->id]) }}" class="btn btn-primary" id="ic" title="Edit">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['lipstick' => $lipstick->id]) }}" class="btn btn-danger" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    <style>
#basic-add01{
    width: 40px;
    text-align:center;
    background-color: white;
}
body{
    background-image: url("images/img.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%
}
</style>

</style>

