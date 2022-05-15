<html>
   <head>
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style type="text/css">
      </style>
   </head>
   <body>
 <div class="col-md-12"> 
        <table class="table table-sm " width="100%" align="center">
          <tbody>
          
            <tr>  
        <td align="right" style="background: #4682B4  ; color: #000">
          <img src="{{ asset('img/src.png') }}" width="30%">
            </td>
              <td rowspan="1" style="background: #4682B4	; color: #fff">
                  <p>
                    <strong>
                      SANTA RITA COLLEGE OF PAMPANGA <br> 
                      San Jose, Santa Rita Pampanga <br>
                      Tel No: (045) 900-5007<br>
                    </strong>
                  </p>
              </td>
            </tr>
          </tbody>
        </table>
        <hr>

        <table class="table table-bordered">
        	<thead>
        		<tr>
        			<th>Category</th>
        			<th>Books Collect</th>
        			<th>Created At</th>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach ($collections as $collect)
        		<tr>
        			<td>{{ $collect->title }}</td>
        			<td>{{ $collect->books_count }}</td>
        			<td>{{ $collect->created_at }}</td>
        		</tr>
        		@endforeach
        	</tbody>
        </table>
</body>
</html>