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
          <h3 class="panel-title">Attendance Data</h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            @csrf
            <table id="editable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Employee Name</th>
                  @for($i=1;$i<=30;$i++)
                  <th>
                    {{ $i }}
                  </th>
                  @endfor
                </tr>
              </thead>
              <tbody>
                @if($data)
                @foreach($data as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->name }}</td>
                  @for($i=1;$i<=30;$i++)
                  <td>
                    {{ date("h:i A", strtotime($row->attendance->first()->in_time)) }}
                    </br>
                    {{ date("h:i A", strtotime($row->attendance->first()->out_time)) }}
                  </td>
                  @endfor
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
      editable:[[1, 'name']]
      //editable:[[1, 'name'], [2, 'last_name'], [3, 'gender', '{"1":"Male", "2":"Female"}']]
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