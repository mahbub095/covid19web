
<div class="container">

    <table id="data" class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Districts</th>
            <th scope="col">Confirmed</th>
            <th scope="col">Recovered</th>
            <th scope="col">Deaths</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($bdtable as $btbale)
            <td>{{$btbale["name"]}}</td>
            <td>{{$btbale["confirmed"]}} </td>
            <td>{{$btbale["recovered"]}} </td>
            <td>{{$btbale["deaths"]}} </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
