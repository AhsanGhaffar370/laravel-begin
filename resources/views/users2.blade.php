<h1>Users2 Page</h1>
<!-- <h2>Hello ({{--$usersname--}})</h2> -->
<h2>Hello ({{$usersname[2]}})</h2>
<h2>Total Number of Users:  {{count($usersname)}}</h2>

@if($usersname[0]=="rao")
    <h2>Hello ({{$usersname[2]}})</h2>
@elseif($usersname[1]=="faraz1")
    <h2>Hello ({{$usersname[1]}})</h2>
@else
    <h2>Hello (Unknown)</h2>
@endif

<h2> Users List (for)</h2>
@for($i=0;$i < 3;$i++)
    <span>{{$usersname[$i]}},</span>
@endfor

<h2> Users List (Foreach)</h2>
@foreach($usersname as $users)
    <span>{{$users}},</span>
@endforeach

<script>

    let data = @json($usersname); //convert php variable(username) to javascript
    // console.log($data)
    // console.warn(data[0])
    console.warn(data);
    // console.warn(data[0])
    // console.warn(data[0])
</script>
