<x-app-layout>
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Task Create</h5>
                                <form class="" action="{{ route('task.update') }}" method="POST">
                                    @csrf
                                    <div class="position-relative form-group">
                                        <label class="">Title</label>
                                        <input name="title" id="title" value="{{ $task->title }}" type="text"
                                            class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label class="">Task Description</label>
                                        <textarea name="description" id="description" class="form-control" cols="30" rows="5">{{ $task->description }}</textarea>
                                    </div>
                                    <button type="submit" class="mt-1 btn btn-create text-center">Update Task</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
