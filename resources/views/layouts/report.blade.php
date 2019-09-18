<table id="students-table" class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DAY 1</th>
        <th>DAY 1</th>
        <th>DAY 1</th>
        <th>DAY 2</th>
        <th>DAY 2</th>
        <th>DAY 2</th>
        <th>DAY 3</th>
        <th>DAY 3</th>
        <th>DAY 3</th>
        <th>TOTAL</th>
    </tr>
    </thead>
    <tbody>
    @foreach($meals as $item)
        <tr>
            <td>{{$item["id"]}}</td>
            <td>{{$item["name"]}}</td>
            <td>{{$item["meal_1"]}}</td>
            <td>{{$item["meal_2"]}}</td>
            <td>{{$item["meal_3"]}}</td>
            <td>{{$item["meal_4"]}}</td>
            <td>{{$item["meal_5"]}}</td>
            <td>{{$item["meal_6"]}}</td>
            <td>{{$item["meal_7"]}}</td>
            <td>{{$item["meal_8"]}}</td>
            <td>{{$item["meal_9"]}}</td>
            <td>{{$item["total"]}}</td>
        </tr>
    @endforeach
    </tbody>
</table>