function addTask() {
  var taskText = document.getElementById("task").value;
  if (taskText !== "") {
    var ul = document.getElementById("taskList");
    var li = document.createElement("li");
    li.innerHTML = taskText + '<button class="delete-button" onclick="removeTask(this)">Hapus</button>';
    ul.appendChild(li);
    document.getElementById("task").value = "";
  }
}

function removeTask(button) {
  button.parentElement.remove();
}
