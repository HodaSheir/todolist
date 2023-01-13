<div class="card tasks-card">
    <div class="card-body justify-content-center">
        <h2>Completed Tasks</h2>

        <p class="card-separator"></p>
        
        <ul class="task-list">
            @foreach($completedTasks as $key => $task)
                <div id="completed_tasks">
                    <li class="task" onclick="editTask({{$task->id}})" >
                        <span class="task-completed-icon"><i class="fas fa-check"></i></span> - {{$task->title}}
                        <span class="task-completed-date">(Finished at: {{$task->completed_at}})</span>
                    </li>

                    <ul>
                        <li onclick="returnTask({{$task->id}})"  class="task-buttons"><i class="fas fa-undo-alt"></i></li>
                        <li onclick="deleteTask({{$task->id}})" class="task-buttons"><i class="fas fa-trash-alt"></i></li>
                    </ul>
                </div>
            @endforeach
        </ul>
    </div>
</div>
