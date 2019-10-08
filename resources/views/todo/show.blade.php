@extends('base')

@section('body')
        <table border="1">

            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
            @foreach ($todos as $todo)
            <?php if($todo->status == 1){
           echo' <tr>
             <th>';echo"{$todo->id}";echo '</th> 
                <th>';echo"{$todo->description}";echo '</th>
                <th>'; echo"Finished";echo '</th>
            </tr>'; 
        }
            ?>
            @endforeach
            <div>
                <tr>
                    
                </tr>
            </div>
        </table>
        <th><input type="button" value="back" onclick="location.href='/todo'"></th>

@endsection