<div class="card tasks-card">
    <div class="card-body justify-content-center">
        <h2>Tasks</h2>
        
        <p class="card-separator"></p>

        <ul class="task-list">
            @foreach($notCompletedTasks as $key => $task)
                <div id="non_comp_tasks">
                    <li class="task" onclick="editTask({{$task->id}})" ><span class="task-number" >{{++$key}}</span> {{ $task->title }}</li>

                    <ul >
                        <li onclick="taskCompleted({{$task->id}})" class="task-buttons btn-completed"><i class="fas fa-check"></i></li>
                        <li onclick="editTask({{$task->id}})"  class="task-buttons btn-update"><i class="fas fa-edit"></i></li>
                        <li onclick="deleteTask({{$task->id}})"  class="task-buttons btn-delete"><i class="fas fa-trash-alt"></i></li>
                    </ul>
                </div>
            @endforeach
        </ul>
    </div>
</div>

