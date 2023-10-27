<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Precticle Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
  </head>
  <body>
    <div class="container">
      <br />
      <h3 align="center">Precticle Test</h3>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Salary Data</h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            @csrf
            <table id="editable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Position Name</th>
                  <th>Basic Salary</th>
                  <th>HRA</th>
                  <th>DA</th>
                  <th>Other Allowances</th>
                  <th>Gross Salary</th>
                </tr>
              </thead>
              <tbody>
                @if($data)
                @foreach($data as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->position->name }}</td>
                  <td>{{ $row->basic_salary }}</td>
                  <td>{{ $row->hra }}</td>
                  <td>{{ $row->da }}</td>
                  <td>{{ $row->other_allowances }}</td>
                  <td>{{ $row->gross_salary }}</td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){

  $.ajaxSetup({
    headers:{
      'X-CSRF-Token' : $("input[name=_token]").val()
    }
  });

  $('#editable').Tabledit({
    url:'',
    dataType:"json",
    columns:{
      identifier:[0, 'id'],
      editable:[
        [1, 'position'],
        [2, 'basic_salary'],
        [3, 'hra'],
        [4, 'da'],
        [5, 'other_allowances'],
        [6, 'gross_salary']
      ]
    },
    restoreButton:false,
    onSuccess:function(data, textStatus, jqXHR)
    {
      if(data.action == 'delete')
      {
        $('#'+data.id).remove();
      }
    }
  });

});  
</script>