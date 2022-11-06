@extends('layouts.app')
@section('content')
    <a href="{{route('posts.create')}}" class="btn btn-primary mt-3 text-center">Create Post</a>
        <table class="table mt-1 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By </th>
                    <th scope="col">Created At</th>
                    <th scope="col">Controls</th>
                </tr>
            </thead>
            <tbody>
                <?php $id = 0 ; ?>
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{++$id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->posted_by}}</td>
                    <td>{{$post->created_at -> format('Y-m-d')}}</td>
                    <td>
                        <a href="{{route('posts.show',['id'=>$post->id])}}" class="btn btn-info">View</a>

                        <a href="{{route('posts.edit', ['id'=>$post->id])}}" class="btn btn-success">Edit</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#id{{$post['id']}}">
                        Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="id{{$post['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Alarm Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are You Sure To Delete Post? {{$post->title}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form method="POST" action="{{route('posts.destroy', ['id'=> $post->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                </form>
                                </div>
                            </div>
                        </div>
</div>
                    </td>
                </tr>
    @endforeach
            </tbody>
        </table>
@endsection('content')
