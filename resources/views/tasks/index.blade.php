<x-app-layout>
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="container">

                <div class="card">
                    <div class="card-header">
                        <h3>List of tasks</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="list_tasks" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Publish Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->id }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>{{ $task->date }}</td>
                                        <td>Not completed</td>
                                        <td><button class="btn btn-danger" id="delete-task"
                                                data-id='{{ $task->id }}'>Delete</button>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function() {
        $('#list_tasks').DataTable();
    });


</script>
