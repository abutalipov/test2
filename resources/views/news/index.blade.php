<table>
    @foreach($news as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->path}}</td>

            @foreach($item->tags as $tags)

                <td>{{$tags->name}}</td>
            @endforeach
        </tr>
    @endforeach
</table>
