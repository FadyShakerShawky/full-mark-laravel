
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('style/lectureTable.css')}}" />
    <title>All course files</title>
  </head>
  <body>
    <table class="content-table">
      <thead>
        <tr>
          <th>File number</th>
          <th>Title</th>
          <th>Description</th>
          <th>Show</th>
          <th>Download</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($file as $key=>$data)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        <td><a href="/lectures/{{$data->id}}">View</a></td>
        <td><a href="/lectures/download/{{$data->file}}">Download</a></td>
        <td><a class="btn btn-danger" href="{{route('destroy.lecture',$data->id)}}">Delete</a></td>

    </tr>
    @endforeach
        {{-- <tr class="active-row">
          <td>2</td>
          <td>Sally</td>
          <td>72,400</td>
        </tr> --}}
        {{-- <tr>
          <td>3</td>
          <td>Nick</td>
          <td>52,300</td>
        </tr> --}}
      </tbody>
    </table>
  </body>
</html>

