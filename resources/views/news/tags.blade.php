<table>
    @foreach($tags as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->path}}</td>

            @foreach($item->news as $news)

                <td>{{$news->name}}</td>
            @endforeach
        </tr>
    @endforeach
</table>
