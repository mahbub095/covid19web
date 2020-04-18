
<!DOCTYPE html>
<html lang="en">
<head>
	 
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>API</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row">


			<div class="col"></div>
			<div class="col">

 <div class="select" style="width: 20rem;">
                    <form action="{{url('/')}}" method="get">
                         <div class="form-group">
                            <select name="country" class="form-control select2">
                                <option value="" holder>Select Country</option>
                                @foreach($country as $result)
                                <option value="{{$result}}">{{$result}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block">Search Data</button>
                        </div>
                    </form>
                </div>

				<div class="card" style="width: 18rem;">
  <img src="{{url('/frontend/picture/img.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Covid 19</h5>
   
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$list_data["country"]}}</li>
    <li class="list-group-item">{{$list_data["confirmed"]}}</li>
     
  </ul>
<div class="card-body">
                        <table width="100%">
                            <tr>
                                <th>
                                    <h6 class="text-center">Dead</h6>
                                </th>
                                <th>
                                    <h6 class="text-center">Recovered</h6>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="text-center text-danger">{{$list_data["deaths"]}}</h4>
                                </td>
                                <td>
                                    <h4 class="text-center text-success">{{$list_data["recovered"]}}</h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                     <div class="card-footer">
                        <h6 class="text-center">Updated at: {{$list_data["lastUpdate"]}}</h6>
                    </div>
</div>

				
			</div>
		</div>
	 </div>

 
 

	  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


</body>
</html> 
 